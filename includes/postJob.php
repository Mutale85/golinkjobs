<?php
	include "db.php";
	if (isset($_POST['job_title'])) {
		$job_title = $_POST['job_title'];
		$job_category = $_POST['job_category']; 
		$application_link = $_POST['application_link'];
		$role_open_mode = $_POST['role_open_mode'];	
		$job_description = $_POST['job_description'];
		$job_type = $_POST['job_type'];
		$salary_range = $_POST['salary_range'];
		$start_date = $_POST['start_date'];
		$application_deadline = date('Y-m-d', strtotime($_POST['application_deadline'])) ;
		$estimated_period = $_POST['estimated_period'];
		$company_name = $_POST['company_name'];
		$company_location = $_POST['company_location'];
		$company_logo = $_FILES['company_logo']['name'];
		$filename = $_FILES['company_logo']['tmp_name'];
		$destination = '../uploads/'.basename($company_logo);
		move_uploaded_file($filename, $destination);
		$company_website = $_POST['company_website'];
		$email = $_POST['email'];
		
		$areas = '';
		if ($role_open_mode == '2') {
			
			foreach ($_POST['region'] as $key => $value) {
				$areas .= $value.', ';
			}
			$region = rtrim($areas, ', ');
		}else{
			
			$region = 'World Wide';
		}
		$sql = $connect->prepare("INSERT INTO `posted_jobs`(`job_title`, `job_category`, `application_link`, `role_open_mode`, `job_description`, `job_type`, `salary_range`, `start_date`, `application_deadline`, `estimated_period`, `company_name`, `email`, `company_location`, `company_logo`, `company_website`, `region`) VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?, ?)");
		$sql->execute(array($job_title, $job_category, $application_link, $role_open_mode, $job_description, $job_type, $salary_range, $start_date, $application_deadline, $estimated_period, $company_name, $email, $company_location, $company_logo, $company_website, $region));
		$last_id = $connect->lastInsertId();

		$totalAmount = $estimated_period * 2.99;
		setcookie("postedJobID", base64_encode($last_id), time()+60*60*24*7, '/');
		setcookie("userMail", base64_encode($email), time()+60*60*24*7, '/');
		setcookie("customer_name", base64_encode($company_name), time()+60*60*24*7, '/');
		setcookie("totalAmount", base64_encode(number_format($totalAmount)), time()+60*60*24*7, '/');
		
		echo "Job Submitted pending payments and verification";

	}
?>