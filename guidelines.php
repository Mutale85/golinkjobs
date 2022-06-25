<!-- <base href="http://localhost/2remote.com/"> -->
<!DOCTYPE html>
<html>
<head>
	<?php include("incs/header.php")?>
</head>
<body>
	<?php include ("incs/nav.php"); ?>
	<section>
		<div class="container mt-5">
			<div class="main_section">
				<div class="row">
					<div class="col-md-5">
						<h1 class="mb-4">Posting A Job</h1>
						<p>This refers to the listing guideline set by OSABOX Limited Company</p>
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="<?php echo  basename($_SERVER['REQUEST_URI'])?>"><?php echo ucwords(basename($_SERVER['REQUEST_URI']))?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="terms-and-conditions">Terms of use</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="privacy">Privacy</a>
							</li>
						</ul>
					</div>
					<div class="col-md-7 mt-5">

						<div class="accordion" id="accordionExample">
						  	<div class="accordion-item">
							    <h2 class="accordion-header" id="headingOne">
							      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							        <h4> When to Post a Job</h4>
							      </button>
							    </h2>
							    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parents="#accordionExample">
							      <div class="accordion-body">
							        <p>You are hereby allowed to post a job without restrictions at any convenient time that you feel like and the job will appear on the website's front page upon following the rules.</p>
							      </div>
							    </div>
						  	</div>
						  	<div class="accordion-item">
							    <h2 class="accordion-header" id="headingTwo">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							        <h4>Job Information</h4>
							      </button>
							    </h2>
							    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parents="#accordionExample">
							      <div class="accordion-body">
							        <p>You are encouraged to use the provided (What you see is what you get) form to give as much information about the job being listed so that prospective candidates can understand the position.  </p>
							      </div>
							    </div>
						  	</div>
						  	<div class="accordion-item">
							    <h2 class="accordion-header" id="headingThree">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							        <h4>Edit or delete the listing</h4>
							      </button>
							    </h2>
							    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parents="#accordionExample">
							      <div class="accordion-body">
							        <p>You own the rights to the information you have submitted, you can edit the listing and rating given to your client, you can also delete the listing, (We will serve the information for 30 days after you delete it before completely removing it from our database). </p>
							      </div>
							    </div>
						  	</div>
						  	<div class="accordion-item">
							    <h2 class="accordion-header" id="headingFour">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							        <h4>More Information</h4>
							      </button>
							    </h2>
							    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parents="#accordionExample">
							      <div class="accordion-body">
							        <p>We will keep updating these guidelines without giving you notice. Please understand that we have the final say concerning the way you list a client and if we deem your information to be false, we will delete it.</p>
							      </div>
							    </div>
						  	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include("incs/footer.php")?>
</body>
</html>