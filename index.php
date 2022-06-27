<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
 	</head>
  	<body>
    	<?php include("incs/nav.php")?>
    	<?php include("search_box.php")?>

		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-12"><h2 id="titleLabel" class="text-center text-secondary">Latest Jobs</h2></div>
					<div id="postedJobs" class="postedJobs"><div class="spinner-border "></div>Please Wait....</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<img src="images/Pic1.png" class="img-fluid mb-3" alt="leg">
						<!-- <button class="btn btn-outline-success">Click if you Send me Job Alerts</button> -->
					</div>
					<div class="col-md-12">
						<div class="postedJobs">
							<h3 class="mb-4 text-center">Get Jobs alerts straight in inbox</h3>
							<form method="post" id="subscribersForm">
								<div class="row">
									<div class="form-group col-md-4 mb-3">
										<div class="input-group">
											<span class="input-group-text">
												<i class="bi bi-person"></i>
											</span>
											<input type="text" name="subscriber_name" id="subscriber_name" class="form-control" required placeholder="Your Name">
										</div>
									</div>
									<div class="form-group col-md-4 mb-3">
										<div class="input-group">
											<span class="input-group-text">
												@
											</span>
											<input type="email" name="subscriber_email" id="subscriber_email" class="form-control" required placeholder="Your Email">
										</div>
									</div>
									<div class="form-group col-md-4 mb-3">
										<button class="btn btn-outline-primary w-100" type="submit" id="subscriberBtn">Send me Job Alerts </button>
										
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include 'incs/footer.php';?>
		
  	</body>
	<script type="text/javascript" src="js/main.js"></script>
</html>


