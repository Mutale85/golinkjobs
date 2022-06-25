<?php
	include "db.php";
	if(isset($_POST['data_id'])) {
		$query = $connect->prepare("SELECT * FROM company WHERE id = ?");
		$query->execute([$_POST['data_id']]);
		$row = $query->fetch();
		if ($row) {
			$data = json_encode($row);
		}
		echo $data;
	}

	if(isset($_POST['icon_id'])) {
		$query = $connect->prepare("SELECT * FROM social_media WHERE id = ?");
		$query->execute([$_POST['icon_id']]);
		$row = $query->fetch();
		if ($row) {
			$data = json_encode($row);
		}
		echo $data;
	}
?>