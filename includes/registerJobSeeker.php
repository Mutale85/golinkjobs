<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require '../PHPMailer/src/Exception.php';
	require '../PHPMailer/src/PHPMailer.php';
	require '../PHPMailer/src/SMTP.php';
	include 'db.php';
	include '../conf.php';
	if (isset($_POST['username'])) {
		$username 	= filter_var($_POST['username'], FILTER_SANITIZE_STRING);
		$email 		= filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$password 	= filter_var($_POST['password'], FILTER_SANITIZE_STRING);
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "Invalid Email";
			exit();
		}

		$query = $connect->prepare("SELECT * FROM registerJobSeeker WHERE email = ? ");
		$query->execute(array($email));
		$count = $query->rowCount();
		if ($count > 0) {
			echo $email . " is already registered";
			exit();
		}
		$reserve = base64_encode($password);
		$password = password_hash($password, PASSWORD_DEFAULT);
	    
	    $QUERY = $connect->prepare("INSERT INTO `registerJobSeeker` (`username`, `email`, `password`, `reserve`) VALUES (?, ?, ?, ?) ");
	    $execute = $QUERY->execute([$username, $email, $password, $reserve]);
	    $parent_id = $connect->lastInsertId();
	    if($execute){ 
	        $update = $connect->prepare("UPDATE registerJobSeeker SET parent_id = ? WHERE email = ? ");
	        $update->execute(array($parent_id, $email));
			
			// Send an Email
			
	    	$message = '
	        <!doctype html>
	            <html lang="en-US">

	            <head>
	                <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	                <title>Job Portal - Registration</title>
	                <meta name="description" content="Reset Password Email Template.">
	                <style type="text/css">
	                    a:hover {text-decoration: underline !important;}
	                </style>
	            </head>

	            <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
	                <!--100% body table-->
	                <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
	                    style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: "Open Sans", sans-serif;">
	                    <tr>
	                        <td>
	                            <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
	                                align="center" cellpadding="0" cellspacing="0">
	                                <tr>
	                                    <td style="height:80px;">&nbsp;</td>
	                                </tr>
	                                <tr>
	                                    <td style="text-align:center;">
	                                      	<a href="https://golinkjobs.com" title="logo" target="_blank">
	                                        	<p align="center"><img src="https://golinkjobs.com/images/Gologo.png" class="imgLogo" width="100" alt="Gologo"></p>
	                                      	</a>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td style="height:20px;">&nbsp;</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
	                                            style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
	                                            <tr>
	                                                <td style="height:40px;">&nbsp;</td>
	                                            </tr>
	                                            <tr>
	                                                <td style="padding:0 35px;">
	                                                    <h1 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:"Rubik",sans-serif; text-align:left;">Welcome '.$username.'</h1>
	                                                    <span
	                                                        style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>


	                                                    <div style="color:#455056; font-size:15px;line-height:24px; margin:0;">
	                                                        <h2 class="title2">Thank you for signing up</h2>
	                                                        <p></p>
	                                                        <a href="https://golinkjobs.com/activation?userid='.$parent_id.'&email='.$email.'&pass='.$password.'" class="linkBtn"> Activate Account</a>
	                                                        <p> You can also copy and paste the link below into your browser.</p>
	                                                        <p>https://golinkjobs.com/activation?userid='.$parent_id.'&email='.$email.'&pass='.$password.'</p>
	                                                        <p></p>
	                                                    </div>

	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td style="height:40px;">&nbsp;</td>
	                                            </tr>
	                                        </table>
	                                    </td>
	                                <tr>
	                                    <td style="height:20px;">&nbsp;</td>
	                                </tr>
	                                <tr>
	                                    <td style="text-align:center;">
	                                        <h4>Find Talent Without Restrictions</h4>
	                                        
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td style="height:80px;">&nbsp;</td>
	                                </tr>
	                            </table>
	                        </td>
	                    </tr>
	                </table>
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
			$mail->addAddress($email, $username); //$inst_admin_email;
			$mail-> setFrom(EMAIL_USERNAME, 'Job Portal Registration');
			$mail-> Subject = "Account Registration Successful";
			$mail->isHTML(TRUE);
			// $mail->SMTPDebug = 2;
			$mail->Body = $message;
			if($mail->send()){
				echo 'Account created please check your email inbox or spam for a verification link sent to '.$email; 
			}else{
				echo "Mailer Error: " . $mail->ErrorInfo;
			}
		}  
    }
?>