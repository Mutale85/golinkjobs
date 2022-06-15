<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	include "includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php");?>
    	<style>
    		.receipt {
			  margin: 2em auto;
			  width:50%;
			  background:aliceblue;
			  padding:1.5em;
			  font-family:sans-serif;
			}
			.receipt h1 {
			  text-align:center;
			  color:#d1d1d1;
			  font:uppercase;
			}
			.details {
			  border-top:3px solid tomato;
			  background:#fff;
			  padding: 1.5em;
			}
			.details p {
			  color: ;
			}
			h2, h3, h4, p {
			  text-align:center;
			}
			table {
			  width:100%;
			  margin:2em 0;
			}
			td {
			  padding:.5em;
			}
			.receipt_print {
			  margin-top:3em;
			}
			a:active, a:link {
			  text-decoration:none;
			}
			.print {
			  margin-top:2em;
			  border:1px solid #d1d1d1;
			  padding:1em 0.8em;
			  border-radius:4px;
			  color:#000;
			}
			.print:hover {
			  color:mediumseagreen;
			  border:2px solid #d1d1d1;
			}
			@media screen and (max-width:700px) {
			  .receipt {
			    margin: 2em auto;
			    width:100%;
			  }
			}
			@media print {

			  html, body {
			    height:100%; 
			    margin: 0 !important; 
			    padding: 0 !important;
			    overflow: hidden;
			  }

    	</style>
  	</head>
  	<body>
    	<?php include("incs/nav.php")?>
    	<section class="sectionOne">
    		<div class="container">
    			<div class="row">
    				
    				<div class="col-md-12 text-center">
    				<?php
    					if (isset($_GET['status']) && isset($_GET['amount']) && isset($_GET['customer_email']) && isset($_GET['application_id']) && isset($_GET['tx_ref'])) {
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
			    				$sql = $connect->prepare("UPDATE posted_jobs SET email = ?,currency = ?, amount = ?, ref_number = ?, status = ?, transaction_id = ?, posted = ? WHERE id = ? ");
			    				$ex = $sql->execute(array($userMail, $currency, $totalAmount, $tx_ref, $status, $transaction_id, $posted, $postedJobID));
			    				if ($ex) {
			    					// send email to admin that payment has been made and advert is going online
			    					
									require 'PHPMailer/src/Exception.php';
									require 'PHPMailer/src/PHPMailer.php';
									require 'PHPMailer/src/SMTP.php';
									$mymail = 'mutamuls@gmail.com';
									$firstname = "Mutale";
									$message = 'New Payment by '. $customer_name;

									$mail = new PHPMailer();
						    		$mail->Host = "smtp.zoho.com";
						    		$mail->isSMTP();
						    		$mail->SMTPAuth = true;
						    		$mail->Username = "mulenga@weblister.co";
						    		$mail->Password = "mutale@85";
						    		$mail->SMTPSecure = "ssl";//TLS
						    		$mail->Port = 465; //TLS port= 587
						    		$mail->addAddress($mymail, $firstname); //$inst_admin_email;
						    		$mail-> setFrom("mulenga@weblister.co", 'Payments');
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
						  	<h1>AccessRemoteJobs</h1>
						  	<div class="details">
							    <h3>Receipt From Access Remote Jobs</h3>
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
						    	<p> If you have any issues with the payment, contact accessremotejobs at mulenga@weblister.co</p>
							    <div class="receipt_print">
							      	<!-- <button class="print" onclick="window.print()">Print Receipt</button> -->
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