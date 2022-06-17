<base href="http://localhost/accessremotejobs.com/">
<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
 	</head>
  	<body>
    	<?php include("incs/nav.php")?>
    	<?php include("search_box.php")?>
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