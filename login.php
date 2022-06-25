<!DOCTYPE html>
<html>
<head>
	<?php include("incs/header.php");
		if (isset($_SESSION['user_email_job_portal'])) {
	        header("location:home");
	    }
	?>
    <style>
    	@import url('https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');
		body {
		    font-family: 'PT Sans', sans-serif;
		    background-color: #6499cd;
		}
		/*.container{
		    background-color: #6499cd;
		}*/
		h1{
		    margin: 15px 0 25px;
		    text-align: center;
		    font-size: 30px;
		}
		img.logo {
			margin: .5em auto;
		}
		input{
		    color:#022255 !important;
		}
		input[type=email]:focus,
		input[type=password]:focus,
		input[type=text]:focus{
		    box-shadow: 0 0 5px rgba(246, 8, 110,0.8);
		    border: 1px solid rgba(246, 8, 110,0.8);
		}
		.container{
		    width: 100%;
		    height: 100vh;
		    display: flex;
		    justify-content: center;
		    align-items: center;
		}
		.form-horizontal {
		    width: 35%;
		    background-color: #ffffff;
		    padding: 25px 38px;
		    border-radius: 12px;
		    box-shadow: 2px 2px 15px rgba(0,0,0,0.5);
		}
		.control-label {
		    text-align: left !important;
		    padding-bottom: 4px;
		}
		.progress {
		    height: 3px !important;
		}
		.form-group {
		    margin-bottom: 10px;
		}
		/*.show-pass{
		    position: absolute;
		    top:5%;
		    right: 8%;
		}*/
		.progress-bar-danger {
		    background-color: #e90f10;
		}
		.progress-bar-warning{
		    background-color: #ffad00;
		}
		.progress-bar-success{
		    background-color: #02b502;
		}
		.login-btn{
		    width: 180px !important;
		    background-image: linear-gradient(to right, #f6086e , #ff133a) !important;
		    font-size: 18px;
		    color: #fff;
		    margin: 0 auto 5px;
		    padding: 8px 0; 
		}
		.login-btn:hover{
		    background-image: linear-gradient(to right, rgba(255, 0, 111, 0.8) , rgba(247, 2, 43, 0.8)) !important;
		    color: #fff !important;
		}
		.bi-eye{
		    color: #022255;
		    cursor: pointer;
		}
		.ex-account p a{
		    color: #f6086e;
		    text-decoration: underline;
		}
		.bi-circle{
		    font-size: 6px;  
		}
		.bi-check{
		    color: #02b502;
		}
		@media screen and (max-width: 768px) {
			.form-horizontal {
			    width: 100%;
			    background-color: #ffffff;
			    padding: 25px 38px;
			    border-radius: 12px;
			    box-shadow: 2px 2px 15px rgba(0,0,0,0.5);
			}
		}
    </style>
</head>

<body>
	<div class="container-fluid">
	    <div class="container">
	        <form class="form-horizontal" id="validateForm" method="post">
	        	<div class="text-center">
		        	<a href="./"><img src="images/remotejobsLogo.png" class="img-responsive logo"></a>
		            <h1>Welcome</h1>
		        </div>
	            <fieldset>
	                <!-- Email input-->
	                
	                <div class="form-group">
	                    <label class="col-md-12 control-label" for="email">
	                        Email
	                    </label>
	                    <div class="col-md-12">
	                        <input id="email" name="email" type="email" autocomplete="off" placeholder="Enter your email address" class="form-control input-md" required>
	                    </div>
	                </div>
	                
	                <!-- Password input-->
	                <div class="form-group">
	                    <label class="col-md-12 control-label" for="passwordinput">
	                        Password
	                    </label>
	                    <div class="col-md-12">
	                    	<div class="input-group">
	                        	<input id="password" class="form-control input-md" name="password" type="password" placeholder="Enter your password" required>

		                        <span class="input-group-text show-pass" onclick="toggle()">
		                            <i class="bi bi-eye" onclick="myFunction(this)"></i>
		                        </span>
		                    </div>
	                    </div>
	                </div>
	                <!-- Button -->
	                
	                <div class="form-group mt-5">
	                    <button type="submit" id="submitBtn" class="btn login-btn btn-block">
	                        Sign In
	                    </button>    
	                </div>
	                <div class="ex-account">
	                    <p>Fogot Password? 
	                        <a href="forgot-password">Click HERE</a>
	                    </p>
	                    <div class="divider"></div>
	                </div>
	                <p>New here? 
	                        <a href="register">Sign Up</a>
	                    </p>
	            </fieldset>
	        </form>   
	    </div>
	</div>
    
    <script>
    	let state = false;
		let password = document.getElementById("password");
		

		password.addEventListener("keyup", function(){
		    let pass = document.getElementById("password").value;
		    checkStrength(pass);
		});

		function toggle(){
		    if(state){
		        document.getElementById("password").setAttribute("type","password");
		        state = false;
		    }else{
		        document.getElementById("password").setAttribute("type","text")
		        state = true;
		    }
		}

		function myFunction(show){
		    show.classList.toggle("bi-eye-slash");
		}

	
		// signin 

		$(function(){
			$("#validateForm").submit(function(e){
				e.preventDefault();
				var data = $(this).serialize();
				$.ajax({
					url:"includes/loginMember",
					method:"POST",
					data:data,
					beforeSend:function(){
						$("#submitBtn").html("<span class='spinner-border'></span> Processing...");
					},
					success:function(data){
						errorNow(data);
						setTimeout(function(){
							location.reload();
						}, 1000);
						// if(data === 'Redirecting you in 1 Second'){

						// }
						
						$("#validateForm")[0].reset();
					}

				})

			})
		})
    </script>
</body>