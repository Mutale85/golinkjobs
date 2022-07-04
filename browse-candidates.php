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

</head>
<body>
	<?php include 'incs/nav.php';?>
	<section>
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-12 mt-2 mb-3 text-center" id="supportMenu">
						<h1>Welcome <?php echo $_SESSION['username']?></h1>
					</div>
					<div class="col-md-12 text-center mb-5" id="supportMenu">
		                <a class="btn btn-outline-secondary btn-sm mb-2" href="home" title="Home"><i class="bi bi-building"></i> Home</a>
		                
		                
		                <a class="btn btn-outline-secondary btn-sm mb-2" href="post-a-job" title="post-a-job"><i class="bi bi-house-door"></i> Post New Job</a>
		                
		                
		                <a class="btn btn-outline-secondary btn-sm mb-2" href="company-profile" title="company-profile"> <i class="bi bi-briefcase"></i> Company Profile</a>
		                
		                
		                <a class="btn btn-outline-secondary btn-sm mb-2" href="browse-candidates" title="browse"><i class="bi bi-search"></i> Browse Candidates</a>
		                
		                
		                <a class="btn btn-outline-secondary btn-sm mb-2" href="logout" title="logout"> <i class="bi bi-box-arrow-right"></i> Sign Out</a>
		            </div>
		            <div class="col-md-12 forBig">
		            	<h3 class="mb-3 text-center text-secondary">Browse candidates in the following categories</h3>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Accounting And Finance">Accounting And Finance</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Administrative">Administrative</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Administrative Assistant">Administrative Assistant</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Agriculture and Natural Resources">Agriculture and Natural Resources</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Architecture and Construction">Architecture and Construction</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Automotive Industry">Automotive Industry</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Aviation Industry">Aviation Industry</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Business Development">Business Development</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Business Administration">Business Administration</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Communications">Communications</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Community and Social Services">Community and Social Services</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Consultancy">Consultancy</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Customer Service">Customer Service</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Education">Education</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Engineering">Engineering</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Fire and Safety">Fire and Safety</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Health Care Services">Health Care Services</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Human Resource">Human Resource</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Information Technology">Information Technology </a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Legal Services">Legal Services</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Marketing and Sales">Marketing and Sales</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Media and Arts">Media and Arts</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Physical Trainer">Physical Trainer</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Project Management">Project Management</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Product Management">Product Management</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Quality Assurance">Quality Assurance</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Supply and Procurement">Supply and Procurement</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Transport and Logistics">Transport and Logistics</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Writing and Editing">Writing and Editing</a>
						<a class="btn btn-outline-primary btn-sm shadow job_btn m-2" href="Other Field">Other Field</a>
					</div>
					<div class="col-md-12 forSmall">
						<select class="form-controls" name="job_category" id="job_btn" required>
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
	                <div class="col-md-12 mt-5">
	                	<h4 class="text-secondary text-center mb-3">Your search results here</h4>
	                	<div class="card">
	                		<div class="card-header">
	                			<h4 id="titleLabel" class="text-center"></h4>
	                		</div>
	                		<div class="card-body">
	                			<div class="table table-responsive">
					                <table class="table table-striped" id="candidatesTable">
					                    <thead>
					                        <tr>
					                            <th>Names</th>
					                            <th>Edu Level</th>
					                            <th>Field Studied</th>
					                            <th>Experience</th>
					                            <th>View Resume</th>
					                        </tr>
					                    </thead>
					                    <tbody id="fetchCvByCategory">
					                    </tbody>
					                </table>
					            </div>
	                			
	                		</div>
	                	</div>
	                </div>
				</div>
			</div>
		</div>
	</section>
	<script>
		var titleLabel = document.getElementById('titleLabel');
		$(function(){
			$(".job_btn").click(function(e){
				e.preventDefault();
				
				var fetchCvByCategory = $(this).attr("href");
				titleLabel.innerText =  `${fetchCvByCategory} Candidates`;
				$.ajax({
					url:"includes/fetchCvByCategory",
					method:"POST",
					data:{fetchCvByCategory:fetchCvByCategory},
					beforeload:function(){

					},
					success:function(data){
						$("#fetchCvByCategory").html(data);
					}
				})
			})

			$("#job_btn").change(function(){
				
				var fetchCvByCategory = $(this).val();
				if (fetchCvByCategory !== "") {
					titleLabel.innerText =  `${fetchCvByCategory} Candidates`;
					$.ajax({
						url:"includes/fetchCvByCategory",
						method:"POST",
						data:{fetchCvByCategory:fetchCvByCategory},
						beforeload:function(){

						},
						success:function(data){
							$("#myModal").modal("show");
							$("#fetchCvByCategory").html(data);
						}
					})
				}else{
					titleLabel.innerText = "Job Category";
				}

			});
			$("#candidatesTable").DataTable();
		})
		
	</script>
</body>
</html>
