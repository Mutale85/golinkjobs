<base href="https://golinkjobs.com/">
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
					<div class="forms">
						<div class="row">
							<?php 
								
								$query = $connect->prepare("SELECT * FROM `posted_cvs` WHERE `email` = ? ");
								$query->execute([ $_SESSION['user_email_job_portal']]);
								if ($query->rowCount() > 0) {	
									$row = $query->fetch();
									if ($row) {
										extract($row);
											
							?>
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h4 class="text-center"><?php echo $firstname?>'s Resume</h4>
										</div>
										<div class="card-body">
											<ul class="list-group">
												<li class="list-group-item">First Name: <span id="firstname_span" class="float-end"><?php echo $firstname ?></span></li>
												<li class="list-group-item">Last Name: <span id="lastname_span" class="float-end"><?php echo $lastname ?></span></li>
												<li class="list-group-item">Expertise: <span id="job_category_span" class="float-end"><?php echo $job_category ?></span></li>
												<li class="list-group-item">Education: <span id="education_level_span" class="float-end"><?php echo $education_level ?></span></li>
												<li class="list-group-item">Field Studied: <span id="field_studied_span" class="float-end"><?php echo $field_studied ?></span></li>
												<li class="list-group-item">Experience: <span id="work_experience_span" class="float-end"><?php echo $work_experience ?> Years</span></li>
											</ul>
										</div>
										<div>
											<embed src="http://localhost/golinkjobs.com/cv_uploads/<?php echo $cv_file?>" type="application/pdf" width="100%" height="800px" />
										</div>
										<div class="card-footer">
											<a href="edit-resume?resume=<?php echo $code?>"><i class="bi bi-pencil-square"></i> Edit Resume</a>
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
			</div>
		</section>
		<?php include 'incs/footer.php';?>
  	</body>
</html>