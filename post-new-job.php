<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
    	<link href="summernote/summernote-lite.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    	<script src="summernote/summernote-lite.min.js"></script>
		<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
		<style>
			.forms{
				background-color: #e5e5f7;
				opacity: 1;
				background-image: radial-gradient(#444cf7 0.5px, #e5e5f7 0.5px);
				background-size: 10px 10px;
			}
		</style>
  	</head>
  	<body>
    	<?php include("incs/nav.php")?>
    	<section class="sectionOne">
    		<div class="container mt-5">
    			<div class="row">
    				
    				<div class="col-md-12 classs">
    					<div class="forms">
	    					<h1 class="mb-5 text-center">Post A Job For Free</h1>
	    					<h4 class="text-center">10 Jobs Post is Free there after its $3.99 / Day</h4>
	    					<hr>
	    					<form method="post" id="postJobForm" enctype="multipart/form-data">
	    						<div class="row">
		    						<div class="form-group col-md-12 mb-5">
			    							<label class="mb-2 label">Job Title <i class="bi bi-asterisk"></i></label>
			    							<input type="text" name="job_title" id="job_title" class="form-control" required>
			    						</div>
			    						<div class="form-group col-md-6 mb-5">
			    							<label class="mb-2 label">Job Category <i class="bi bi-asterisk"></i></label>
			    							<select class="form-control" name="job_category" id="job_catgory" required>
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
			    								<option value="Other Field">Other Fields</option>
			    							</select>
			    						</div>
			    						<div class="form-group col-md-6 mb-5">
			    							<label class="mb-2 label">Application Link or Email <i class="bi bi-asterisk"></i></label>
			    							<input type="text" name="application_link" id="application_link" class="form-control" required>
			    						</div>
			    						<div class="form-group col-md-6 mb-5">
			    							<label class="mb-2 label">Is Job Remote ? <i class="bi bi-asterisk"></i></label>
			    							<br>
			    							<label>
												<input class="form-check-input" type="radio" name="job_nature" id="job_nature" required value="Remote"> Yes
											</label>
											<label>
												<input class="form-check-input" type="radio" name="job_nature" id="job_nature" required value="On-Site"> On-Site
											</label>
			    						</div>
			    						<div class="form-group col-md-6 mb-5">
			    							<label class="mb-2 label">Is this role open world wide ? <i class="bi bi-asterisk"></i></label>
			    							<br>
			    							<label>
												<input class="form-check-input" type="radio" name="role_open_mode" id="role_open_mode" required value="1"> Yes
											</label>
											
											<label>
												<input class="form-check-input" type="radio" name="role_open_mode" id="role_open_mode" required value="2"> No
											</label>
			    						</div>
			    						<div class="form-group col-md-6 mb-3" id="region_open">
			    							<label class="mb-2 label">Select Region </label>
			    							<br>
			    							<label>
												<input class="form-check-input" type="checkbox" name="region[]" id="region" value="Africa"> Africa
											</label>
											<br>
											<label>
												<input class="form-check-input" type="checkbox" name="region[]" id="region" value="Asia"> Asia
											</label>
											<br>
											
											<label>
												<input class="form-check-input" type="checkbox" name="region[]" id="region" value="Australia"> Australia
											</label>
											<br>
											<label>
												<input class="form-check-input" type="checkbox" name="region[]" id="region" value="Europe"> Europe
											</label>
											<br>
											<label>
												<input class="form-check-input" type="checkbox" name="region[]" id="region" value="North America"> North America
											</label>
											<br>
											<label>
												<input class="form-check-input" type="checkbox" name="region[]" id="region" value="South America"> South America
											</label>
											<br>
											<br>
											<label class="mb-2"><b>Or Specify Region</b></label>
											<input class="form-control" type="text" name="region[]" id="region" placeholder="e.g USA Only">
			    						</div>
			    						
			    						<div class="form-group col-md-12 mb-5">
			    							<label class="mb-2 label">Job Description <i class="bi bi-asterisk"></i></label>
			    							<textarea class="form-control" name="job_description" id="job_description"></textarea>
			    						</div>
			    						<div class="form-group col-md-12 mb-5">
			    							<label class="mb-2 label">Job Type ? <i class="bi bi-asterisk"></i></label>
			    							<br>
			    							<label>
												<input class="form-check-input" type="radio" name="job_type" id="job_type" required value="Full Time"> Full Time
											</label><br>
											<label>
												<input class="form-check-input" type="radio" name="job_type" id="job_type" required value="Part Time"> Part Time
											</label><br>
											<label>
												<input class="form-check-input" type="radio" name="job_type" id="job_type" required value="Contract"> Contract
											</label><br>
											<label>
												<input class="form-check-input" type="radio" name="job_type" id="job_type" required value="Internship"> Internship
											</label>
			    						</div>
			    						
			    						<div class="form-group col-md-6 mb-5">
			    							<label class="mb-2 label">Salary Range</label>
			    							<input type="text" name="salary_range" id="salary_range" class="form-control" placeholder="Between $50K - $60K">
			    						</div>
			    						<div class="form-group col-md-6 mb-5">
			    							<label class="mb-2 label">Application Deadline</label>
			    							<input type="hidden" name="start_date" id="start_date" value="<?php echo date("Y-m-d")?>">
			    							<input type="text" name="application_deadline" id="datepicker" class="form-control" required>
			    							<input type="hidden" name="estimated_period" id="estimated_period">
			    						</div>
		    							<div class="col-md-12 mt-3 border-bottom mb-5"></div>
		    							<h3 class="mt-4 mb-5 text-secondary">Applicants would love to know more about you</h3>
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
											<label class="mb-2 label">About The Company </label>
											<textarea name="company_profile" id="company_profile" class="form-control" rows="6" placeholder="What do you do?"></textarea>
										</div>
									</div>
		    						
		    						<!-- <div class="col-md-12">
		    							<button class="btn btn-outline-secondary" id="submitBtn">Submit Job For <span id="amount_calc">$3.99 / Day</span> </button>
		    						</div> -->
		    						<div class="col-md-12 mb-3">
		    							<label>
											<input class="form-check-input" type="checkbox" name="terms" id="terms" required > I agree to  <a href="terms-and-conditions" title="terms" target="_blank">Terms</a>
										</label>
		    						</div>
		    						<div class="col-md-12">
		    							<button class="btn btn-outline-secondary btn-lg" id="submitBtn">Submit Job For Free</span> </button>
		    						</div>
		    					</div>
	    					</form>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</section>
    	<?php include 'incs/footer.php';?>
    	<script>
    		var region_open = document.getElementById('region_open');
    		region_open.style.display = 'none';
    		$(document).on('click', '#role_open_mode', function() {      
			    $('#role_open_mode').not(this).prop('checked', false); 
			    var data = $(this).val();
			    if(data === '2') {
			    	region_open.style.display = 'block';
			    }else{
			    	region_open.style.display = 'none';
			    }    
			});

			$('#job_description').summernote({
		        placeholder: 'Tips: <br><br>Give a summary of the job, what success in the position looks like, and how this part fits into the association overall. <br><br> Roles and Responsibilities - ( Be specific when describing each of the Roles. ) <br><br> Qualifications - ( Some qualifications you may want to include are  Education, Experience, or Competence) ',
		        height: 500,
		        toolbar: [
		          ['style', ['style']],
		          ['font', ['bold', 'underline', 'clear']],
		          ['color', ['color']],
		          ['para', ['ul', 'ol', 'paragraph']],
		          ['table', ['table']],
		          ['insert', ['link']],
		          ['view', ['', '', 'help']]
		        ]
		    });

		    $( function() {
    			$( "#datepicker" ).datepicker({ minDate: +1, maxDate: "+3M +10D" });
  			});
		    // var amount_calc = document.getElementById('amount_calc');
  			$("#datepicker").change(function(){
				var deadline = $(this).val();
				var start_date = $("#start_date").val();
				var date1 = new Date(start_date);
				var date2 = new Date(deadline);
				var difference = date2.getTime() - date1.getTime();
				var days = Math.ceil(difference / (1000 * 3600 * 24));
				if (deadline !== '') {
					document.getElementById('estimated_period').value = days;
					var amount = roundToTwo(days * 3.99);
					// amount_calc.innerHTML = '$'+ amount + ' For '+ days + ' Days';
				}else{
					document.getElementById('estimated_period').value = '';
				}

			})

			function roundToTwo(num) {
			    return +(Math.round(num + "e+2")  + "e-2");
			}
			

			$(function(){
				
				$("#postJobForm").submit(function(e){
					e.preventDefault();
					var postJobForm = document.getElementById('postJobForm');
					var data = new FormData(postJobForm);
					var url = 'includes/postJob';
					if(document.getElementById('terms').checked === true){

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
								// $("#postJobForm")[0].reset();
								// $('#job_description').summernote('reset');
								$("#submitBtn").html('Submit Job For Free');
								// setTimeout(function(){
								// 	location.reload();
								// }, 1500);
							}
						})
					}else{
						errorNow("Please agree to Terms");
						return false;
					}
				})
			})

			function successNow(msg){
	            toastr.success(msg);
	            toastr.options.progressBar = true;
	            toastr.options.positionClass = "toast-top-center";
	        }

	        function errorNow(msg){
	            toastr.error(msg);
	            toastr.options.progressBar = true;
	            toastr.options.positionClass = "toast-top-center";
	        }
    	</script>
    </body>
</html>