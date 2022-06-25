<?php
	include "db.php";
	if(isset($_POST['company_id'])) {
		$query = $connect->prepare("SELECT * FROM social_media WHERE company_id = ?");
		$query->execute([$_POST['company_id']]);
		if ($query->rowCount() > 0) {
			$row = $query->fetch();
			extract($row);
?>
		<div class="card">
			<div class="card-header">
				<p>Social Media Links</p>
			</div>
			<div class="card-body">
				<div class="Social d-flex justify-content-between">
					
					<a href="https://facebook.com/<?php echo $facebook?>"><i class="bi bi-facebook"></i> </a>
					<a href="https://twitter.com/<?php echo $twitter?>"><i class="bi bi-twitter"></i> </a>
					<a href="https://linkedin.com/<?php echo $linkedin?>"><i class="bi bi-linkedin"></i> </a>
					<a href="https://youtube.com/<?php echo $youtube?>" class="text-danger"><i class="bi bi-youtube"></i> </a>
				</div>
			</div>
			<div class="card-footer">
				<a href="<?php echo $id?>" class="btn btn-secondary editIcons"><i class="bi bi-pencil-square"></i> Edit</a>
			</div>
		</div>
<?php 
		}else{
			echo '<h4> Your social icons</h4>';
		}
	}
