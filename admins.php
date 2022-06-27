<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php 
    		include("incs/header.php");

			// if (!isset($_SESSION['user_email_job_portal'])) {
			// 	header("location:login");
			// }

    	?>
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
    				<div class="col-md-12 text-center">
						<h1>Welcome Admins</h1>
					</div>
    				<div class="col-md-12">
    					<div class="forms">
	    					<h2 class="mb-5 text-center">Blog Form</h2>
	    					<hr style="width: 25%; margin: .5em auto; margin-bottom: 1em; height: 10px; background: gray; border-radius: .5em;">
	    					<form method="post" id="blogForm" enctype="multipart/form-data">
	    						<div class="row">
		    						<div class="form-group col-md-6 mb-5">
		    							<label class="mb-2 label">Blog Title <i class="bi bi-asterisk"></i></label>
		    							<input type="text" name="blog_title" id="blog_title" class="form-control" required>
		    						</div>
		    						<div class="form-group col-md-6 mb-5">
		    							<label class="mb-2 label">Blog FIle <i class="bi bi-asterisk"></i></label>
		    							<input type="file" name="blog_file" id="blog_file" class="form-control" required>
		    						</div>
		    						<div class="form-group col-md-12 mb-5">
		    							<label class="mb-2 label">Blog Description <i class="bi bi-asterisk"></i></label>
		    							<textarea class="form-control" name="blog" id="blog"></textarea>
		    						</div>
		    						<div class="col-md-12">
		    							<button class="btn btn-outline-secondary shadow" id="submitBtn">Post</button>
		    						</div>
		    					</div>
	    					</form>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</section>
    	<script>
    		
			$('#blog').summernote({
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

		    
			$(function(){
				$("#blogForm").submit(function(e){
					if(document.getElementById('terms').checked === true){
						e.preventDefault();
						var blogForm = document.getElementById('blogForm');
						var data = new FormData(blogForm);
						var url = 'includes/submitNewJob';
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
								$("#blogForm")[0].reset();
								$('#job_description').summernote('reset');
								$("#submitBtn").html('Submit Job For <span id="amount_calc">$3.99 / Day</span>');
								setTimeout(function(){
									window.location = 'post-a-job-final';
								}, 1500);
							}
						})
					}else{
						errorNow("Please Agree to Terms");
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