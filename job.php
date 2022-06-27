<base href="http://localhost/golinkjobs.com/">
<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
    	<style>
    		.job-details-logo {
    			width: 80px;
    			height: 80px;
    			border-radius: 50%;
    			border: 1px solid grey;
    		}
    	</style>
 	</head>
  	<body>
    	<?php include("incs/nav.php")?>
		<section>
			<div class="container-fluid mt-5 mb-5">
				<div class="container">
					<div class="row">
						<?php
							$jobID = $_COOKIE['jobIDCookie'];
							$query = $connect->prepare("SELECT * FROM posted_jobs WHERE id = ? ");
					        $query->execute(array($jobID));
					        $row = $query->fetch();
					        extract($row);
					        // 
					        // $check = $connect->prepare("SELECT * FROM job_views WHERE job_id = ? ");
					        // $check->execute([$jobID]);

					        // if ($check->rowCount() > 0) {
					        //     // update counter
					        //     $update = $connect->prepare("UPDATE job_views SET clicks = clicks + 1 WHERE job_id = ? ");
					        //     $update->execute([$jobID]);

					        // }else{
					        //     $clicks = 1;
					        //     $sql = $connect->prepare("INSERT INTO job_views (`company_id`, `job_id`, `clicks`) VALUES(?, ?, ?) ");
					        //     $sql->execute([$company_id, $jobID, $clicks]);

					        // }
					        // if(url_to_clickable_link($application_link) ){
					        // 	$link = url_to_clickable_link($application_link);
					        // }else{
					        // 	$link = '<a href="">Link</a>';
					        // }
				        ?>
				        <div class="row">
				            
				            <div class="col-md-12 mt-5 mb-4">
				                <div class="jobPost">
				                	<div class="summaryTop">
		                                <div class="d-flex align-items-center mb-5">
		                                    <div class="flex-shrink-0">
		                                        <div class="job-details-logo">
		                                            <?php echo getCompanyLogo($connect, $company_id);?>
		                                        </div>
		                                    </div>
		                                    <div class="flex-grow-1 ms-3 ms-sm-4">
		                                        <h4><?php echo $job_title ?></h4>
		                                        <span class="text-muted mt-4"> 
		                                            <?php echo strtoupper(getCompanyName($connect, $company_id)) ?>
		                                        </span>
		                                    </div>
		                                </div>
		                                <ul class="list-group">
		                                	<li class="list-group-item"><i class="bi bi-calendar"></i> <span class="badge rounded-pill bg-primary">Posted</span> <span class="float-end"><?php echo date("d F, Y", strtotime($date_posted));?> | <?php echo ucwords(time_ago_check($date_posted));?></span></li>
				                			<li class="list-group-item"><i class="bi bi-geo"></i> <span class="badge rounded-pill bg-primary">Location</span>  <span class="float-end"><?php echo $region ?></span></li>
				                			<li class="list-group-item"><i class="bi bi-briefcase"></i> <span class="badge rounded-pill bg-primary">Status</span> <span class="float-end"><?php echo $job_nature?> | <?php echo $job_type ?></span></li>
				                			<li class="list-group-item"><i class="bi bi-wallet"></i> <span class="badge rounded-pill bg-primary">Pay Est</span> <span class="float-end"><?php echo $salary_range ?></span></li>
				                			<li class="list-group-item"><i class="bi bi-calendar-check"></i> <span class="badge rounded-pill bg-primary">Closes</span>  <span class="float-end"><?php echo date("d F, Y", strtotime($application_deadline));?></span></li>
				                		</ul>
		                            </div>
				                	
				                    <div class="card-header">
				                        <a href="<?php echo $id?>" id="<?php echo $application_link?>" class="btn btn-outline-secondary application">Apply Now</a>
				                    </div>
				                    <div class="card-body">
				                        <div class="mb-4">
				                            <?php echo $job_description ?>
				                        </div>
				                    </div>
				                    <div class="card-footer">
				                        <a href="<?php echo $id?>" class="btn btn-outline-secondary application" id="<?php echo $application_link?>">Apply Now</a>
				                    </div>
				                </div>
				            </div>
				        </div>
					</div>
				</div>
			</div>
		</section>
		<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    			<div class="modal-content">
      				<div class="modal-header">
        				<h5 class="modal-title" id="staticBackdropLabel">Application Mode</h5>
        					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      				</div>
			      	<div class="modal-body">
			        	<div id="result"></div>
			      	</div>
      				<div class="modal-footer">
        				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        				<button type="button" class="btn btn-primary" disabled>Apply Via Go Link Jobs</button>
      				</div>
    			</div>
  			</div>
		</div>
		<?php include 'incs/footer.php';?>
		<script>
			$(function(){
				$(document).on("click", ".application", function(e){
					e.preventDefault();
					var link = $(this).attr("id");
					$("#staticBackdrop").modal("show");
					document.getElementById('result').innerHTML = link;
					// We count here on the views
					var JobId = $(this).attr("href");
					// alert(JobId);
					$.ajax({
						url:"includes/submitApplyClick",
						method:"post",
						data:{JobId:JobId},
						success:function(data){
							alert(data);
						}
					})

				})
			})
		</script>
  	</body>
</html>