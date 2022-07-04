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
                <div class="col-md-12">
                	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#companyModal">Create Profile <i class="bi bi-plus-circle"></i></button>
                </div>
                <div class="col-md-12 mt-5 mb-5">
					<div id="companyDetails"></div>
					<div class="mt-3">
						<div id="companySocialIcons"></div>
					</div>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="companyModal" tabindex="-1" aria-labelledby="companyModalLabel" aria-hidden="true">
				  	<div class="modal-dialog modal-lg">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        		<h5 class="modal-title" id="companyModalLabel">Company Profile</h5>
				        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      		</div>
				      		<div class="modal-body">
				        		<form method="post" id="companyForm" enctype="multipart/form-data">
									<div class="card">
										<div class="card-header">
											<h4 class="text-secondary">Applicants would love to know more about you</h4>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="form-group col-md-12 mb-5">
													<label class="mb-2 label">Company Name <i class="bi bi-asterisk"></i></label>
													<input type="text" name="company_name" id="company_name" class="form-control" required>
													<input type="hidden" name="dataID" id="dataID" class="form-control" required>
												</div>
												<div class="form-group col-md-6 mb-5">
													<label class="mb-2 label">Company Email <i class="bi bi-asterisk"></i></label>
													<input type="email" name="email" id="email" class="form-control" required>
												</div>
												<div class="form-group col-md-6 mb-5">
													<label class="mb-2 label">Number of Employees <i class="bi bi-asterisk"></i></label>
													<select class="form-control" name="company_employees" id="company_employees">
														<option value="">How many current employees do you have?</option>
														<option value="1-5">1-5 Employees</option>
														<option value="6-10">6-10 Employees</option>
														<option value="11-20">11-20 Employees</option>
														<option value="21-50">21-50 Employees</option>
														<option value="51-100">51-100 Employees</option>
														<option value="101-250">101-250 Employees</option>
														<option value="251-500">251-500 Employees</option>
														<option value="501-1500">501-1500 Employees</option>
														<option value="1501 Plus">1501 Plus Employees</option>
													</select>
												</div>
												
												<div class="form-group col-md-6 mb-5">
													<label class="mb-2 label">Website </label>
													<input type="url" name="company_website" id="company_website" class="form-control">
												</div>
												<div class="form-group col-md-6 mb-5">
													<label class="mb-2 label">Company Location <i class="bi bi-asterisk"></i></label>
													<input type="text" name="company_location" id="company_location" class="form-control" required>
												</div>
												<div class="form-group col-md-12 mb-5">
													<label class="mb-2 label">Company Logo</i></label>
													<input type="file" name="company_logo" id="company_logo" class="form-control">
												</div>
												<div class="form-group col-md-12 mb-5">
													<label class="mb-2 label">About The Company <i class="bi bi-asterisk"></i></label>
													<textarea name="company_profile" id="company_profile" class="form-control" rows="6"></textarea>
												</div>
											</div>
										</div>
										<div class="card-footer"> 
											<button class="btn btn-secondary" type="submit" id="submitBtn">Save Changes</button>
										</div>
									</div>
								</form>
								<form method="post" id="socialLinks" class="mt-5" enctype="multipart/form-data">
									<div class="card">
										<div class="card-header">
											<h4 class="text-secondary">Social Media</h4>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="form-group col-md-6 mb-5">
													<label class="mb-2 label">Facebook <i class="bi bi-facebook"></i></label>
													<input type="text" name="facebook" id="facebook" class="form-control" >
													<input type="hidden" name="iconID" id="iconID" class="form-control" >
												</div>
												<div class="form-group col-md-6 mb-5">
													<label class="mb-2 label">Twitter <i class="bi bi-twitter"></i></label>
													<input type="text" name="twitter" id="twitter" class="form-control" >
												</div>
												<div class="form-group col-md-6 mb-5">
													<label class="mb-2 label">Linkedin <i class="bi bi-linkedin"></i></label>
													<input type="text" name="linkedin" id="linkedin" class="form-control">
												</div>
												<div class="form-group col-md-6 mb-5">
													<label class="mb-2 label">YouTube <i class="bi bi-youtube"></i></label>
													<input type="text" name="youtube" id="youtube" class="form-control" >
												</div>
											</div>
										</div>
										<div class="card-footer"> 
											<button class="btn btn-outline-secondary" type="submit" id="submitBtn">Save Changes</button>
										</div>
									</div>
								</form>
				      		</div>
				      		<div class="modal-footer">
				        		<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
				      		</div>
				    	</div>
				  	</div>
				</div>

				
			</div>
		</div>
	</div>
	<script>
		$(function(){
			$("#jobsTable").DataTable();
		})
		$(function(){
				
			$("#companyForm").submit(function(e){
				e.preventDefault();
				var companyForm = document.getElementById('companyForm');
				var data = new FormData(companyForm);
				var url = 'includes/submitcompanyProfile';
				$.ajax({
					url:url+'?<?php echo time()?>',
					method:"post",
					data:data,
					cache : false,
					processData: false,
					contentType: false,
					beforeSend:function(){
						$("#submitBtn").html("<i class='spinner-border'></i> Processing...");
					},
					success:function(data){
						successNow(data);
						$("#companyForm")[0].reset();
						getCompanyDetails();
						getCompanySocialMedia()
						$("#submitBtn").html('Save Changes');
					
					}
				})
			})

			$("#socialLinks").submit(function(e){
				e.preventDefault();
				var socialLinks = document.getElementById('socialLinks');
				var data = new FormData(socialLinks);
				var url = 'includes/submitSocialLinks';
				$.ajax({
					url:url+'?<?php echo time()?>',
					method:"post",
					data:data,
					cache : false,
					processData: false,
					contentType: false,
					beforeSend:function(){
						$("#submitBtn").html("<i class='spinner-border'></i> Processing...");
					},
					success:function(data){
						successNow(data);
						$("#socialLinks")[0].reset();
						getCompanyDetails();
						getCompanySocialMedia()
						$("#submitBtn").html('Save Changes');
					
					}
				})
			})

			$(document).on("click", ".editData", function(e){
				e.preventDefault();
				var data_id = $(this).attr("href");
				$.ajax({
					url:"includes/editData",
					method:"post",
					data:{data_id:data_id},
					dataType:"JSON",
					success:function(data){
						$("#companyModal").modal("show");
						$("#dataID").val(data.id);
						$("#company_name").val(data.company_name);
						$("#email").val(data.company_email);
						$("#company_employees").val(data.company_employees);
						$("#company_website").val(data.company_website);
						$("#company_location").val(data.company_location);
						$("#company_profile").val(data.company_profile);
					}
				})
			})

			$(document).on("click", ".editIcons", function(e){
				e.preventDefault();
				var icon_id = $(this).attr("href");
				$.ajax({
					url:"includes/editData",
					method:"post",
					data:{icon_id:icon_id},
					dataType:"JSON",
					success:function(data){
						$("#companyModal").modal("show");
						$("#iconID").val(data.id);
						$("#facebook").val(data.facebook);
						$("#twitter").val(data.twitter);
						$("#linkedin").val(data.linkedin);
						$("#youtube").val(data.youtube);
					}
				})
			})
		})

		function getCompanyDetails(){
			var company_id = "<?php echo $_SESSION['user_id']?>";
			$.ajax({
				url:"includes/fetchCompanyDetails",
				method:"post",
				data:{company_id:company_id},
				success:function(data){
					$("#companyDetails").html(data);
				}
			})
		}
		getCompanyDetails();

		function getCompanySocialMedia(){
			var company_id = "<?php echo $_SESSION['user_id']?>";
			$.ajax({
				url:"includes/fetchCompanySocialIcons",
				method:"post",
				data:{company_id:company_id},
				success:function(data){
					$("#companySocialIcons").html(data);
				}
			})
		}
		getCompanySocialMedia();


	</script>
</body>
</html>
