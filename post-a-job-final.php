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
	    					if (isset($_COOKIE['postedJobID']) && isset($_COOKIE['userMail']) && isset($_COOKIE['customer_name']) && isset($_COOKIE['totalAmount']) ) {
				    			$postedJobID = base64_decode($_COOKIE['postedJobID']);
				    			$userMail = base64_decode($_COOKIE['userMail']);
				    			$customer_name = base64_decode($_COOKIE['customer_name']);
				    			$totalAmount = base64_decode($_COOKIE['totalAmount']);
			    		?>
    				
    					<h2 class="mb-4 text-center">Complete Your Posting</h2>
    					<p>Your Job Posting has been submitted </p>
    					<p>Please Pay the Amount Below for admin to approve the listing</p>
    					<form method="POST">
							<input type="hidden" name="jobID" id="jobID" value="<?php echo $postedJobID?>" />
							<input type="hidden" name="customer_email" id="customer_email" value="<?php echo $userMail ?>" />
							<input type="hidden" name="customer_name" id="customer_name" value="<?php echo $customer_name ?>" />
							<input type="hidden" name="amount" id="amount" value="<?php echo $totalAmount?>" />
							<input type="hidden" name="currency" id="currency" value="USD" />
							<button type="button" id="start-payment-button" class="success_btn" onclick="makePayment()">Pay Now USD <?php echo $totalAmount?></button>
						</form>
						<script src="https://checkout.flutterwave.com/v3.js"></script>
				    	<script>

							function makePayment() {
								var totalMmount = document.getElementById('amount').value;
								var company_name = document.getElementById('customer_name').value;
								var email = document.getElementById('customer_email').value;
								var consumer_id = document.getElementById('jobID').value;
								
								FlutterwaveCheckout({
								  public_key: "FLWPUBK_TEST-e5fa271a124685e29bf24120770dcdbc-X",
								  tx_ref: "AccessRemoteJobs-"+email+consumer_id,
								  amount: totalMmount,
								  currency: "USD",
								  payment_options: "card, mobilemoneyzambia, ussd",
								  redirect_url: "http://localhost/accessremotejobs.com/payments?amount="+totalMmount+"&customer_email="+email+"&application_id="+consumer_id+"&customer_name="+company_name,
								  meta: {
								    consumer_id: consumer_id,
								    consumer_mac: "92a3-912ba-1192a",
								  },
								  customer: {
								    email: email,
								    // phone_number: "08102909304",
								    name: company_name,
								  },
								  customizations: {
								    title: "AccessRemoteJobs.com",
								    description: "Payment for Job Posting",
								    logo: "https://weblister.co/images/icon_new.png",
								  },
								});
							}
				    	</script>
						<?php }else{?>
    				</div>

    				<!-- GET STATEMENT -->
    				<div class="col-md-12 text-center">
	    				<?php
	    					if (isset($_GET['postedJobID']) && isset($_GET['userMail']) && isset($_GET['customer_name']) && isset($_GET['totalAmount']) ) {
				    			$postedJobID = base64_decode($_GET['postedJobID']);
				    			$userMail = base64_decode($_GET['userMail']);
				    			$customer_name = base64_decode($_GET['customer_name']);
				    			$totalAmount = base64_decode($_GET['totalAmount']);
			    		?>
    				
    					<h2 class="mb-4 text-center">Complete Your Posting</h2>
    					<p>Your Job Posting has been submitted </p>
    					<p>Please Pay the Amount Below for admin to approve the listing</p>
    					<form method="POST">
							<input type="hidden" name="jobID" id="jobID" value="<?php echo $postedJobID?>" />
							<input type="hidden" name="customer_email" id="customer_email" value="<?php echo $userMail ?>" />
							<input type="hidden" name="customer_name" id="customer_name" value="<?php echo $customer_name ?>" />
							<input type="hidden" name="amount" id="amount" value="<?php echo $totalAmount?>" />
							<input type="hidden" name="currency" id="currency" value="USD" />
							<button type="button" id="start-payment-button" class="success_btn" onclick="makePayment()">Pay Now USD <?php echo $totalAmount?></button>
						</form>
						<script src="https://checkout.flutterwave.com/v3.js"></script>
				    	<script>

							function makePayment() {
								var totalMmount = document.getElementById('amount').value;
								var company_name = document.getElementById('customer_name').value;
								var email = document.getElementById('customer_email').value;
								var consumer_id = document.getElementById('jobID').value;
								
								FlutterwaveCheckout({
								  public_key: "FLWPUBK_TEST-e5fa271a124685e29bf24120770dcdbc-X",
								  tx_ref: "AccessRemoteJobs-"+email+consumer_id,
								  amount: totalMmount,
								  currency: "USD",
								  payment_options: "card, mobilemoneyzambia, ussd",
								  redirect_url: "http://localhost/accessremotejobs.com/payments?amount="+totalMmount+"&customer_email="+email+"&application_id="+consumer_id+"&customer_name="+company_name,
								  meta: {
								    consumer_id: consumer_id,
								    consumer_mac: "92a3-912ba-1192a",
								  },
								  customer: {
								    email: email,
								    // phone_number: "08102909304",
								    name: company_name,
								  },
								  customizations: {
								    title: "AccessRemoteJobs.com",
								    description: "Payment for Job Posting",
								    logo: "https://weblister.co/images/icon_new.png",
								  },
								});
							}
				    	</script>
						<?php }
						
					}?>
    				</div>
    			</div>
    		</div>
    	</section>
    </body>
</html>