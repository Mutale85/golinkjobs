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
					    <title>Go Link Jobs - View my Resume</title>
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
					      	<h3>Hello '.$subscriber_name.'</h3>
					    	<p>Thank you for signing up to job alerts.</p>
		            		<p>Did you know that you can add your resume to receive direct contacts from employers ?</p>
		            		<p><a href="https://golinkjobs.com/resume" class="mainBtn"> Add my Resume</a></p>
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