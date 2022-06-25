<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require '../PHPMailer/src/Exception.php';
	require '../PHPMailer/src/PHPMailer.php';
	require '../PHPMailer/src/SMTP.php';
	include "db.php";
	require_once "../conf.php";
	if (isset($_POST['firstname'])) {
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
		                <title>Osabox - Registration</title>
		                <meta name="description" content="Reset Password Email Template.">
		                <style type="text/css">
		                    a:active, a:link {text-decoration: none !important;}
		                    img.imgLogo {
		                    	margin:1em auto;
		                    }
		                    h3 {
		                    	margin:1em auto;
		                    }
		                </style>
		            </head>
		            <body>
		            	<p align="center"><img src="http://localhost/golinkjobs.com/images/Gologo.png" class="imgLogo" width="100" alt="Gologo"></p>
		            	<h3 align="center">Hello '.$firstname.'</h3>
		            	<p>Thank you for adding your CV. Please verify your email </p>
		            	<h3><a href="http://localhost/golinkjobs.com/verify?code='.$code.'&d='.base64_encode($email).'&i='.$id.'"> Verify Email</a></h3>
		            	<p>You can also copy and paste this link to your browser: href="http://localhost/golinkjobs.com/verify?code='.$code.'&d='.base64_encode($email).'&i='.$id.'"</p>

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
		$mail->addAddress($email, $firstname); //$inst_admin_email;
		$mail-> setFrom(EMAIL_USERNAME, 'CV Posting');
		$mail-> Subject = "CV Posting Code";
		$mail->isHTML(TRUE);
		// $mail->SMTPDebug = 2;
		$mail->Body = $message;
		if($mail->send()){
			echo 'Verification email sent to '.$email; 
		}else{
			echo "Mailer Error: " . $mail->ErrorInfo;
		}

	}
?>