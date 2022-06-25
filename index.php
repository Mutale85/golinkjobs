<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
 	</head>
  	<body>
    	<?php include("incs/nav.php")?>
    	<?php include("search_box.php")?>
		<section>
			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="col-md-12"><h3 id="titleLabel" class="text-center text-secondary"></h3></div>
						<div id="postedJobs" class="postedJobs"><div class="spinner-border "></div>Please Wait....</div>
					</div>
				</div>
			</div>
		</section>
		<?php include 'incs/footer.php';?>
		<div class="modal" tabindex="-1" role="dialog" id="partnerModal">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-lg">
					<div class="modal-header">
						<h4 class="modal-title">Job Emails Straight to your inbox</h4>
						<button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post" id="partnersForm">
							<div class="form-group mb-3">
								<label class="mb-2">Your Name</label>
								<div class="input-group">
									<span class="input-group-text">
										<i class="bi bi-person"></i>
									</span>
									<input type="text" name="your_names" id="your_names" class="form-control" required placeholder="Your Names">
								</div>
							</div>
							<div class="form-group mb-3">
								<label class="mb-2">Your Email</label>
								<div class="input-group">
									<span class="input-group-text">
										@
									</span>
									<input type="email" name="email" id="email" class="form-control" required placeholder="Your Email">
								</div>
							</div>
							<button class="btn btn-outline-success">Send me Job Emails </button>
						</form>
					</div>
					<div class="modal-footer d-flex justify-content-between">
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
  	</body>
	<script type="text/javascript" src="js/main.js"></script>
	<script>
		var titleLabel = document.getElementById('titleLabel');

		$(document).on("click", ".job_btn", function(e){
			e.preventDefault();
			var fetchJobsByCategory = $(this).attr("href");
			titleLabel.innerText =  `${fetchJobsByCategory} Jobs`;
			$.ajax({
				url:"includes/fetchJobsByCategory",
				method:"POST",
				data:{fetchJobsByCategory:fetchJobsByCategory},
				beforeload:function(){

				},
				success:function(data){
					$("#postedJobs").html(data);
				}
			})
		})
	</script>
</html>


