<!DOCTYPE html>
<html>
<head>
	<?php
		include 'incs/header.php';
		if (!isset($_SESSION['user_email_job_portal'])){
			header("location:./");
		}
		$userEmail =  $_SESSION['user_email_job_portal'];
		$company_id = $_SESSION['user_id'];
		$username = $_SESSION['username'];
	?>
	<style>
		/* */
	</style>
</head>
<body>
	<?php include 'incs/nav.php';?>
	<div class="container-fluid mt-5">
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-12 mt-5 text-center">
					<h1>Welcome <?php echo $_SESSION['username']?></h1>
				</div>
				<div class="col-md-12 text-center mb-5" id="supportMenu">
	                <a class="btn btn-outline-secondary btn-sm mb-2" href="home" title="Home"><i class="bi bi-building"></i> Home</a>
	                
	                
	                <a class="btn btn-outline-secondary btn-sm mb-2" href="post-a-job" title="post-a-job"><i class="bi bi-house-door"></i> Post New Job</a>
	                
	                
	                <a class="btn btn-outline-secondary btn-sm mb-2" href="company-profile" title="company-profile"> <i class="bi bi-briefcase"></i> Company Profile</a>
	                
	                
	                <a class="btn btn-outline-secondary btn-sm mb-2" href="browse-candidates" title="browse"><i class="bi bi-search"></i> Browse Candidates</a>
	                
	                
	                <a class="btn btn-outline-secondary btn-sm mb-2" href="logout" title="logout"> <i class="bi bi-box-arrow-right"></i> Sign Out</a>
	            </div>
                
				<div class="col-md-12 mt-5">
					<div class="table table-responsive">
						<table class="table table-bordered" id="jobsTable">
							<thead>
								<tr>
									<th>Job Title</th>
									<th>Date Posted</th>
									<th>Deadline</th>
									<th>All Views</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$query = $connect->prepare("SELECT * FROM posted_jobs WHERE company_id = ? ");
							        $query->execute(array($company_id));
							        if ($query->rowCount() > 0) {
							            foreach($query->fetchAll() as $row){
							                extract($row);
							                if ($posted == 0) {
							                	$totalAmount = floor(3.99 * $estimated_period);
							                	$job_status = "<a href='post-a-job-final?postedJobID=".base64_encode($id)."&userMail=".base64_encode($userEmail)."&customer_name=".basename($username)."&totalAmount=".base64_encode($totalAmount)."' class='text-danger'><i class='bi bi-clipboard'></i> Pay USD ".$totalAmount;
							                }else{
							                	$job_status = '<span class="text-success"><i class="bi bi-clipboard-check"></i> Posted</span>';
							                }
								?>
									<tr>
										<td><a href="job/<?php echo preg_replace("#[^a-zA-Z_&()0-9-]#", "-", strtolower($job_title)) ?>" class="jobData" id="<?php echo $id?>"> <?php echo $job_title ?></a></td>
										<td><?php echo date("d F, Y", strtotime($date_posted)) ?></td>
										<td><?php echo date("d F, Y", strtotime($application_deadline));?></td>
										<td><?php echo countJobClick($connect, $company_id, $id)?></td>
										<td>
											<?php echo $job_status?>
										</td>
										<td>
											<div class="btn-group">
												<a href="editJob?jobID=<?php echo base64_encode($id)?>" class="editJob btn btn-primary"><i class="bi bi-pencil-square"></i></a>
												<a href="<?php echo base64_encode($id)?>" class="removeJob btn btn-danger"><i class="bi bi-trash"></i></a>
											</div>
										</td>
									</tr>
								<?php 
										}
									}

								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/main.js"></script>
	<script>
		$(function(){
			$("#jobsTable").DataTable();
		})
	</script>
</body>
</html>
