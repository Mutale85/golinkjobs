<!DOCTYPE html>
<html>
<head>
	<?php include("incs/header.php");
		if (isset($_SESSION['user_email_job_portal'])) {
	        header("location:home");
	    }
	?>
    <style>
    	
		h1{
		    margin: 15px 0 25px;
		    text-align: center;
		    font-size: 30px;
		}
		img.logo {
			margin: .5em auto;
			width: 100px;
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
		    width: 100% !important;
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
		        	<a href="./"><img src="images/Gologo.png" class="img-responsive logo"></a>
		            <h1>Create Your Account</h1>
		        </div>
	            <fieldset>
	                <!-- Email input-->
	                <div class="form-group">
	                    <label class="col-md-12 control-label" for="email">
	                        Create Username
	                    </label>
	                    <div class="col-md-12">
	                        <input id="username" name="username" type="text" autocomplete="off" placeholder="Enter your email address" class="form-control input-md" required>
	                    </div>
	                </div>
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
	                        <div id="popover-password">
	                            <p><span id="result"></span></p>
	                            <div class="progress">
	                                <div id="password-strength" 
	                                    class="progress-bar" 
	                                    role="progressbar" 
	                                    aria-valuenow="40" 
	                                    aria-valuemin="0" 
	                                    aria-valuemax="100" 
	                                    style="width:0%">
	                                </div>
	                            </div>
	                            <ul class="list-unstyled">
	                                <li class="">
	                                    <span class="low-upper-case">
	                                        <i class="bi bi-circle" aria-hidden="true"></i>
	                                        &nbsp;Lowercase &amp; Uppercase
	                                    </span>
	                                </li>
	                                <li class="">
	                                    <span class="one-number">
	                                        <i class="bi bi-circle" aria-hidden="true"></i>
	                                        &nbsp;Number (0-9)
	                                    </span> 
	                                </li>
	                                <li class="">
	                                    <span class="one-special-char">
	                                        <i class="bi bi-circle" aria-hidden="true"></i>
	                                        &nbsp;Special Character (!@#$%^&*)
	                                    </span>
	                                </li>
	                                <li class="">
	                                    <span class="eight-character">
	                                        <i class="bi bi-circle" aria-hidden="true"></i>
	                                        &nbsp;Atleast 8 Character
	                                    </span>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	                <!-- Button -->
	                
	                <div class="form-group">
	                    <button type="submit" id="submitBtn" class="btn login-btn btn-block">
	                        Create Account
	                    </button>    
	                </div>
	                
                    <p>Already have an account? 
                        <a href="login" title="login">Login</a>
                    </p>
	                   
	            </fieldset>
	        </form>   
	    </div>
	</div>
    
    <script>
    	let state = false;
		let password = document.getElementById("password");
		let passwordStrength = document.getElementById("password-strength");
		let lowUpperCase = document.querySelector(".low-upper-case i");
		let number = document.querySelector(".one-number i");
		let specialChar = document.querySelector(".one-special-char i");
		let eightChar = document.querySelector(".eight-character i");

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

		function checkStrength(password) {
		    let strength = 0;

		    //If password contains both lower and uppercase characters
		    if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
		        strength += 1;
		        lowUpperCase.classList.remove('bi-circle');
		        lowUpperCase.classList.add('bi-check');
		    } else {
		        lowUpperCase.classList.add('bi-circle');
		        lowUpperCase.classList.remove('bi-check');
		    }
		    //If it has numbers and characters
		    if (password.match(/([0-9])/)) {
		        strength += 1;
		        number.classList.remove('bi-circle');
		        number.classList.add('bi-check');
		    } else {
		        number.classList.add('bi-circle');
		        number.classList.remove('bi-check');
		    }
		    //If it has one special character
		    if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
		        strength += 1;
		        specialChar.classList.remove('bi-circle');
		        specialChar.classList.add('bi-check');
		    } else {
		        specialChar.classList.add('bi-circle');
		        specialChar.classList.remove('bi-check');
		    }
		    //If password is greater than 7
		    if (password.length > 7) {
		        strength += 1;
		        eightChar.classList.remove('bi-circle');
		        eightChar.classList.add('bi-check');
		    } else {
		        eightChar.classList.add('bi-circle');
		        eightChar.classList.remove('bi-check');   
		    }

		    // If value is less than 2
		    if (strength < 2) {
		        passwordStrength.classList.remove('progress-bar-warning');
		        passwordStrength.classList.remove('progress-bar-success');
		        passwordStrength.classList.add('progress-bar-danger');
		        passwordStrength.style = 'width: 10%';
		    } else if (strength == 3) {
		        passwordStrength.classList.remove('progress-bar-success');
		        passwordStrength.classList.remove('progress-bar-danger');
		        passwordStrength.classList.add('progress-bar-warning');
		        passwordStrength.style = 'width: 60%';
		    } else if (strength == 4) {
		        passwordStrength.classList.remove('progress-bar-warning');
		        passwordStrength.classList.remove('progress-bar-danger');
		        passwordStrength.classList.add('progress-bar-success');
		        passwordStrength.style = 'width: 100%';
		    }
		}

		// signup 

		$(function(){
			$("#validateForm").submit(function(e){
				e.preventDefault();
				var data = $(this).serialize();
				$.ajax({
					url:"includes/registerJobSeeker",
					method:"POST",
					data:data,
					beforeSend:function(){
						$("#submitBtn").html("<span class='spinner-border'></span> Processing...");
					},
					success:function(data){
						errorNow(data)
						$("#validateForm")[0].reset();
						$("#submitBtn").html("Create Account");
					}

				})

			})
		})
    </script>
</body>