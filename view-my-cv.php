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
				<div class="container mt-5">
					<div class="row">
						<div class="col-md-12 text-center">
							<?php 
								if (isset($_GET['code']) AND isset($_GET['d'])) {
									$code = filter_input(INPUT_GET, 'code', FILTER_SANITIZE_SPECIAL_CHARS);
									$email = base64_decode(filter_input(INPUT_GET, 'd', FILTER_SANITIZE_SPECIAL_CHARS));
									
									// check db for code, id, and email
									$query = $connect->prepare("SELECT * FROM `posted_cvs` WHERE `email` = ? AND `code` = ? ");
									$query->execute([ $email, $code ]);
									if ($query->rowCount() > 0) {
										
										$row = $query->fetch();
										if ($row) {
											extract($row);
											
							?>
								<div class="cvDiv mt-5 mb-5">
									<h1 class="mb-4">Hey <?php echo $firstname?>, Your CV is Ready !</h1>
									<embed src="http://localhost/accessremotejobs.com/cv_uploads/<?php echo $cv_file?>" type="application/pdf" width="100%" height="800px" />
								</div>
								
							<?php
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