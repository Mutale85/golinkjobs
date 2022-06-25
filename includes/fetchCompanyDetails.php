<?php
	include "db.php";
	if(isset($_POST['company_id'])) {
		$query = $connect->prepare("SELECT * FROM company WHERE company_id = ?");
		$query->execute([$_POST['company_id']]);
		if ($query->rowCount() > 0) {
			$row = $query->fetch();
			extract($row);
?>
		<div class="card">
			<div class="card-header">
				<div class="d-flex flex-row bd-highlight mb-3">
					<div class="p-2 bd-highlight">
						<img src="uploads/<?php echo $company_logo ?>" alt="<?php echo $company_logo ?>" class="img-gluid coyLogo mb-3" width="60">
					</div>
					<div class="p-2 bd-highlight">
						<h4 class="mt-3"><?php echo strtoupper($company_name) ?></h4>
					</div>
				</div>
			</div>
			<div class="card-body">
				<p><strong>Email:</strong> <?php echo $company_email?></p>
				<p><strong>Website:</strong> <?php echo $company_website?></p>
				<p><strong>Location:</strong> <?php echo $company_location?></p>
				<p><strong>About Us:</strong> <br><?php echo nl2br($company_profile)?></p>
				<p><strong>Employees:</strong> <?php echo $company_employees?></p>
			</div>
			<div class="card-footer">
				<a href="<?php echo $id?>" class="btn btn-secondary editData"><i class="bi bi-pencil-square"></i> Edit</a>
			</div>
		</div>
<?php 
		}else{
			echo '<h4>Please add company information </h4>';
		}
	}
