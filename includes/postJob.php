<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require '../PHPMailer/src/Exception.php';
	require '../PHPMailer/src/PHPMailer.php';
	require '../PHPMailer/src/SMTP.php';
	include 'db.php';
	include '../conf.php';

	if (isset($_POST['job_title'])) {
		function passwordGenerate() {
		    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		    $password = array(); 
		    $alphabet_Length = strlen($alphabet) - 1;
		    for ($i = 0; $i < 9; $i++) {
		        $new = rand(0, $alphabet_Length);
		        $password[] = $alphabet[$new];
		    }
		    return implode($password); //turn the array into a string
		}

		$job_title =  filter_input(INPUT_POST, 'job_title', FILTER_SANITIZE_SPECIAL_CHARS);
		$job_category = filter_input(INPUT_POST, 'job_category', FILTER_SANITIZE_SPECIAL_CHARS); 
		$application_link = filter_input(INPUT_POST, 'application_link', FILTER_SANITIZE_SPECIAL_CHARS);
		$role_open_mode = $_POST['role_open_mode'];	
		$job_description = $_POST['job_description'];
		$job_type = $_POST['job_type'];
		$job_nature = $_POST['job_nature'];
		$salary_range = filter_input(INPUT_POST, 'salary_range', FILTER_SANITIZE_SPECIAL_CHARS);
		$start_date = $_POST['start_date'];
		$application_deadline = date('Y-m-d', strtotime($_POST['application_deadline'])) ;
		$estimated_period = $_POST['estimated_period'];
		$areas = '';
		if ($role_open_mode == '2') {
			
			foreach ($_POST['region'] as $key => $value) {
				$areas .= $value.', ';
			}
			$region = rtrim($areas, ', ');
		}else{
			
			$region = 'World Wide';
		}
		
		// company details -----
		$company_name =  filter_input(INPUT_POST, 'company_name', FILTER_SANITIZE_SPECIAL_CHARS);
		$company_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		$company_employees = filter_input(INPUT_POST, 'company_employees', FILTER_SANITIZE_SPECIAL_CHARS);
		$company_location = filter_input(INPUT_POST, 'company_location', FILTER_SANITIZE_SPECIAL_CHARS);
		$company_profile = filter_input(INPUT_POST, 'company_profile', FILTER_SANITIZE_SPECIAL_CHARS);
		$company_website = filter_input(INPUT_POST, 'company_website', FILTER_SANITIZE_SPECIAL_CHARS);
		$company_logo = $_FILES['company_logo']['name'];
		$filename = $_FILES['company_logo']['tmp_name'];
		$destination = '../uploads/'.basename($company_logo);
		move_uploaded_file($filename, $destination);

		// create an account

		$password_rand = passwordGenerate();
		$reserve = base64_encode($password_rand);
		$password = password_hash($password_rand, PASSWORD_DEFAULT);

		$query = $connect->prepare("SELECT * FROM register WHERE email = ? ");
		$query->execute(array($company_email));
		$count = $query->rowCount();
		if ($count > 0) {
			$row = $query->fetch();
			if ($row) {
				$company_id = $row['id'];
			}
			
		}else{

		    $QUERY = $connect->prepare("INSERT INTO `register` (`username`, `email`, `password`, `reserve`) VALUES (?, ?, ?, ?) ");
		    $execute = $QUERY->execute([$company_name, $company_email, $password, $reserve]);
			$company_id = $connect->lastInsertId();
			$update = $connect->prepare("UPDATE register SET parent_id = ? WHERE email = ? ");
	        $update->execute(array($company_id, $company_email));

			$message = '
	        		<!doctype html>
						<html lang="en-US">

						<head>
						    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
						    <title>Go Link Jobs - View my Resume</title>
						    <meta name="description" content="Go Link Jobs - View my Resume">
						    <style type="text/css">
						        .mailDiv {
									text-align:center;
									border:1px solid #dddd;
									box-shadow: 0 0 5px;
									padding:2em;
									
						        }
						      	a:link, a:active {text-decoration: none !important;}
						      
						      	p {
						        	margin:2em auto;
						      	}

						      	a.mainBtn {
							        border:2px solid #6499cd;
							        background: #6499cd;
							        color:#fff;
							        padding:1em .8em;
							        border-radius:45px;
							        text-shadow:0 0 4px;
						      	}
						    </style>
						</head>
						<body>
							<div class="mailDiv">
						      	<p align="center"><img src="https://golinkjobs.com/images/Gologo.png" width="80"></p>
						      	<h3>Hello '.$company_name.'</h3>
						      	<p>Thank you for posting your Vacancy on our Jobs Portal</p>
						      	<p>We have created you an account, should you wish to log in and see how the job listing is perfoming, you can use the credentials below once you activate your account</p>
						      	<p>User-email. '.$company_email.'</p>
						      	<p>User-Password. '.$password_rand.'</p>
						      	<p><a href="https://golinkjobs.com/activation?userid='.$company_id.'&email='.$company_email.'&pass='.$password.'" class="linkBtn"> Activate Account</a></p>
						    </div>
						</body>
					</html>
	                                  
	        ';
	    	
			$mail = new PHPMailer();
			$mail->Host = "smtp.zoho.com";
			$mail->isSMTP();
			$mail->SMTPAuth = true;
			$mail->Username = EMAIL_USERNAME;
			$mail->Password = EMAIL_PASSWORD;
			$mail->SMTPSecure = "ssl";//TLS
			$mail->Port = 465; //TLS port= 587
			$mail->addAddress($company_email, $company_name); //$inst_admin_email;
			$mail-> setFrom(EMAIL_USERNAME, 'Job Post Successful');
			$mail-> Subject = "Job Post Successful";
			$mail->isHTML(TRUE);
			// $mail->SMTPDebug = 2;
			$mail->Body = $message;
			if($mail->send()){
				// echo 'Account created please check your email inbox or spam for a verification link sent to '.$email; 
			}else{
				echo "Mailer Error: " . $mail->ErrorInfo;
			}
		}

		// insert company details 
		$query1 = $connect->prepare("SELECT * FROM `company` WHERE company_id = ? ");
        $query1->execute([$company_id]);
        if($query1->rowCount() > 0){

        }else{

			$sql = $connect->prepare("INSERT INTO `company`( `company_id`, `company_name`, `company_email`, `company_employees`, `company_website`, `company_location`, `company_logo`, `company_profile`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
			$ex = $sql->execute([$company_id, $company_name, $company_email, $company_employees, $company_website, $company_location, $company_logo, $company_profile]);
		}

		//insert job details

		$sql = $connect->prepare("INSERT INTO `posted_jobs`(`company_id`, `job_title`, `job_category`, `application_link`, `role_open_mode`, `job_description`, `job_type`, `job_nature`, `salary_range`, `start_date`, `application_deadline`, `estimated_period`, `region`) VALUES (?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$sql->execute([$company_id, $job_title, $job_category, $application_link, $role_open_mode, $job_description, $job_type, $job_nature, $salary_range, $start_date, $application_deadline, $estimated_period, $region]);
		$last_id = $connect->lastInsertId();
		
		$update = $connect->prepare("UPDATE posted_jobs SET posted = 1 WHERE id = ? AND company_id = ?");
		$update->execute([$last_id, $company_id]);

		// we send email with login credentials and 

		// $totalAmount = $estimated_period * 2.99;
		// setcookie("postedJobID", base64_encode($last_id), time()+60*60*24*7, '/');
		// setcookie("userMail", base64_encode($company_email), time()+60*60*24*7, '/');
		// setcookie("customer_name", base64_encode($company_name), time()+60*60*24*7, '/');
		// setcookie("totalAmount", base64_encode(number_format($totalAmount)), time()+60*60*24*7, '/');
		
		// echo "Job Submitted pending payments and verification";
		echo "Jobs Posted Successfully";

	}
?>