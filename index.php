<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
 	</head>
  	<body>
    	<?php include("incs/nav.php")?>
    	<?php include("search_box.php")?>
		<section>
			<div class="container-fluid mb-5">

				<div class="container">
					<div class="row">
						<div id="postedJobs"></div>
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
  	<script>
		$(document).ready(function(){
			$(document).on("click", "#partnerBtn", function(e){
				e.preventDefault();
				$("#partnerModal").modal("show");
			});

			$(document).on("click", ".jobData", function(e){
				e.preventDefault();
				var link = $(this).attr("href");
				var id = $(this).attr('id');
				setCookie('jobIDCookie', id, 30);
				window.location = link;
			})
		})

		// Set a Cookie
		function setCookie(cName, cValue, expDays) {
	        let date = new Date();
	        date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
	        const expires = "expires=" + date.toUTCString();
	        document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
		}
		
		function getPostedJobs(){
			var postedJobs = "getPostedJobs";
			$.ajax({
				url:"includes/getPostedJobs",
				method:"POST",
				data:{postedJobs:postedJobs},
				beforeload:function(){

				},
				success:function(data){
					$("#postedJobs").html(data);
				}
			})
		}
		getPostedJobs();
		

		function searchKeyWord(value){
			var postedJobs = value;
			$.ajax({
				url:"includes/searchKeyWord",
				method:"POST",
				data:{postedJobs:postedJobs},
				beforeload:function(){

				},
				success:function(data){
					$("#postedJobs").html(data);
				}
			})
		}
		

		function getCategoryResults(value){
			var postedJobs = value;
			var keyword = document.getElementById('keyword').value;
			$.ajax({
				url:"includes/getCategoryResults",
				method:"POST",
				data:{postedJobs:postedJobs, keyword:keyword},
				beforeload:function(){

				},
				success:function(data){
					$("#postedJobs").html(data);
				}
			})
		}		
	</script>
</html>


