<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
 	</head>
  	<body>
    	<?php include("incs/nav.php")?>
    	<section class="container-fluid ">
			<div class="container">
				<div class="row">
					<div class="col-md-12 mb-3 text-center">
						<h1 class="infoTitle">Access Remote Jobs</h1>
						<p class="fs-4 text-secondary">No Spamming - We delivery them direct to you</p>
						<p>We will never show you jobs that have expired</p>
					</div>
					<div class="col-md-12 mb-3">
						<div class="bgImage text-center">
							<form method="post" id="searchForm" class="searchForm">
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="keyword" id="keyword" class="form-control" placeholder="Job Title, Company Name, Keyword">
										<input type="text" name="location" id="location" class="form-control" placeholder="Where ?">
										<input type="submit" name="submit" id="submit" class="searchBtn" value="Search Jobs">
									</div>
								</div>		
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container-fluid mb-5">

				<div class="container">
					<div class="row">
						<?php
							$query = $connect->prepare("SELECT * FROM posted_jobs ");
							$query->execute();
							foreach($query->fetchAll() as $row){
								extract($row);
						?>
						<div class="col-md-12">
							<a href="job/<?php echo preg_replace("#[^a-zA-Z_&()0-9-]#", "-", strtolower($job_title)) ?>" class="jobData" id="<?php echo $id?>">
								<div class="postedJob mb-3 p-2">
									<div class="companyLogo">
										<div class="div1">
											<img src="uploads/<?php echo $company_logo ?>" alt="<?php echo $company_logo ?>" class="img-gluid coyLogo" width="60">
										</div>
										<div class="div2">
											<h4 class="jobTitle"><?php echo $job_title ?></h4>
											<p><?php echo strtoupper($company_name) ?></p>
											<p class="salary">Salary: <?php echo $salary_range ?></p>
										</div>
									</div>
									<div class="jobDesc">
										<p><?php echo $job_type ?>, Remote Job | <span class="text-info"><?php echo $region ?></span></p>
										<p class="">Dealine: <?php echo date("d F, Y", strtotime($application_deadline));?> </p>
									</div>
								</div>
							</a>
						</div>
						<?}?>
					</div>
				</div>
			</div>
		</section>
		<?php include 'incs/footer.php';?>
		<div class="modal" tabindex="-1" role="dialog" id="partnerModal">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-lg">
					<div class="modal-header">
						<h4 class="modal-title">Job Emails Straight to your inbox</h4>
						<button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post" id="partnersForm">
							<div class="form-group mb-3">
								<label class="mb-2">Your Name</label>
								<div class="input-group">
									<span class="input-group-text">
										<i class="bi bi-person"></i>
									</span>
									<input type="text" name="your_names" id="your_names" class="form-control" required placeholder="Your Names">
								</div>
							</div>
							<div class="form-group mb-3">
								<label class="mb-2">Your Email</label>
								<div class="input-group">
									<span class="input-group-text">
										@
									</span>
									<input type="email" name="email" id="email" class="form-control" required placeholder="Your Email">
								</div>
							</div>
							<button class="btn btn-outline-success">Send me Job Emails </button>
						</form>
					</div>
					<div class="modal-footer d-flex justify-content-between">
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
  	</body>
  	<script>
		$(document).ready(function(){
			$(document).on("click", "#partnerBtn", function(e){
				e.preventDefault();
				$("#partnerModal").modal("show");
			});

			$(document).on("click", ".jobData", function(e){
				e.preventDefault();
				var link = $(this).attr("href");
				var id = $(this).attr('id');
				setCookie('jobIDCookie', id, 30);
				window.location = link;
			})
		})

		// Set a Cookie
		function setCookie(cName, cValue, expDays) {
	        let date = new Date();
	        date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
	        const expires = "expires=" + date.toUTCString();
	        document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
		}
		
	</script>
</html>