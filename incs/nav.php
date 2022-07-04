<?php 
	if (!isset($_SESSION['user_email_job_portal'])) {
		
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom fixed-top"  aria-current="true">
	<div class="container-fluid">
		<a class="navbar-brand" href="./"><img src="images/Gologo.png" class="img-fluid Logo" alt="logo" width="40"> Golinkjobs</a>
		<div class="navbar-toggler three cols" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <div class="hamburger" id="hamburger-3">
		      	<span class="line"></span>
		      	<span class="line"></span>
		      	<span class="line"></span>
		    </div>
		</div>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
                    <a class="nav-link" href="post-new-job" title="post-a-job">POST A JOB</a>
                </li>
			    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Job Seeker
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="post-resume" title="post-resume">Post Resume </a></li>
                        <li><a class="dropdown-item" href="my-resume" title="my-resume" id="">My Resume</a></li>
                    </ul>
                </li>
			    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Employers
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="login" title="login">Login </a></li>
                        <li><a class="dropdown-item" href="register" title="login">Create Account</a></li>
                        <li><a class="dropdown-item" href="pricing" title="pricing">Pricing</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="login" title="login">Login</a>
                </li>
	    		<li class="nav-item">
                    <a class="nav-link " href="the-blog" title="theblog">How To</a>
                </li>
	  		</ul>
		</div>
	</div>
</nav>
<?php 
	}else{
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white p-3 border-bottom fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="./">Partners Portal</a>
        <div class="navbar-toggler three cols" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger" id="hamburger-3">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                
                <li class="nav-item">
                    <a class="nav-link " href="post-a-job" title="post-a-job"> Post New Job</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Job Seeker
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="post-resume" title="post-resume">Post Resume </a></li>
                        <li><a class="dropdown-item" href="my-resume" title="my-resume">My Resume</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Employer
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="home" title="home">Our Posted Jobs</a></li>
                        <li><a class="dropdown-item" href="company-profile" title="company-profile">Company Profile</a></li>
                        <li><a class="dropdown-item" href="browse-candidates" title="browse-candidates" id="viewResumes">Candidates</a></li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="logout" title="logout"> <i class="bi bi-box-arrow-right"></i> Sign Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php }?>
<!-- <div class="container-fluid mb-5"></div> -->