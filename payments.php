<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
?>
<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php");?>
  	</head>
  	<body>
    	<?php include("incs/nav.php")?>
    	<section class="sectionOne">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12 text-center">
    				<?php
    					if (isset($_GET['status']) && isset($_GET['amount']) && isset($_GET['customer_email']) && isset($_GET['application_id']) && isset($_GET['tx_ref'])) {
    						include 'conf.php';
			    			$postedJobID = $_GET['application_id'];
			    			$userMail = $_GET['customer_email'];
			    			$totalAmount = $_GET['amount'];
			    			$status = $_GET['status'];
			    			$tx_ref = $_GET['tx_ref'];
			    			$transaction_id = $_GET['transaction_id'];
			    			$customer_name = $_GET['customer_name'];

			    			if ($status == 'successful') {
			    				// update the database on the payment
			    				$posted = 1;
			    				$currency = 'USD';
			    				$sql = $connect->prepare("UPDATE posted_jobs SET currency = ?, amount = ?, ref_number = ?, status = ?, transaction_id = ?, posted = ? WHERE id = ? AND company_id = ? ");
			    				$ex = $sql->execute([$currency, $totalAmount, $tx_ref, $status, $transaction_id, $posted, $postedJobID, $_SESSION['user_id']]);
			    				if ($ex) {
			    					// send email to admin that payment has been made and advert is going online
			    					
									require 'PHPMailer/src/Exception.php';
									require 'PHPMailer/src/PHPMailer.php';
									require 'PHPMailer/src/SMTP.php';
									
									$message = 'New Payment by '. $customer_name;

									$mail = new PHPMailer();
						    		$mail->Host = "smtp.zoho.com";
						    		$mail->isSMTP();
						    		$mail->SMTPAuth = true;
						    		$mail->Username = SELF_EMAIL;
						    		$mail->Password = SELF_PASS;
						    		$mail->SMTPSecure = "ssl";//TLS
						    		$mail->Port = 465; //TLS port= 587
						    		$mail->addAddress(MY_MAIL, FNAME); //$inst_admin_email;
						    		$mail-> setFrom(SELF_EMAIL, 'Payments');
						    		$mail-> Subject = "New Payment On Access Remote Jobs";
						    		$mail->isHTML(TRUE);
						    		// $mail->SMTPDebug = 2;
						    		$mail->Body = $message;
						    		if($mail->send()){
						    			// echo 'Your code has been redeemed and your account has created please check your email inbox or spam for a verification link sent to. '.$email; 
						    		}else{
						    			echo "Mailer Error: " . $mail->ErrorInfo;
						    		} 

			    				}
			    			
		    		?>
    					<div class="receipt">
						  	<h1>Go Link Jobs</h1>
						  	<div class="details">
							    <h3>Receipt From Go Link Jobs</h3>
							    <p>Your payment was successul and has been received by Acess Remote Jobs </p>
							    <h2>USD <?php echo $totalAmount?></h2>
							    <hr>
							    <h4>Payment Details</h4>
							    <table>
							      	<tr>
								        <td>Amount Paid</td>
								        <td>USD <?php echo $totalAmount ?></td>
							      	</tr>
								    <tr>
								        <td>Payment Method</td>
								        <td>Card</td>
								    </tr>
								    <tr>
								        <td>Applicable fees </td>
								        <td>USD 0.00</td>
								    </tr>
								    <tr>
								        <td>Reference Number</td>
								        <td> <?php echo $transaction_id ?></td>
								    </tr>
							    </table>
						    	<p><?php echo date("d F, Y")?></p>
						    	<hr>
						    	<p> If you have any issues with the payment, contact Go Link Jobs at mulenga@weblister.co</p>
							    <div class="receipt_print">
							      	<p>Copy of receipt has been maild to your email: <?php echo $userMail ?></p>
							    </div>
						  	</div>
						</div>
					<?php 
							}
						}
					?>
    				</div>
    			</div>
    		</div>
    	</section>
    	<script>
    		// $(document).on('click', function(e){
    		// 	e.preventDefault();
    		// 	window.print();
    		// })
		</script>
    </body>
</html>