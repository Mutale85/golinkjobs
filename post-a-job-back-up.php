<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
    	<link href="summernote/summernote-lite.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    	<script src="summernote/summernote-lite.min.js"></script>
		<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  	</head>
  	<body>
    	<?php include("incs/nav.php")?>
    	<section class="sectionOne">
    		<div class="container mt-5">
    			<div class="row">
    				
    				<div class="col-md-12">
    					<div class="forms">
	    					<h2 class="mb-5 text-center">Post A 1 Job For Free</h2>
	    					<p class="text-center">One Job Post is Free there after its $3.99 / Day</p>
	    					<hr>
	    					<form method="post" id="jobForm" enctype="multipart/form-data">
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
		    							<label class="mb-2 label">Your Email <i class="bi bi-asterisk"></i></label>
		    							<input type="email" name="email" id="email" class="form-control" required>
		    							<em>This mail will be used for billing </em>
		    						</div>
		    						<div class="form-group col-md-12 mb-5">
		    							<label class="mb-2 label">Company Name <i class="bi bi-asterisk"></i></label>
		    							<input type="text" name="company_name" id="company_name" class="form-control" required>
		    						</div>
		    						<div class="form-group col-md-6 mb-5">
		    							<label class="mb-2 label">Location <i class="bi bi-asterisk"></i></label>
		    							<input type="text" name="company_location" id="company_location" class="form-control" required>
		    						</div>
		    						<div class="form-group col-md-6 mb-5">
		    							<label class="mb-2 label">Company Logo <i class="bi bi-asterisk"></i></label>
		    							<input type="file" name="company_logo" id="company_logo" class="form-control" required>
		    						</div>
		    						<div class="form-group col-md-12 mb-5">
		    							<label class="mb-2 label">Website </label>
		    							<input type="url" name="company_website" id="company_website" class="form-control">
		    						</div>
		    						
		    						<div class="col-md-12">
		    							<button class="btn btn-outline-secondary" id="submitBtn">Submit Job For <span id="amount_calc">$3.99 / Day</span> </button>
		    						</div>
		    					</div>
	    					</form>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</section>
    	<script>
    		var region_open = document.getElementById('region_open');
    		region_open.style.display = 'none';
    		$(document).on('click', '#role_open_mode', function() {      
			    $('input[type="radio"]').not(this).prop('checked', false); 
			    var data = $(this).val();
			    if(data === '2') {
			    	region_open.style.display = 'block';
			    }else{
			    	region_open.style.display = 'none';
			    }    
			});

			$('#job_description').summernote({
		        placeholder: 'Please do not forget to add your job description',
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
		    var amount_calc = document.getElementById('amount_calc');
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
					amount_calc.innerHTML = '$'+ amount + ' For '+ days + ' Days';
				}else{
					document.getElementById('estimated_period').value = '';
				}

			})

			function roundToTwo(num) {
			    return +(Math.round(num + "e+2")  + "e-2");
			}
			

			$(function(){
				
				$("#jobForm").submit(function(e){
					e.preventDefault();
					var jobForm = document.getElementById('jobForm');
					var data = new FormData(jobForm);
					var url = 'includes/postJob';
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
							$("#jobForm")[0].reset();
							$('#job_description').summernote('reset');
							$("#submitBtn").html('Submit Job For <span id="amount_calc">$3.99 / Day</span>');
							setTimeout(function(){
								window.location = 'post-a-job-final';
							}, 1500);
						}
					})
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