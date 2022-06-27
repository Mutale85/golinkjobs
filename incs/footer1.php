<footer class="site-footer bg-light">
  <div class="container postedJobs mt-5">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h4>Go Link Jobs</h4>
        <p class="text-justify fs-5">We believe that no distance should be a barrier to getting unique talent and and offering a service that the world appreciates. Be unique and find talent the world over.</p>
      </div>

      <div class="col-xs-6 col-md-3">
        
      </div>
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
        <p class="copyright-text">Copyright &copy; <?php echo date("d F, Y") ?> All Rights Reserved
        </p>
      </div>

      <div class="col-md-6 col-sm-6 col-xs-12">
          <ul class="list_block">
            <li><a href="terms-and-conditions" title="terms"><i class="bi bi-circle text-dark"></i> Terms</a></li>
            <li><a href="privacy" title="privacy"><i class="bi bi-circle text-dark"></i> Privacy</a></li>
            <li><a href="blog" title="blog"><i class="bi bi-circle text-dark"></i> Blog</a></li>
            <li><a href="looking" title="looking"><i class="bi bi-circle text-dark"></i> Job Seeker</a></li>
            <li><a href="aboutus" title="aboutus"><i class="bi bi-circle text-dark"></i> About Us</a></li>
          </ul>
      </div>
    </div>
  </div>
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Sign In</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form class="form-horizontal" id="validateForm" method="post">
                  <div class="text-center mb-4">
                    <a href="./"><img src="images/Gologo.png" class="img-responsive logo" width="80"></a>
                      <h1>Welcome</h1>
                  </div>
                    <fieldset>
                        <!-- Email input-->
                        
                        <div class="form-group mb-3">
                            <label class="col-md-12 mb-2 control-label" for="email">
                                Email
                            </label>
                            <div class="col-md-12">
                                <input id="email" name="email" type="email" autocomplete="off" placeholder="Enter your email address" class="form-control input-md" required>
                            </div>
                        </div>
                        
                        <!-- Password input-->
                        <div class="form-group">
                            <label class="col-md-12 mb-2 control-label" for="passwordinput">
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
                        
                        <div class="form-group mt-5">
                            <button type="submit" id="submitBtn" class="btn btn-primary">Login</button>    
                        </div>
                        <p>Fogot Password? 
                              <a href="forgot-password" title="password">Reset Password</a>
                          </p>
                        
                    </fieldset>
                </form> 
              </div>
              <div class="modal-footer">
                <a href="register" class="btn btn-primary" title="register">I'm New - Create Account</a>
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
      })
    </script>
</footer>
<!-- 0760665550 Ngosa -->