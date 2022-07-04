<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require '../PHPMailer/src/Exception.php';
	require '../PHPMailer/src/PHPMailer.php';
	require '../PHPMailer/src/SMTP.php';
	include "db.php";
	require_once "../conf.php";
	if (!empty($_POST['dataID'])) {
		//update data
		extract($_POST);
		$query = $connect->prepare("SELECT * FROM posted_cvs WHERE email = ? ");
		$query->execute([$email]);
		$row = $query->fetch();
		
		if ($_FILES['cv_file']['name'] == "") {
			$resume = $row['cv_file'];
		}else{
			$resume = $_FILES['cv_file']['name'];
			$filename = $_FILES['cv_file']['tmp_name'];
			$destination = '../cv_uploads/'.basename($resume);
			move_uploaded_file($filename, $destination);
		}

		$update = $connect->prepare("UPDATE posted_cvs SET `firstname` = ?, `lastname` = ?, `job_category` = ?, `email` = ?, `cv_file` = ?, `education_level` = ?, `field_studied` = ?, `work_experience` = ? WHERE id = ? ");
		$update->execute([$firstname, $lastname, $job_category, $email, $resume, $education_level, $field_studied, $work_experience, $dataID]);
		echo "Your resume has been updated ";

	}else{
	
		$firstname =  filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
		$lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS); 
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		$job_category = filter_input(INPUT_POST, 'job_category', FILTER_SANITIZE_SPECIAL_CHARS);
		$education_level = $_POST['education_level'];
		$field_studied = $_POST['field_studied'];
		$work_experience = $_POST['work_experience'];
		$code = mt_rand(100000,999999);
		$cv_file = $_FILES['cv_file']['name'];
		$filename = $_FILES['cv_file']['tmp_name'];
		$destination = '../cv_uploads/'.basename($cv_file);
		
		$query = $connect->prepare("SELECT * FROM `posted_cvs` WHERE `email` = ? ");
		$query->execute([$email]);
		if ($query->rowCount() > 0) {
			echo "You already have an existing Resume Saved";
			exit();
		}
		move_uploaded_file($filename, $destination);
		$sql = $connect->prepare("INSERT INTO `posted_cvs`(`firstname`, `lastname`, `job_category`, `email`, `cv_file`, `code`, `education_level`, `field_studied`, `work_experience`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$sql->execute(array($firstname, $lastname, $job_category, $email, $cv_file, $code, $education_level, $field_studied, $work_experience));
		$id = base64_encode($connect->lastInsertId());
		
		$message = '
		
					<!doctype html>
						<html lang="en-US">

						<head>
						    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
						    <title>Go Link Jobs - Resume Upload</title>
						    <meta name="description" content="Go Link Jobs - View my Resume">
						    <style type="text/css">
						        .mailDiv {
						          text-align:center;
						          border:1px solid #dddd;
						          box-shadow: 0 0 5px;
						          padding:2em;
						          letter-spacing:1.5px;
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
						      <h3>Hello '.$firstname.'</h3>
						    <p>Submited resume </p>
						    <a href="https://golinkjobs.com/verify?code='.$code.'&d='.base64_encode($email).'&i='.$id.'" class="mainBtn"> Verify Email</a>
						    <p>You can also copy and paste this link to your browser: href="https://golinkjobs.com/verify?code='.$code.'&d='.base64_encode($email).'&i='.$id.'"</p>
						    </div>
						</bod>
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
		$mail->addAddress(MY_MAIL, FNAME); //$inst_admin_email;
		$mail-> setFrom(EMAIL_USERNAME, $firstname.' Posted Resume to Portal');
		$mail-> Subject = $firstname." Posted Resume to Portal";
		$mail->isHTML(TRUE);
		// $mail->SMTPDebug = 2;
		$mail->Body = $message;
		if($mail->send()){
			// echo 'Verification email sent to '.$email;
			echo "Your resume has been uploaded"; 
		}else{
			echo "Mailer Error: " . $mail->ErrorInfo;
		}

	}
?>