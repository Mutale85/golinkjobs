<?php
	include "db.php";
	if (isset($_POST['JobId'])) {
		$JobId = filter_input(INPUT_POST, 'JobId', FILTER_SANITIZE_SPECIAL_CHARS);
        $company_id = filter_input(INPUT_POST, 'company_id', FILTER_SANITIZE_SPECIAL_CHARS);
        
		$check = $connect->prepare("SELECT * FROM job_views WHERE job_id = ? ");
        $check->execute([$JobId]);
        $count = $check->rowCount();
        if ( $count > 0) {
            // update counter
            $row = $check->fetch();
            $clicks = $row['clicks'];
            $update = $connect->prepare("UPDATE job_views SET clicks = clicks + 1 WHERE job_id = ? ");
            $update->execute([$JobId]);
            echo  " The Apply Button has been clicked ". $clicks . ' times';

        }else{
            $clicks = 1;
            $sql = $connect->prepare("INSERT INTO job_views (`company_id`, `job_id`, `clicks`) VALUES(?, ?, ?) ");
            $sql->execute([$company_id, $JobId, $clicks]);
            echo 'You are the first to use the Apply Button';

        }
	}
?>