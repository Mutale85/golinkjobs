<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require '../PHPMailer/src/Exception.php';
	require '../PHPMailer/src/PHPMailer.php';
	require '../PHPMailer/src/SMTP.php';
	include "db.php";
	require_once "../conf.php";
	if (isset($_POST['subscriber_name'])) {
		$subscriber_name =  filter_input(INPUT_POST, 'subscriber_name', FILTER_SANITIZE_SPECIAL_CHARS);
		$subscriber_email = filter_input(INPUT_POST, 'subscriber_email', FILTER_SANITIZE_EMAIL);
		
		$query = $connect->prepare("SELECT * FROM `subscribers` WHERE `subscriber_email` = ? ");
		$query->execute([$subscriber_email]);
		if ($query->rowCount() > 0) {
			echo $subscriber_email. " is already a registered";
			exit();
		}
		
		$sql = $connect->prepare("INSERT INTO `subscribers`(`subscriber_name`, `subscriber_email`) VALUES (?, ?)");
		$sql->execute([$subscriber_name, $subscriber_email]);
		
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
		            	<h3 align="center">Hello '.$subscriber_name.'</h3>
		            	<p>Thank you for signing up to job alerts.</p>
		            	<p>Did you know that you can add your resume to receive so that employers can contact you directly?</p>
		            	<h3><a href="http://localhost/golinkjobs.com/resume?check=true"> Add my Resume</a></h3>
		            	
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
		$mail->addAddress($subscriber_email, $subscriber_name); //$inst_admin_email;
		$mail-> setFrom(EMAIL_USERNAME, 'Jobs Alerts');
		$mail-> Subject = "Welcome to receiving Job Alerts";
		$mail->isHTML(TRUE);
		// $mail->SMTPDebug = 2;
		$mail->Body = $message;
		if($mail->send()){
			echo 'Thank you for your registration'; 
		}else{
			echo "Mailer Error: " . $mail->ErrorInfo;
		}

	}
?>