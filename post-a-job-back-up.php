<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
    	<style type="text/css">
    		.bi-asterisk {
    			font-size: 10px;
    		}
    		.label {
    			font-weight: 700;
    		}
    	</style>
    	<link href="summernote/summernote-lite.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    	<script src="summernote/summernote-lite.min.js"></script>
		<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  	</head>
  	<body>
    	<?php include("incs/nav.php")?>
    	<section class="sectionOne">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-4">
    					<img src="images/charts.gif" class="img-fluid" alt="charts" width="100%">
    				</div>
    				<div class="col-md-8">
    					<form method="post">
    						<div class="row">
	    						<div class="form-group col-md-4 mb-3">
	    							<label class="mb-2 label">Job Title <i class="bi bi-asterisk"></i></label>
	    							<input type="text" name="job_title" id="job_title" class="form-control" required>
	    						</div>
	    						<div class="form-group col-md-4 mb-3">
	    							<label class="mb-2 label">Job Category <i class="bi bi-asterisk"></i></label>
	    							<select class="form-control" name="job_category" id="job_catgory" required>
	    								<option value="">Select</option>
	    								<option value="Agriculture, Food, and Natural Resources">Agriculture, Food, and Natural Resources</option>
	    								<option value="Architecture and Construction">Architecture and Construction</option>
	    								<option value="Arts, Audio/Video Technology, and Communication">Arts, Audio/Video Technology, and Communication</option>
	    								<option value="Business and Finance">Business and Finance</option>
	    								<option value="Education and Training">Education and Training</option>
	    								<option value="Health Science">Health Science</option>
	    								<option value="Information Technology">Information Technology </option>
	    								<option value="Marketing">Marketing</option>
	    								<option value="Writing">Writing</option>
	    								<option value="Other">Other</option>
	    							</select>
	    						</div>
	    						<div class="form-group col-md-4 mb-3">
	    							<label class="mb-2 label">Application Link or Email <i class="bi bi-asterisk"></i></label>
	    							<input type="text" name="application_link" id="application_link" class="form-control" required>
	    						</div>
	    						<div class="form-group col-md-12 mb-3">
	    							<label class="mb-2 label">Is this role open world wide ? <i class="bi bi-asterisk"></i></label>
	    							<br>
	    							<label>
										<input class="form-check-input" type="radio" name="role_open_mode" id="role_open_mode" value="World world"> Yes
									</label>
									
									<label>
										<input class="form-check-input" type="radio" name="role_open_mode" id="role_open_mode" value="Not World"> No
									</label>
	    						</div>
	    						<div class="form-group col-md-12 mb-3" id="region_open">
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
	    						</div>
	    						<div class="form-group col-md-12 mb-3">
	    							<label class="mb-2 label">Job Description</label>
	    							<textarea class="form-control" name="job_description" id="job_description"></textarea>
	    						</div>
	    						<div class="form-group col-md-12 mb-3">
	    							<label class="mb-2 label">Job Type ? <i class="bi bi-asterisk"></i></label>
	    							<br>
	    							<label>
										<input class="form-check-input" type="radio" name="job_type" id="job_type" value="Full Time"> Full Time
									</label>
									<label>
										<input class="form-check-input" type="radio" name="job_type" id="job_type" value="Part Time"> Part Time
									</label>
									<label>
										<input class="form-check-input" type="radio" name="job_type" id="job_type" value="Contract"> Contract
									</label>
	    						</div>
	    						<div class="form-group col-md-6 mb-3">
	    							<label class="mb-2 label">Salary Range</label>
	    							<input type="text" name="salary_range" id="salary_range" class="form-control" placeholder="Between $50K - $60K">
	    						</div>
	    						<div class="form-group col-md-6 mb-3">
	    							<label class="mb-2 label">Application Deadline</label>
	    							<input type="hidden" name="start_date" id="start_date" value="<?php echo date("Y-m-d")?>">
	    							<input type="text" name="application_deadline" id="datepicker" class="form-control" required>
	    							<input type="hidden" name="estimated_period" id="estimated_period">
	    						</div>
	    						<div class="col-md-12 mt-3 border-bottom mb-3"></div>
	    						<h3 class="mt-4 mb-3 text-secondary">Applicants would love to know more about you</h3>
	    						<div class="form-group col-md-12 mb-3">
	    							<label class="mb-2 label">Company Name <i class="bi bi-asterisk"></i></label>
	    							<input type="text" name="company_name" id="company_name" class="form-control" required>
	    						</div>
	    						<div class="form-group col-md-6 mb-3">
	    							<label class="mb-2 label">Location <i class="bi bi-asterisk"></i></label>
	    							<input type="text" name="company_location" id="company_location" class="form-control" required>
	    						</div>
	    						<div class="form-group col-md-6 mb-3">
	    							<label class="mb-2 label">Company Logo <i class="bi bi-asterisk"></i></label>
	    							<input type="file" name="company_logo" id="company_logo" class="form-control" required>
	    						</div>
	    						<div class="form-group col-md-6 mb-3">
	    							<label class="mb-2 label">Website </label>
	    							<input type="text" name="company_website" id="company_website" class="form-control">
	    						</div>
	    						<div class="form-group col-md-6 mb-3">
	    							<label class="mb-2 label">Your Email <i class="bi bi-asterisk"></i></label>
	    							<input type="email" name="email" id="email" class="form-control" required>
	    							<em>This mail will be used for billing </em>
	    						</div>
	    						<div class="col-md-12">
	    							
	    							<button class="btn btn-outline-secondary" id="start-payment-button" onclick="makePayment()">Submit Job For <span id="amount_calc">$2.99 / Day</span> </button>
	    						</div>
	    					</div>
    					</form>
    				</div>
    			</div>
    		</div>
    	</section>
    	<script src="https://checkout.flutterwave.com/v3.js"></script>
    	<script>
    		var region_open = document.getElementById('region_open');
    		region_open.style.display = 'none';
    		$(document).on('click', '#role_open_mode', function() {      
			    $('input[type="radio"]').not(this).prop('checked', false); 
			    var data = $(this).val();
			    if(data === 'Not World') {
			    	region_open.style.display = 'block';
			    }else{
			    	region_open.style.display = 'none';
			    }    
			});

			$('#job_description').summernote({
		        placeholder: 'Hello stand alone ui',
		        height: 200,
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
					var amount = roundToTwo(days * 2.99);
					amount_calc.innerHTML = amount + ' For '+ days + ' Days';
				}else{
					document.getElementById('estimated_period').value = '';
				}
				
				// var days = document.getElementById('estimated_period').value;
				

			})

			function roundToTwo(num) {
			    return +(Math.round(num + "e+2")  + "e-2");
			}

			function makePayment() {
				var days = document.getElementById('estimated_period').value;
				var amount = days * 2.99;
				var company_name = document.getElementById('company_name');
				var email = document.getElementById('email');
				
				FlutterwaveCheckout({
				  public_key: "FLWPUBK_TEST-e5fa271a124685e29bf24120770dcdbc-X",
				  tx_ref: "AccessRemoteJobs-48981487343MDI0NzMx",
				  amount: amount,
				  currency: "USD",
				  payment_options: "card, banktransfer, ussd",
				  redirect_url: "https://glaciers.titanic.com/handle-flutterwave-payment",
				  meta: {
				    consumer_id: 23,
				    consumer_mac: "92a3-912ba-1192a",
				  },
				  customer: {
				    email: email,
				    // phone_number: "08102909304",
				    name: company_name,
				  },
				  customizations: {
				    title: "AccessRemoteJobs.com",
				    description: "Payment for Job Posting",
				    logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
				  },
				});
			}
    	</script>
    </body>
</html>