<?php
	include "db.php";
	if (!empty($_POST['dataID'])) {
		extract($_POST);
		$query = $connect->prepare("SELECT * FROM `company` WHERE company_id = ? ");
        $query->execute([$dataID]);
      	$row = $query->fetch();
      	if($row){
      		$logo = $row['company_logo'];
        }
	    if ($_FILES['company_logo']['name'] == "") {
			$company_logo = $logo;
		}else{
			$company_logo = $_FILES['company_logo']['name'];
			$filename = $_FILES['company_logo']['tmp_name'];
			$destination = '../uploads/'.basename($company_logo);
			move_uploaded_file($filename, $destination);
		}

		$update = $connect->prepare("UPDATE company SET company_name = ?, company_email = ?, company_employees = ?, company_website = ?, company_location = ?, company_logo = ?, company_profile = ? WHERE id = ? ");
		$ex= $update->execute([$company_name, $email, $company_employees, $company_website, $company_location, $company_logo, $company_profile, $dataID]);
		if($ex){
			echo $company_name." Profile Updated";
		}
	}else{
		$company_id = $_SESSION['user_id'];
		$dataID = filter_input(INPUT_POST, 'dataID', FILTER_SANITIZE_SPECIAL_CHARS);
		$company_name =  filter_input(INPUT_POST, 'company_name', FILTER_SANITIZE_SPECIAL_CHARS);
		$company_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		$company_employees = filter_input(INPUT_POST, 'company_employees', FILTER_SANITIZE_SPECIAL_CHARS);
		$company_location = filter_input(INPUT_POST, 'company_location', FILTER_SANITIZE_SPECIAL_CHARS);
		$company_profile = filter_input(INPUT_POST, 'company_profile', FILTER_SANITIZE_SPECIAL_CHARS);
		$company_website = filter_input(INPUT_POST, 'company_website', FILTER_SANITIZE_SPECIAL_CHARS);
		$company_logo = $_FILES['company_logo']['name'];
		$filename = $_FILES['company_logo']['tmp_name'];
		$destination = '../uploads/'.basename($company_logo);
		move_uploaded_file($filename, $destination);

		$sql = $connect->prepare("INSERT INTO `company`( `company_id`, `company_name`, `company_email`, `company_employees`, `company_website`, `company_location`, `company_logo`, `company_profile`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		$ex = $sql->execute([$company_id, $company_name, $company_email, $company_employees, $company_website, $company_location, $company_logo, $company_profile]);
		if($ex){
			echo $company_name." Profile Posted";
		}
		
	}
?>