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
                        <li><a class="dropdown-item" href="resume" title="resume">Post Resume </a></li>
                        <li><a class="dropdown-item" href="view-my-cv" title="view-my-cv" id="viewResume">My Resume</a></li>
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
                    <a class="nav-link " href="home" title="Home"><i class="bi bi-building"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="post-a-job" title="post-a-job"><i class="bi bi-house-door"></i> Post New Job</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="company-profile" title="company-profile"> <i class="bi bi-briefcase"></i> Company Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="browse-candidates" title="browse"><i class="bi bi-search"></i> Browse Candidates</a>
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