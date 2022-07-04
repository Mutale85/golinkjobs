<base href="http://localhost/golinkjobs.com/">
<!DOCTYPE html>
<html>
<head>
	<?php
		include 'incs/header.php';
		if (!isset($_SESSION['user_email_job_portal'])){
			header("location:./");
		}
		$userEmail =  $_SESSION['user_email_job_portal'];
	?>
</head>
<body>
	<?php include 'incs/nav.php';?>
	<section>
		<div class="container-fluid mt-5">
			<div class="container mt-5">
				<div class="row">
					<div class="col-md-12 mt-5 mb-5 text-center">
						<h1>Welcome <?php echo $_SESSION['username']?></h1>
					</div>
					<div class="col-md-12 text-center mb-2" id="supportMenu">
		                <a class="btn btn-outline-secondary btn-sm mb-2" href="home" title="Home"><i class="bi bi-building"></i> Home</a>
		                <a class="btn btn-outline-secondary btn-sm mb-2" href="post-a-job" title="post-a-job"><i class="bi bi-house-door"></i> Post New Job</a>
		                <a class="btn btn-outline-secondary btn-sm mb-2" href="company-profile" title="company-profile"> <i class="bi bi-briefcase"></i> Company Profile</a>
		                <a class="btn btn-outline-secondary btn-sm mb-2" href="browse-candidates" title="browse"><i class="bi bi-search"></i> Browse Candidates</a>
		                <a class="btn btn-outline-secondary btn-sm mb-2" href="logout" title="logout"> <i class="bi bi-box-arrow-right"></i> Sign Out</a>
		            </div>
	                
	            	<?php 
	            		$id = base64_decode(basename($_SERVER['REQUEST_URI']));
	            		$query = $connect->prepare("SELECT * FROM `posted_cvs` WHERE `id` = ? ");
						$query->execute([$id]);
						$row = $query->fetch();
						if ($row) {
							extract($row);
					?>
							<div class="col-md-4">
								<div class="card">
									<div class="card-header">
										<h4 class="mb-4 text-center"> <?php echo $firstname?>'s Summary</h4>
									</div>
									<div class="card-body">
										<table class="table table-borderless">
											<tr>
												<th>Names</th>
												<td> <?php echo $firstname?> <?php echo $lastname?></td>
											</tr>
											<tr>
												<th>Education level</th>
												<td><?php echo $education_level?></td>
											</tr>
											<tr>
												<th>Field Studied</th>
												<td><?php echo $field_studied?></td>
											</tr>
											<tr>
												<th>Work Experience</th>
												<td><?php echo $work_experience?> Years</td>
											</tr>
											<tr>
												<th>Contact Email</th>
												<td><a href="mailto:<?php echo $email?>" class="badge bg-secondary"><?php echo $email?></a></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div class="col-md-8">
								<div class="card">
									<div class="card-header">
										<h4 class="mb-4 text-center"> <?php echo $firstname?>'s CV</h4>
									</div>
									<div class="card-body">
										<embed src="http://localhost/golinkjobs.com/cv_uploads/<?php echo $cv_file?>" type="application/pdf" width="100%" height="800px" />
									</div>
								</div>
							</div>
							
					<?php
						}

	            	?>

				</div>
			</div>
		</div>
	</section>
</body>
</html>
