<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
    	<style>
    		.bgImage {
			   padding: 4em;
			}
			.searchForm input{
				padding: .5em;
			}
			.searchForm input[type=text]:focus {
				border: 1px solid #1E98E1;
			}
			.searchBtn {
				background-color: #1E98E1;
				border: 1px solid #1E98E1;
				color: #fff;
				border-top-right-radius: 3px;
				border-bottom-right-radius: 3px;
			}
			a:active, a:link {
			  text-decoration:none;
			}
			
			.postedJob {
				display: flex;
				border: 1px solid #1E98E1;
				color: #000;
				box-shadow: 0 0 5px rgba(0, 0, 0, 1.0);
				border-radius: 6px;
			}
			.companyLogo{
				flex: 2;
				width: 60%;
				display: flex;
				padding-top: 1em;
			}
			.companyLogo .coyLogo {
				margin-right: 8px;
			}
			.jobDesc {
				flex: 1;
				width: 40%;
			}
			.jobTitle {
				font-size: ;
			}

			@media screen and (max-width: 700px) {
				.bgImage {
				   padding: 0em;
				}
				.jobcard {
					margin-left: -1.5em;
					border-left: none;
					border-right:1px solid tomato;
					padding: 0;
				}
				.companyLogo img {
					display: none;
				}
				.jobTitle {
					font-size: 1em;
				}
				.div2 p {
					font-size: .9em;
					color: #;
				}
				.jobDesc p {
					font-size: .8em;
				}
			}

    	</style>
    	<!-- <link rel="stylesheet" type="text/css" href="css/jobs.css">
    	<script type="text/javascript" src="js/jobs.js"></script>
 -->  	</head>
  	<body>
    	<?php include("incs/nav.php")?>
    	<section class="container-fluid ">
			<div class="container">
				<div class="row">
					<div class="col-md-12 mb-3 text-center">
						<h1 class="infoTitle">Access Remote Jobs</h1>
						<p class="fs-4 text-secondary">No Spamming - We delivery them direct to you</p>
						<p>We will never show you jobs that have expired</p>
						<!-- <a href="" title="contactus" id="partnerBtn" class="btn btn-outline-primary">Are you In ?</a> -->
					</div>
					<div class="col-md-12 mb-3">
						<div class="bgImage text-center">
							<form method="post" id="searchForm" class="searchForm">
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="keyword" id="keyword" class="form-control" placeholder="Job Title, Company Name, Keyword">
										<input type="text" name="location" id="location" class="form-control" placeholder="Where ?">
										<input type="submit" name="submit" id="submit" class="searchBtn" value="Search Jobs">
									</div>
								</div>		
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="container-fluid border-top pt-4 mb-5">

			<div class="container">
				<div class="row">
					<?php
						$query = $connect->prepare("SELECT * FROM posted_jobs ");
						$query->execute();
						foreach($query->fetchAll() as $row){
							extract($row);
					?>
					<div class="col-md-12">
						<a href="">
							<div class="postedJob mb-3 p-2">
								<div class="companyLogo">
									<div class="div1">
										<img src="uploads/<?php echo $company_logo ?>" alt="<?php echo $company_logo ?>" class="img-gluid coyLogo" width="60">
									</div>
									<div class="div2">
										<h4 class="jobTitle"><?php echo $job_title ?></h4>
										<p><?php echo strtoupper($company_name) ?></p>
										<p class="salary">Salary: <?php echo $salary_range ?></p>
									</div>
								</div>
								<div class="jobDesc">
									<p><?php echo $job_type ?>, Remote Job | <span class="text-info"><?php echo $region ?></span></p>
									<p class="">Dealine: <?php echo date("d F, Y", strtotime($application_deadline));?> </p>
								</div>
							</div>
						</a>
					</div>
					<?}?>
				</div>
			</div>
		</div>

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
		<?php include 'incs/footer.php';?>
  	</body>
  	<script>
		$(document).ready(function(){
			$(document).on("click", "#partnerBtn", function(e){
				e.preventDefault();
				$("#partnerModal").modal("show");
			})
		})
		var create_account = document.getElementById('create_account');
		var partnersForm = document.getElementById('partnersForm');
		var product_name = document.getElementById('product_name');
		var email = document.getElementById('email');
		var password = document.getElementById('password');
		var eye = document.getElementById('eye');
		var lock = document.getElementById('lock');
		// eye.addEventListener("click", (even)=>{
		// 	if (password.type == 'password') {
		// 		password.type = 'text';
		// 		lock.innerHTML = '<i class="bi bi-eye-slash"></i>';
		// 	}else{
		// 		password.type = 'password';
		// 		lock.innerHTML = '<i class="bi bi-eye"></i>';
		// 	}
		// })
		// create_account.addEventListener('click', (event)=>{
		// 	if (product_name.value == "") {
		// 		alert("Product name is required");
		// 		product_name.focus();
		// 		return false;
		// 	}
		// 	if (email.value == "") {
		// 		alert("Email address is required");
		// 		email.focus();
		// 		return false;
		// 	}

		// 	if (password.value == "") {
		// 		alert("Password is required");
		// 		password.focus();
		// 		return false;
		// 	}

		// 	var xhr = new XMLHttpRequest();
		// 	var data = new FormData(partnersForm);
		// 	var url = 'parsers/partners-account';
		// 	xhr.open('POST', url, true);
		// 	xhr.onreadystatechange = function(){
		// 		if (xhr.readyState == 4 && xhr.status == 200) {
		// 			var r = xhr.responseText;
		// 			document.getElementById('response').innerHTML = r;
		// 			alert(r);
		// 			create_account.innerHTML = 'Create Account';
		// 		}else{
		// 			var txt = xhr.responseText;
		// 			alert(txt);
		// 		}
		// 	}
		// 	create_account.innerHTML = '<i class="bi bi-spinner bi-spin"></i>';
		// 	xhr.send(data);
		// })
	</script>
</html>