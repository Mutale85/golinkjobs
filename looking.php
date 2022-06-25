
<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
    	<style>
    	
    		.btn-outline-secondary {
    			padding: 14px 20px;
    			border-radius: 23px;
    		}
    	</style>
 	</head>
  	<body>
    	<?php include("incs/nav.php")?>
		<section>
			<div class="container-fluid mt-5 mb-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12 mb-5 text-center">
							<h1 class="">Welcome to Go Link Jobs</h1>
							
							
							<!-- 
								creates a 30 seconds video or uploads their CV
							-->
							<div class="text-center mb-4 mt-3">
								<p class="fs-5">Do you know that you can upload your Curriculum Vitae and let employers contact you directly?</p>
								<a href="view-my-cv" class="btn btn-outline-secondary bg-secondary text-white viewCV mb-2">View Uploaded CV</a>
								<a href="" class="btn btn-outline-secondary bg-secondary text-white callFormModal mb-2">Upload Your CV</a>
							</div>
							<h4 class="">Which area are you targeting? Discover Jobs !</h4>
						</div>
						<div class="col-md-12 forBig">
							<a class="btn btn-outline-secondary job_category m-2" href="Accounting And Finance">Accounting And Finance</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Administrative">Administrative</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Administrative Assistant">Administrative Assistant</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Agriculture and Natural Resources">Agriculture and Natural Resources</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Architecture and Construction">Architecture and Construction</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Automotive Industry">Automotive Industry</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Aviation Industry">Aviation Industry</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Business Development">Business Development</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Business Administration">Business Administration</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Communications">Communications</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Community and Social Services">Community and Social Services</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Consultancy">Consultancy</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Customer Service">Customer Service</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Education">Education</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Engineering">Engineering</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Fire and Safety">Fire and Safety</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Health Care Services">Health Care Services</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Human Resource">Human Resource</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Information Technology">Information Technology </a>
							<a class="btn btn-outline-secondary job_category m-2" href="Legal Services">Legal Services</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Marketing and Sales">Marketing and Sales</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Media and Arts">Media and Arts</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Physical Trainer">Physical Trainer</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Project Management">Project Management</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Product Management">Product Management</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Quality Assurance">Quality Assurance</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Supply and Procurement">Supply and Procurement</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Transport and Logistics">Transport and Logistics</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Writing and Editing">Writing and Editing</a>
							<a class="btn btn-outline-secondary job_category m-2" href="Other Field">Other Field</a>
						</div>
						<div class="col-md-12 forSmall">
							<select class="form-controls" name="job_category" id="job_category" required>
								<option value="">Select</option>
								<option value="Accounting And Finance">Accounting And Finance</option>
								<option value="Administrative">Administrative</option>
								<option value="Administrative Assistant">Administrative Assistant</option>
								<option value="Agriculture and Natural Resources">Agriculture and Natural Resources</option>
								<option value="Architecture and Construction">Architecture and Construction</option>
								<option value="Automotive Industry">Automotive Industry</option>
								<option value="Aviation Industry">Aviation Industry</option>
								<option value="Business Development">Business Development</option>
								<option value="Business Administration">Business Administration</option>
								<option value="Communications">Communications</option>
								<option value="Community and Social Services">Community and Social Services</option>
								<option value="Consultancy">Consultancy</option>
								<option value="Customer Service">Customer Service</option>
								<option value="Education">Education</option>
								<option value="Engineering">Engineering</option>
								<option value="Fire and Safety">Fire and Safety</option>
								<option value="Health Care Services">Health Care Services</option>
								<option value="Human Resource">Human Resource</option>
								<option value="Information Technology">Information Technology </option>
								<option value="Legal Services">Legal Services</option>
								<option value="Marketing and Sales">Marketing and Sales</option>
								<option value="Media and Arts">Media and Arts</option>
								<option value="Physical Trainer">Physical Trainer</option>
								<option value="Project Management">Project Management</option>
								<option value="Product Management">Product Management</option>
								<option value="Quality Assurance">Quality Assurance</option>
								<option value="Supply and Procurement">Supply and Procurement</option>
								<option value="Transport and Logistics">Transport and Logistics</option>
								<option value="Writing and Editing">Writing and Editing</option>
								<option value="Other Fields">Other Fields</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid mb-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12 mt-3">
							<div class="d-flex justify-content-between mb-5" id="imgBig">
								<img src="images/undraw_work_time_re_hdyv.svg" class="img-fluid">
								<img src="images/undraw_predictive_analytics_re_wxt8.svg" class="img-fluid">
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- Modal -->
			<div class="modal left fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  	<div class="modal-dialog">
			    	<div class="modal-content modal-dialog-scrollable">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      		</div>
			      		<div class="modal-body">
			        		<div id="fetchJobsByCategory"></div>
			      		</div>
			      		<div class="modal-footer">
			      		</div>
			    	</div>
			  	</div>
			</div>
			<div class="modal right fade" tabindex="-1" role="dialog" id="profileModal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Your Profile</h4>
							<button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form method="post" id="cvForm" enctype="multipart/form-data">
								<div class="row">
									<div class="form-group col-md-6 mb-3">
										<label class="mb-2">First name</label>
										<div class="input-group">
											<span class="input-group-text">
												<i class="bi bi-person"></i>
											</span>
											<input type="text" name="firstname" id="firstname" class="form-control" required placeholder="Firstname ">
										</div>
									</div>
									<div class="form-group col-md-6 mb-3">
										<label class="mb-2">Last name</label>
										<div class="input-group">
											<span class="input-group-text">
												<i class="bi bi-person"></i>
											</span>
											<input type="text" name="lastname" id="lastname" class="form-control" required placeholder="Lastname">
										</div>
									</div>
									<div class="form-group col-md-6 mb-3">
										<label class="mb-2">Expertise Category</label>
										<div class="input-group">
											<span class="input-group-text">
												<i class="bi bi-info-circle"></i>											
											</span>
											<select class="form-control" name="job_category" id="job_category" required>
												<option value="">Select</option>
												<option value="Accounting And Finance">Accounting And Finance</option>
												<option value="Administrative">Administrative</option>
												<option value="Administrative Assistant">Administrative Assistant</option>
												<option value="Agriculture and Natural Resources">Agriculture and Natural Resources</option>
												<option value="Architecture and Construction">Architecture and Construction</option>
												<option value="Automotive Industry">Automotive Industry</option>
												<option value="Aviation Industry">Aviation Industry</option>
												<option value="Business Development">Business Development</option>
												<option value="Business Administration">Business Administration</option>
												<option value="Communications">Communications</option>
												<option value="Community and Social Services">Community and Social Services</option>
												<option value="Consultancy">Consultancy</option>
												<option value="Customer Service">Customer Service</option>
												<option value="Education">Education</option>
												<option value="Engineering">Engineering</option>
												<option value="Fire and Safety">Fire and Safety</option>
												<option value="Health Care Services">Health Care Services</option>
												<option value="Human Resource">Human Resource</option>
												<option value="Information Technology">Information Technology </option>
												<option value="Legal Services">Legal Services</option>
												<option value="Marketing and Sales">Marketing and Sales</option>
												<option value="Media and Arts">Media and Arts</option>
												<option value="Physical Trainer">Physical Trainer</option>
												<option value="Project Management">Project Management</option>
												<option value="Product Management">Product Management</option>
												<option value="Quality Assurance">Quality Assurance</option>
												<option value="Supply and Procurement">Supply and Procurement</option>
												<option value="Transport and Logistics">Transport and Logistics</option>
												<option value="Writing and Editing">Writing and Editing</option>
												<option value="Other Fields">Other Fields</option>
											</select>
										</div>
										<!-- <em>You can always change this</em> -->
									</div>
									
									<div class="form-group col-md-6 mb-3">
										<label class="mb-2">Education Level</label>
										<div class="input-group">
											<span class="input-group-text">
												<i class="bi bi-info-circle"></i>											
											</span>
											<select class="form-control" name="education_level" id="education_level" required>
												<option value="">Select Education Level</option>
												<option value="High School">High School</option>
												<option value="College Certificate">College Certificate</option>
												<option value="Diploma">Diploma</option>
												<option value="Degree">Degree</option>
												<option value="Masters">Masters</option>
												<option value="PhD">PhD</option>
												<option value="Currently In School">Currently In School</option>
												<option value="Other Levels">Other Levels</option>
												<option value="Business Administration">Business Administration</option>
											</select>
										</div>
									</div>
									<div class="form-group col-md-6 mb-3">
										<label class="mb-2">Field of Study</label>
										<div class="input-group">
											<span class="input-group-text">
												<i class="bi bi-circle"></i>
											</span>
											<input type="text" name="field_studied" id="field_studied" class="form-control">
										</div>
									</div>
									<div class="form-group col-md-6 mb-3">
										<label class="mb-2">Work Experience</label>
										<div class="input-group">
											<span class="input-group-text">
												<i class="bi bi-info-circle"></i>											
											</span>
											<select class="form-control" name="work_experience" id="work_experience" required>
												<option value="">How many Years have you Worked?</option>
												<option value="0-1"> 0-1 Year</option>
												<option value="1-3">1-3 Years</option>
												<option value="3-7">3-7 Years</option>
												<option value="7-12">7-12 Years</option>
												<option value="12-18">12-18 Years</option>
												<option value="18-25">18-25 Years</option>
												<option value="25 Plus">25 Plus Years</option>
											</select>
										</div>
									</div>
									<div class="form-group col-md-6 mb-3">
										<label class="mb-2">Your CV - PDF Format</label>
										<div class="input-group">
											<input type="file" name="cv_file" id="cv_file" class="form-control" accept="*/pdf">
										</div>
									</div>
									<div class="form-group col-md-6 mb-3">
										<label class="mb-2">Your Email</label>
										<div class="input-group">
											<span class="input-group-text">
												@
											</span>
											<input type="email" name="email" id="email" class="form-control" required placeholder="Your Email">
										</div>
										<em>We will send a verification code to the email before saving your CV</em>
									</div>
								</div>
								<button class="btn btn-outline-success" id="submitCV" type="submit">Submit Details</button>
							</form>
							

							
							<form method="post" id="confirmationForms">
								<div class="form-group mb-3">
									<label class="mb-2">Enter Email</label>
									<div class="input-group">
										<span class="input-group-text">
											<i class="bi bi-upc-scan"></i>
										</span>
										<input type="text" name="email" id="email" class="form-control" required placeholder="Enter Email">
									</div>
								</div>
								<div class="d-flex justify-content-between">
									<button class="btn btn-primary" id="submitEmail" type="submit">Verify Email</button>
								</div>
							</form>
							

							<progress value="0" max="10" id="progressBar"></progress>
						</div>
						<div class="modal-footer d-flex justify-content-between">
							<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript" src="js/main.js"></script>
		</section>
		<?php include 'incs/footer.php';?>
		<script>
			var exampleModalLabel = document.getElementById('exampleModalLabel');
			var confirmationForms = document.getElementById('confirmationForms');
			var cvForm = document.getElementById('cvForm');
			$(function(){
				$(".job_category").click(function(e){
					e.preventDefault();
					$("#myModal").modal("show");
					var fetchJobsByCategory = $(this).attr("href");
					exampleModalLabel.innerText =  `${fetchJobsByCategory} Jobs`;
					$.ajax({
						url:"includes/fetchJobsByCategory",
						method:"POST",
						data:{fetchJobsByCategory:fetchJobsByCategory},
						beforeload:function(){

						},
						success:function(data){
							$("#fetchJobsByCategory").html(data);
						}
					})
				})

				$("#job_category").change(function(){
					
					var fetchJobsByCategory = $(this).val();
					if (fetchJobsByCategory !== "") {
						exampleModalLabel.innerText =  `${fetchJobsByCategory} Jobs`;
						$.ajax({
							url:"includes/fetchJobsByCategory",
							method:"POST",
							data:{fetchJobsByCategory:fetchJobsByCategory},
							beforeload:function(){

							},
							success:function(data){
								$("#myModal").modal("show");
								$("#fetchJobsByCategory").html(data);
							}
						})
					}else{
						exampleModalLabel.innerText = "Job Category";
					}

				});

				$(".callFormModal").click(function(e){
					e.preventDefault();
					$("#profileModal").modal("show");
					cvForm.style.display = 'block';
					confirmationForms.style.display = 'none';
				})
				$(".viewCV").click(function(e){
					e.preventDefault();
					$("#profileModal").modal("show");
					cvForm.style.display = 'none';
					confirmationForms.style.display = 'block';
				})
				

				

				$("#cvForm").submit(function(e){
					e.preventDefault();
					var cvForm = document.getElementById('cvForm');
					var data = new FormData(cvForm);
					var url = 'includes/submitCV';
					$.ajax({
						url:url+'?<?php echo time()?>',
						method:"post",
						data:data,
						cache : false,
						processData: false,
						contentType: false,
						beforeSend:function(){
							$("#submitCV").html("<i class='spinner-border'></i> Processing...");
							timerD();
						},
						success:function(data){
							successNow(data);
							$("#submitCV").html("Submit Details")
							$("#cvForm")[0].reset();
							document.getElementById('progressBar').style.display = 'none';
							// timerD();
						}
					})
				})


				$("#confirmationForms").submit(function(e){
					e.preventDefault();
					var confirmationForms = document.getElementById('confirmationForms');
					var data = new FormData(confirmationForms);
					var url = 'includes/submitEmailForCv';
					$.ajax({
						url:url+'?<?php echo time()?>',
						method:"post",
						data:data,
						cache : false,
						processData: false,
						contentType: false,
						beforeSend:function(){
							$("#submitEmail").html("<i class='spinner-border'></i> Processing...");
							timerD();
						},
						success:function(data){
							successNow(data);
							$("#submitEmail").html("Submit Details")
							$("#confirmationForms")[0].reset();
							document.getElementById('progressBar').style.display = 'none';
						}
					})
				})

		
			})

			function timerD(){
				document.getElementById('progressBar').style.display = 'block';
				// document.getElementById('confirmationForm').style.display = 'block';
				var timeleft = 10;
				var downloadTimer = setInterval(function(){
				  if(timeleft <= 0){
				    clearInterval(downloadTimer);
				    // alert("Resend Code");
				    //show the resend button
				  }
				  document.getElementById("progressBar").value = 10 - timeleft;
				  timeleft -= 1;
				}, 1000);
			}
		</script>
  	</body>
</html>