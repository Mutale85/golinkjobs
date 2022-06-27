
<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
 	</head>
  	<body>
    	<?php include("incs/nav.php")?>
		<section>
			<div class="container-fluid mt-5 mb-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12 mb-3 text-center">
							<h1 class="">Welcome to Go Link Jobs</h1>
							
							<div class="text-center mb-4 mt-3">
								<p class="fs-5">Let recruiters contact you. Upload your resume</p>
							</div>
						</div>
						<div class="forms">
							<h4 class="text-center mb-3">Your Resume Form</h4>
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
											<input type="file" name="cv_file" id="cv_file" class="form-control" accept="application/pdf">
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
								
									<div class="col-md-12 mb-3">
										<label>
											<input class="form-check-input" type="checkbox" name="terms" id="terms"> I agree to <a href="terms-and-conditions" title="terms"> Terms</a>
										</label>
									</div>
								</div>
								<button class="btn btn-outline-success mb-2" id="submitCV" type="submit">Submit Details</button>
								<br>
								<progress value="0" max="10" id="progressBarOne"></progress>
							</form>
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
			
			
			<!-- <script type="text/javascript" src="js/main.js"></script> -->
			
		</section>
		<?php include 'incs/footer.php';?>
		<?php 
				if($_GET['check']){
					$check = $_GET['check'];
			?>
					<script>
						
					</script>
			<?php	
				}
			?>
		<script>
		
			var cvForm = document.getElementById('cvForm');
			var terms = document.getElementById('terms');
			// $("#profileModal").modal("show");
			$(function(){
				 
				$("#cvForm").submit(function(e){
					e.preventDefault();
					var cvForm = document.getElementById('cvForm');
					var data = new FormData(cvForm);
					var url = 'includes/submitCV';
					if(document.getElementById("terms").checked  === true){
  
						$.ajax({
							url:url+'?<?php echo time()?>',
							method:"post",
							data:data,
							cache : false,
							processData: false,
							contentType: false,
							beforeSend:function(){
								$("#submitCV").html("<i class='spinner-border'></i> Processing...");
								timerDOne();
							},
							success:function(data){
								successNow(data);
								$("#submitCV").html("Submit Details")
								$("#cvForm")[0].reset();
								document.getElementById('progressBarOne').style.display = 'none';
							}
						})
					}else{
						alert("Please Agree to Terms");
					}
				})


		
			})
			document.getElementById('progressBarOne').style.display = 'none';
			function timerDOne(){
				document.getElementById('progressBarOne').style.display = 'block';
				var timeleft = 10;
				var downloadTimer = setInterval(function(){
				  if(timeleft <= 0){
				    clearInterval(downloadTimer);
				    // alert("Resend Code");
				    //show the resend button
				  }
				  document.getElementById("progressBarOne").value = 10 - timeleft;
				  timeleft -= 1;
				}, 1000);
			}
		</script>
  	</body>
</html>