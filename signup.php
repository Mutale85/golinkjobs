<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
  	</head>
  	<body>
    	<?php include("incs/nav.php")?>
    	<section class="sectionOne">
    		<div class="container mt-5">
    			<div class="row">
    				<div class="col-md-12 col-sm-12">
			        	<form id="signupForm" method="post">
							<h2 class="mb-5 text-center">Sign Up</h2>
							<div class="form-group mb-3">
								<label class="mb-2">Create Username</label>
								<input type="text" name="userme" id="userme" class="form-control" placeholder="Create username" required autocomplete="off">
							</div>
							<div class="form-group mb-3">
								<label class="mb-2">Your Email</label>
								<input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required autocomplete="off">
							</div>
							<div class="form-group mb-3">
								<label class="mb-2">Create Password</label>
								<div class="input-group">
									<input type="password" name="password" id="password" data-pass="password" class="form-control" placeholder="Password" required autocomplete="off">
									<span class="input-group-text" id="showpass_text" onclick="showHide()">
										<i class="bi bi-eye"></i>
									</span>
								</div>
							</div>
							<div class="">
								<button id="submitBtn" type="submit" class="btn btn-outline-secondary">Create Account</button>
								<a href="login" title="password" class="btn btn text-decoration-none">Already a Member ? Login</a>
							</div>
						</form>
			      	</div>
			    </div>
			</div>
		</section>
		<?php include("incs/footer.php")?>
		<script>
			function showHide(){
				var password = document.getElementById('password');
				var showpass_text = document.getElementById('showpass_text');
				if(password.type == "password"){
					password.type = "text";
					showpass_text.innerHTML = '<i class="bi bi-eye-slash"></i>';
				}else{
					password.type = "password";
					showpass_text.innerHTML = '<i class="bi bi-eye"></i>'
				}
			}

			$(function(){
				$("#signupForm").submit(function(e){
					e.preventDefault();
					var data = $(this).serialize();
					$.ajax({
						url:"includes/registerMember",
						methop:"POST",
						data:data,
						beforeSend:function(){
							$("#submitBtn").html("<span class='spinner-border'></span> Processing...");
						},
						success:function(data){
							alert(data)
							$("#signupForm")[0].reset();
						}

					})

				})
			})
		</script>
	</body>
</html>


