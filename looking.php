<base href="http://localhost/accessremotejobs.com/">
<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
    	<style>
    		


		        
		/*Right
			.modal.right.fade .modal-dialog {
				right: -35%;
				-webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
				   -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
				     -o-transition: opacity 0.3s linear, right 0.3s ease-out;
				        transition: opacity 0.3s linear, right 0.3s ease-out;
			}
			.modal.right.fade.in .modal-dialog {
				right: 0;
			}
		*/
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
							<h1 class="">Welcome to AccessRemoteJobs</h1>
							<h4 class="fs-5">Which area are you targeting? Discover Jobs !</h4>
							
							<!-- 
								creates a 30 seconds video or uploads their CV
							-->
						</div>
						<div class="col-md-12 forBig">
							<a class="btn btn-outline-secondary m-2" href="Accounting And Finance">Accounting And Finance</a>
							<a class="btn btn-outline-secondary m-2" href="Administrative">Administrative</a>
							<a class="btn btn-outline-secondary m-2" href="Administrative Assistant">Administrative Assistant</a>
							<a class="btn btn-outline-secondary m-2" href="Agriculture and Natural Resources">Agriculture and Natural Resources</a>
							<a class="btn btn-outline-secondary m-2" href="Architecture and Construction">Architecture and Construction</a>
							<a class="btn btn-outline-secondary m-2" href="Automotive Industry">Automotive Industry</a>
							<a class="btn btn-outline-secondary m-2" href="Aviation Industry">Aviation Industry</a>
							<a class="btn btn-outline-secondary m-2" href="Business Development">Business Development</a>
							<a class="btn btn-outline-secondary m-2" href="Business Administration">Business Administration</a>
							<a class="btn btn-outline-secondary m-2" href="Communications">Communications</a>
							<a class="btn btn-outline-secondary m-2" href="Community and Social Services">Community and Social Services</a>
							<a class="btn btn-outline-secondary m-2" href="Consultancy">Consultancy</a>
							<a class="btn btn-outline-secondary m-2" href="Customer Service">Customer Service</a>
							<a class="btn btn-outline-secondary m-2" href="Education">Education</a>
							<a class="btn btn-outline-secondary m-2" href="Engineering">Engineering</a>
							<a class="btn btn-outline-secondary m-2" href="Fire and Safety">Fire and Safety</a>
							<a class="btn btn-outline-secondary m-2" href="Health Care Services">Health Care Services</a>
							<a class="btn btn-outline-secondary m-2" href="Human Resource">Human Resource</a>
							<a class="btn btn-outline-secondary m-2" href="Information Technology">Information Technology </a>
							<a class="btn btn-outline-secondary m-2" href="Legal Services">Legal Services</a>
							<a class="btn btn-outline-secondary m-2" href="Marketing and Sales">Marketing and Sales</a>
							<a class="btn btn-outline-secondary m-2" href="Media and Arts">Media and Arts</a>
							<a class="btn btn-outline-secondary m-2" href="Physical Trainer">Physical Trainer</a>
							<a class="btn btn-outline-secondary m-2" href="Project Management">Project Management</a>
							<a class="btn btn-outline-secondary m-2" href="Product Management">Product Management</a>
							<a class="btn btn-outline-secondary m-2" href="Quality Assurance">Quality Assurance</a>
							<a class="btn btn-outline-secondary m-2" href="Supply and Procurement">Supply and Procurement</a>
							<a class="btn btn-outline-secondary m-2" href="Transport and Logistics">Transport and Logistics</a>
							<a class="btn btn-outline-secondary m-2" href="Writing and Editing">Writing and Editing</a>
							<a class="btn btn-outline-secondary m-2" href="Other Field">Other Field</a>
						</div>
						<div class="col-md-12 forSmall">
							<select class="form-controls" name="job_category" id="job_catgory" required>
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
				<div class="row">
					<div class="col-md-12">
						<img src="">
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
			        		<!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
			        		<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
			      		</div>
			    	</div>
			  	</div>
			</div>
		</section>
		<?php include 'incs/footer.php';?>
		<script>
			function getSearchResult(){
				var postedJobs = "<?php echo $_COOKIE['jobIDCookie']?>";
				$.ajax({
					url:"includes/getJobDetails",
					method:"POST",
					data:{postedJobs:postedJobs},
					beforeload:function(){

					},
					success:function(data){
						$("#postedJobs").html(data);
					}
				})
			}
			// getSearchResult();

			var exampleModalLabel = document.getElementById('exampleModalLabel');
			$(function(){
				$(".btn-outline-secondary").click(function(e){
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

				$("#job_catgory").change(function(){
					
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

				})
			})
		</script>
  	</body>
</html>