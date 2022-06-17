<base href="http://localhost/accessremotejobs.com/">
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
							$query = $connect->prepare("SELECT * FROM posted_jobs WHERE id = ? ");
							$query->execute(array($_COOKIE['jobIDCookie']));
							$row = $query->fetch();
							extract($row);
						?>
						<div class="col-md-8 mb-4">
							<div class="card ">
								<div class="card-header card-info">
									<h2><?php echo $job_title ?></h2>
									<p><?php echo $job_type ?> | <span class="text-primary"><?php echo $job_nature?></span> | <span class="text-info"><?php echo $region ?></span></p>
									<p class="">Dealine: <?php echo date("d F, Y", strtotime($application_deadline));?> </p>
									<p class="text-bold">Posted By: <?php echo strtoupper($company_name) ?></p>
								</div>
								<div class="card-body">
									<div class="mb-4">
										<?php echo $job_description ?>
									</div>
								</div>
								<div class="card-footer">
									<a href="<?php echo $application_link?>" class="btn btn-outline-secondary">Apply Now</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
									<h4 class="jobTitle"><?php echo $job_title ?></h4>
								</div>
								<div class="card-body">
									
									<p><?php echo strtoupper($company_name) ?></p>
									<p class="salary">Salary: <?php echo $salary_range ?></p>
								</div>
								<div class="card-footer">
									<a href="<?php echo $application_link?>" class="btn btn-outline-secondary">Apply Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include 'incs/footer.php';?>		
  	</body>
</html>