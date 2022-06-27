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
			$row = $query->fetch();
			$firstname = $row['firstname'];
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
						      <h3>Hello '.$firstname.'</h3>
						    <p>You requested for a link to view your Resume </p>
						    <a href="https://golinkjobs.com/view-my-cv?code='.$code.'&d='.base64_encode($email).'" class="mainBtn"> View my Resume</a>
						    <p>You can also copy and paste this link to your browser:<br> href="https://golinkjobs.com/view-my-cv?code='.$code.'&d='.base64_encode($email).'"</p>
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