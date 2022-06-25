<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require '../PHPMailer/src/Exception.php';
	require '../PHPMailer/src/PHPMailer.php';
	require '../PHPMailer/src/SMTP.php';
	include "db.php";
	require_once "../conf.php";
	if (isset($_POST['email'])) {
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		$code = mt_rand(100000,999999);
		
		$query = $connect->prepare("SELECT * FROM `posted_cvs` WHERE `email` = ? ");
		$query->execute([$email]);
		if ($query->rowCount() > 0) {
			$update = $connect->prepare("UPDATE `posted_cvs` SET `code` = ? WHERE `email` = ? ");
			$update->execute([$code, $email]);
			$message = '
					<!doctype html>
			            <html lang="en-US">

			            <head>
			                <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
			                <title>Osabox - Registration</title>
			                <meta name="description" content="Reset Password Email Template.">
			                <style type="text/css">
			                    a:link, a:active {text-decoration: none !important;}
			                    a.mainBtn {
			                    	padding: 14px 20px;
    								border-radius: 23px;
    								background:gray;
    								font-size:18px;
    								color:#000;
    								border:2px solid #000;
			                    }
			                </style>
			            </head>
			            <body>
			            	<p>Please Verify your email to view your Curriculum Vitae </p>
			            	<h3><a href="http://localhost/golinkjobs.com/view-my-cv?code='.$code.'&d='.base64_encode($email).'" class="mainBtn"> View my Resume</a></h3>
			            	<p>You can also copy and paste this link to your browser: href="http://localhost/golinkjobs.com/view-my-cv?code='.$code.'&d='.base64_encode($email).'"</p>

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
			$mail->addAddress($email, 'CV Viewing'); //$inst_admin_email;
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
		}else{
			echo "Sorry, we couldn't find any information about you. Please upload your CV today!";
		}

	}
?>