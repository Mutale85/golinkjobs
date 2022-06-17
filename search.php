<base href="http://localhost/accessremotejobs.com/">
<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
 	</head>
  	<body>
    	<?php include("incs/nav.php")?>
    	<?php include("search_box.php")?>
		<section>
			<div class="container-fluid mb-5">
				<div class="container">
					<div class="row">
						<?php
							if (isset($_GET['keyword']) || isset($_GET['job_category'])) {
								$keyword = filter_input(INPUT_GET, 'keyword', FILTER_SANITIZE_SPECIAL_CHARS);
                                $job_category = filter_input(INPUT_GET, 'job_category', FILTER_SANITIZE_SPECIAL_CHARS);
								$query = $connect->prepare("SELECT * FROM posted_jobs WHERE job_title LIKE ? OR job_description LIKE ? OR company_name LIKE ? OR company_location LIKE ? AND job_category  ? ");
								$query->execute(array("%$keyword%", "%$keyword%", "%$keyword%", "%$keyword%", "%$job_category%"));
								if ($query->rowCount() > 0) {
									
									foreach ($query->fetchAll() as $row) {
										// code...
									
										extract($row);
							?>
										<div class="col-md- mb-4">
											
										</div>
							<?php
									}
								}else{
									echo "Nothing Found";
								}
							}

						?>
					</div>
				</div>
			</div>
		</section>
		<?php include 'incs/footer.php';?>		
  	</body>
</html>