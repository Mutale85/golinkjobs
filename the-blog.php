<base href="http://localhost/golinkjobs.com/">
<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
 	</head>
  	<body>
    	<?php include("incs/nav.php")?>
		<section>
			<div class="container-fluid mt-5 mb-5">
				<div class="container mt-5">
					<div class="row">
						<div class="col-md-12 mb-5">
							<h1 class="text-center"> We are building this page</h1>
                            <img src="images/undraw_under_construction.svg" alt="coming soon">
						</div>
						<div class="col-md-12 mt-3">
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
		</section>
		<script type="text/javascript" src="js/main.js"></script>
  	</body>
</html>