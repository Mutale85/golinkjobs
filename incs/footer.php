<footer class="site-footer bg-light">
  	<div class="container postedJobs mt-5 p-4">
    	<div class="row">
      		<div class="col-sm-12 col-md-6 ">
        		<h4>Go Link Jobs</h4>
        		<p class="text-justify">We believe that no distance should be a barrier to getting unique talent and and offering a service that the world appreciates. Be unique and find talent the world over.</p>
      		</div>
      		<div class="col-xs-6 col-md-3"></div>
      		<div class="col-xs-6 col-md-3 text-white">
        		<h6>Quick Links</h6>
        		<a href="post-a-job" title="post-a-job"><h6>POST A JOB FOR USD 3.99 / DAY</h6></a>
      		</div>
    	</div>
    	<hr>
  	</div>
  	<div class="container postedJobs">
    	<div class="row">
      		<div class="col-md-6 col-sm-6 col-xs-12">
        		<p class="copyright-text">Copyright &copy; <?php echo date("d F, Y") ?> All Rights Reserved</p>
      		</div>

	      	<div class="col-md-6 col-sm-6 col-xs-12">
	          	<ul class="list_block d-flex justify-content-evenly">
		            <li><a href="terms-and-conditions" title="terms"><i class="bi bi-circle text-dark"></i> Terms</a></li>
		            <li><a href="privacy" title="privacy"><i class="bi bi-circle text-dark"></i> Privacy</a></li>
		            <li><a href="the-blog" title="blog"><i class="bi bi-circle text-dark"></i> Blog</a></li>
		            <li><a href="resume" title="resume"><i class="bi bi-circle text-dark"></i> Job Seeker</a></li>
		            <li><a href="aboutus" title="aboutus"><i class="bi bi-circle text-dark"></i> About Us</a></li>
	          	</ul>
	      	</div>
    	</div>
  	</div>
  	<!-- Sign In Modal -->
  	<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          	<div class="modal-content">
              	<div class="modal-header">
                	<h5 class="modal-title" id="staticBackdropLabel">Sign In</h5>
                  	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              	</div>
              	<div class="modal-body">
                  	<form class="form-horizontal" id="signInForm" method="post">
                  		<div class="text-center mb-4">
                    		<a href="./"><img src="images/Gologo.png" class="img-responsive logo" width="80"></a>
                      		<h1>Welcome</h1>
                  		</div>
                        <div class="form-group mb-3">
                            <label class="mb-2" for="email">Email</label>
                            <div class="input-group">
                            	<span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input id="email" name="email" type="email" autocomplete="off" placeholder="Enter your email address" class="form-control input-md" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2" for="passwordinput">Password</label>
                            <div class="input-group">
                                <input id="password" class="form-control input-md" name="password" type="password" placeholder="Enter your password" required>
                              	<span class="input-group-text show-pass" onclick="toggle()">
                                  	<i class="bi bi-eye" onclick="myFunction(this)"></i>
                              	</span>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" id="submitBtn" class="btn btn-primary w-100">Login</button>    
                        </div>
                        <p>Fogot Password? 
                            <a href="forgot-password" class="text-primary" title="password">Reset Password</a>
                        </p>

                        <p>New Here? 
                            <a href="register" class="text-info" title="password">Create your employers Accout</a>
                        </p>
                	</form> 
              	</div>
              	<div class="modal-footer">
              	</div>
          	</div>
        </div>
    </div>

    <!-- getResumeModal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" id="getResumeModal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Resume Link</h4>
					<button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="post" id="confirmationForms">
						<div class="form-group mb-3">
							<label class="mb-2">Your Email</label>
							<div class="input-group">
								<span class="input-group-text">
									<i class="bi bi-envelope"></i>
								</span>
								<input type="text" name="email" id="email" class="form-control" required placeholder="Enter Email">
							</div>
						</div>
						<div class="d-flex justify-content-between">
							<button class="btn btn-primary" id="submitEmail" type="submit">Get Resume Link</button>
						</div>
					</form>
					<progress value="0" max="10" id="progressBar"></progress>
				</div>
				<div class="modal-footer d-flex justify-content-between">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
    <script>
      	$(function(){
        	$(document).on("click", ".post_new_job", function(e){
          		e.preventDefault();
          
          		$("#loginModal").modal("show");
        	})
        	$("#viewResume").click(function(e){
        		e.preventDefault();
				$("#getResumeModal").modal("show");
        	})
     	})

     	let state = false;
		let password = document.getElementById("password");
		
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

		$(function(){
			$("#signInForm").submit(function(e){
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
							window.location = 'home';
						}, 1000);
					}

				})

			})
		})

		$("#confirmationForms").submit(function(e){
			e.preventDefault();
			var confirmationForms = document.getElementById('confirmationForms');
			var data = new FormData(confirmationForms);
			var url = 'includes/submitEmailForCv';
			$.ajax({
				url:url+'?<?php echo time()?>',
				method:"post",
				data:data,
				cache : false,
				processData: false,
				contentType: false,
				beforeSend:function(){
					$("#submitEmail").html("<i class='spinner-border'></i> Processing...");
					timerD();
				},
				success:function(data){
					successNow(data);
					$("#submitEmail").html("Submit Details")
					$("#confirmationForms")[0].reset();
					document.getElementById('progressBar').style.display = 'none';
				}
			})
		})
		function timerD(){
			document.getElementById('progressBar').style.display = 'block';
			var timeleft = 10;
			var downloadTimer = setInterval(function(){
				if(timeleft <= 0){
				    clearInterval(downloadTimer);
				}
			  	document.getElementById("progressBar").value = 10 - timeleft;
			  	timeleft -= 1;
			}, 1000);
		}

    </script>
     <script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "resume",
    "item": "https://golinkjobs.com/resume"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "login",
    "item": "https://golinkjobs.com/login"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "register",
    "item": "https://golinkjobs.com/register"  
  },{
    "@type": "ListItem", 
    "position": 4, 
    "name": "jobs",
    "item": "https://golinkjobs.com/jobs"  
  },{
    "@type": "ListItem", 
    "position": 5, 
    "name": "how to",
    "item": "https://golinkjobs.com/the-blog"  
  },{
    "@type": "ListItem", 
    "position": 6, 
    "name": "about us",
    "item": "https://golinkjobs.com/aboutus"  
  },{
    "@type": "ListItem", 
    "position": 7, 
    "name": "home",
    "item": "https://golinkjobs.com/"  
  }]
}
</script>
</footer>