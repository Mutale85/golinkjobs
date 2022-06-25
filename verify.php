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
							<div class="forms">
								<?php 
									if (isset($_GET['code']) AND isset($_GET['d']) AND isset($_GET['i'])) {
										$code = filter_input(INPUT_GET, 'code', FILTER_SANITIZE_SPECIAL_CHARS);
										$email = base64_decode(filter_input(INPUT_GET, 'd', FILTER_SANITIZE_SPECIAL_CHARS));
										$id = base64_decode(filter_input(INPUT_GET, 'i', FILTER_SANITIZE_SPECIAL_CHARS));
										// check db for code, id, and email
										$query = $connect->prepare("SELECT * FROM `posted_cvs` WHERE `id`= ? AND `email` = ? AND `code` = ? ");
										$query->execute([$id, $email, $code ]);
										if ($query->rowCount() > 0) {
											$verified = '1';
											$sql = $connect->prepare("UPDATE `posted_cvs` SET `verified` = ? WHERE `id` = ? AND `email` = ? AND `code` = ? ");
											$ex = $sql->execute([$verified, $id, $email, $code]);
											if ($ex) {
												echo '<h3 class="text-center">Your email has been verified and Resume Saved.</h3>';
												echo "<p class='text-center'><a href='resume?check=true'>Check Resume</a></p>";
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
			</div>
		</section>
		<?php include 'incs/footer.php';?>
  	</body>
</html>