<base href="http://localhost/accessremotejobs.com/">
<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
    	<style>
    		:root {
			--clr-primary: #651fff;
			--clr-gray: #37474f;
			--clr-gray-light: #b0bec5;
			}

			* {
			box-sizing: border-box;
			/*font-family: "Open Sans", sans-serif;*/
			margin: 0;
			padding: 0;
			}

			body {
			color: var(--clr-gray);
			/*margin: 2rem;*/
			}

			.wrapper-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, 20rem);
			justify-content: center;
			}

			.containerCard {
			overflow: hidden;
			box-shadow: 0px 2px 8px 0px var(--clr-gray-light);
			background-color: white;
			text-align: center;
			border-radius: 1rem;
			position: relative;
			margin: 0.5rem;
			}

			.banner-img {
			position: absolute;
			background-image: url(https://images.unsplash.com/photo-1582727657635-c771002bdada?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ);
			height: 10rem;
			width: 100%;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			}

			.profile-img {
			width: 8rem;
			clip-path: circle(60px at center);
			margin-top: 4.5rem;
			}

			.name {
			font-weight: bold;
			font-size: 1.5rem;
			}

			.description {
			margin: 1rem 2rem;
			font-size: 0.9rem;
			}

			.cv_preview {
			width: 100%;
			border: none;
			font-size: 1rem;
			font-weight: bold;
			color: white;
			padding: 1rem;
			background-color: var(--clr-primary);
			}
			/*youjizzadmin@gmail.com*/
    	</style>
 	</head>
  	<body>
    	<?php include("incs/nav.php")?>
		<section>
			<div class="container-fluid mt-5 mb-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12 mb-5 text-center">
							<h1 class="">Welcome to AccessRemoteJobs</h1>
							<p class="fs-5">Create a profile and add your CV. It will never be shared with anyone, you will use it to send to your prospective jobs</p>
							<a href="" class="callFormModal btn btn-primary">Add Profile</a>
							<!-- 
								creates a 30 seconds video or uploads their CV
							 -->
						</div>
						<div class="col-md-12">
						  	<div class="wrapper-grid">
							    <div class="containerCard">
							      	<div class='banner-img'></div>
							      	<img src='https://images.unsplash.com/photo-1444011283387-7b0f76371f12?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt='profile image' class="profile-img">
							      	<h1 class="name">Anna Marie</h1>
							      	<p class="description">Hi there! My name is Anna and I am a book lover, traveler and professional blogger. Follow me to stay connected!</p>
							      	<div class="socialLinks mb-3 p-4 d-flex justify-content-between">
							      		<a href=""><i class="bi bi-facebook"></i></a>
							      		<a href=""><i class="bi bi-linkedin"></i></a>
							      		<a href=""><i class="bi bi-twitter"></i></a>
							      	</div>
							      	<button class='cv_preview'>Preview CV</button>
							    </div>

						    <div class="containerCard">
						      <div class='banner-img'></div>
						      <img src='https://images.unsplash.com/photo-1444011283387-7b0f76371f12?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt='profile image' class="profile-img">
						      <h1 class="name">Anna Marie</h1>
						      <p class="description">Hi there! My name is Anna and I am a book lover, traveler and professional blogger. Follow me to stay connected!</p>
						      <button class='btn'>Follow</button>
						    </div>

						    <div class="containerCard">
						      <div class='banner-img'></div>
						      <img src='https://images.unsplash.com/photo-1444011283387-7b0f76371f12?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt='profile image' class="profile-img">
						      <h1 class="name">Anna Marie</h1>
						      <p class="description">Hi there! My name is Anna and I am a book lover, traveler and professional blogger. Follow me to stay connected!</p>
						      <button class='btn'>Follow</button>
						    </div>

						    <div class="containerCard">
						      <div class='banner-img'></div>
						      <img src='https://images.unsplash.com/photo-1444011283387-7b0f76371f12?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt='profile image' class="profile-img">
						      <h1 class="name">Anna Marie</h1>
						      <p class="description">Hi there! My name is Anna and I am a book lover, traveler and professional blogger. Follow me to stay connected!</p>
						      <button class='btn'>Follow</button>
						    </div>

						    <div class="containerCard">
						      <div class='banner-img'></div>
						      <img src='https://images.unsplash.com/photo-1444011283387-7b0f76371f12?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt='profile image' class="profile-img">
						      <p class="name">Anna Marie</p>
						      <p class="description">Hi there! My name is Anna and I am a book lover, traveler and professional blogger. Follow me to stay connected!</p>
						      <button class='btn'>Follow</button>
						    </div>

						    <div class="containerCard">
						      <div class='banner-img'></div>
						      <img src='https://images.unsplash.com/photo-1444011283387-7b0f76371f12?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt='profile image' class="profile-img">
						      <p class="name">Anna Marie</p>
						      <p class="description">Hi there! My name is Anna and I am a book lover, traveler and professional blogger. Follow me to stay connected!</p>
						      <button class='btn'>Follow</button>
						    </div>
						    <div class="containerCard">
						      <div class='banner-img'></div>
						      <img src='https://images.unsplash.com/photo-1444011283387-7b0f76371f12?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt='profile image' class="profile-img">
						      <p class="name">Anna Marie</p>
						      <p class="description">Hi there! My name is Anna and I am a book lover, traveler and professional blogger. Follow me to stay connected!</p>
						      <button class='btn'>Follow</button>
						    </div>
						    <div class="containerCard">
						      <div class='banner-img'></div>
						      <img src='https://images.unsplash.com/photo-1444011283387-7b0f76371f12?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt='profile image' class="profile-img">
						      <p class="name">Anna Marie</p>
						      <p class="description">Hi there! My name is Anna and I am a book lover, traveler and professional blogger. Follow me to stay connected!</p>
						      <button class='btn'>Follow</button>
						    </div>
						    <div class="containerCard">
						      <div class='banner-img'></div>
						      <img src='https://images.unsplash.com/photo-1444011283387-7b0f76371f12?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt='profile image' class="profile-img">
						      <p class="name">Anna Marie</p>
						      <p class="description">Hi there! My name is Anna and I am a book lover, traveler and professional blogger. Follow me to stay connected!</p>
						      <button class='btn'>Follow</button>
						    </div>
						    <div class="containerCard">
						      <div class='banner-img'></div>
						      <img src='https://images.unsplash.com/photo-1444011283387-7b0f76371f12?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt='profile image' class="profile-img">
						      <p class="name">Anna Marie</p>
						      <p class="description">Hi there! My name is Anna and I am a book lover, traveler and professional blogger. Follow me to stay connected!</p>
						      <button class='btn'>Follow</button>
						    </div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal" tabindex="-1" role="dialog" id="profileModal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Your Profile</h4>
							<button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form method="post" id="partnersForm">
								<div class="form-group mb-3">
									<label class="mb-2">First and Last name</label>
									<div class="input-group">
										<span class="input-group-text">
											<i class="bi bi-person"></i>
										</span>
										<input type="text" name="fistname" id="fistname" class="form-control" required placeholder="Firstname ">
										<span class="input-group-text">
											<i class="bi bi-person"></i>
										</span>
										<input type="text" name="lastname" id="lastname" class="form-control" required placeholder="Lastname">
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="mb-2">About You</label>
									<div class="input-group">
										<span class="input-group-text">
											<i class="bi bi-info-circle"></i>
										</span>
										<textarea class="form-control" name="about" id="about" rows="5"></textarea>
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
		</section>
		<?php include 'incs/footer.php';?>
		<script>
			function getSearchResult(){
				var postedJobs = "<?php echo $_COOKIE['jobIDCookie']?>";
				$.ajax({
					url:"includes/getJobDetails",
					method:"POST",
					data:{postedJobs:postedJobs},
					beforeload:function(){

					},
					success:function(data){
						$("#postedJobs").html(data);
					}
				})
			}
			getSearchResult();

			$(function(){
				$(".callFormModal").click(function(e){
					e.preventDefault();
					$("#profileModal").modal("show");
				})
			})
		</script>
  	</body>
</html>