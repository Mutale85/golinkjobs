<base href="http://localhost/accessremotejobs.com/">
<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
 	</head>
  	<body>
    	<?php include("incs/nav.php")?>
		<section>
			<div class="container-fluid mt-5 mb-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php 
								if (isset($_GET['userid']) AND isset($_GET['email']) AND isset($_GET['pass'])) {
									$pass = filter_input(INPUT_GET, 'pass', FILTER_SANITIZE_SPECIAL_CHARS);
									$email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
									$id = filter_input(INPUT_GET, 'userid', FILTER_SANITIZE_SPECIAL_CHARS);
									// check db for code, id, and email
									$query = $connect->prepare("SELECT * FROM `register` WHERE `id`= ? AND `email` = ? AND `password` = ? ");
									$query->execute([$id, $email, $pass ]);
									if ($query->rowCount() > 0) {
										$verified = '1';
										$sql = $connect->prepare("UPDATE `register` SET `verified` = ? WHERE `id` = ? AND `email` = ? AND `password` = ? ");
										$ex = $sql->execute([$verified, $id, $email, $pass]);
										if ($ex) {
											echo '<h3 class="text-center">Your email has been verified </h3>';
											echo "<p class='text-center'><a href='login' class='btn btn-outline-secondary '>Login</a></p>";
										}
										
									}else{
										echo '<h4>Your are missing something!</h4>';
										exit();
									}
								}else{
									header("location:./");
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include 'incs/footer.php';?>
  	</body>
</html>