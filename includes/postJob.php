<?php
	include "db.php";
	if (isset($_POST['job_title'])) {
		$job_title =  filter_input(INPUT_POST, 'job_title', FILTER_SANITIZE_SPECIAL_CHARS);
		$job_category = filter_input(INPUT_POST, 'job_category', FILTER_SANITIZE_SPECIAL_CHARS); 
		$application_link = filter_input(INPUT_POST, 'application_link', FILTER_SANITIZE_SPECIAL_CHARS);
		$role_open_mode = $_POST['role_open_mode'];	
		$job_description = $_POST['job_description'];
		$job_type = $_POST['job_type'];
		$job_nature = $_POST['job_nature'];
		$salary_range = filter_input(INPUT_POST, 'salary_range', FILTER_SANITIZE_SPECIAL_CHARS);
		$start_date = $_POST['start_date'];
		$application_deadline = date('Y-m-d', strtotime($_POST['application_deadline'])) ;
		$estimated_period = $_POST['estimated_period'];
		$company_name = filter_input(INPUT_POST, 'company_name', FILTER_SANITIZE_SPECIAL_CHARS);
		$company_location = filter_input(INPUT_POST, 'company_location', FILTER_SANITIZE_SPECIAL_CHARS);
		$company_logo = $_FILES['company_logo']['name'];
		$filename = $_FILES['company_logo']['tmp_name'];
		$destination = '../uploads/'.basename($company_logo);
		move_uploaded_file($filename, $destination);
		$company_website = filter_input(INPUT_POST, 'company_website', FILTER_SANITIZE_SPECIAL_CHARS);
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
		$sql = $connect->prepare("INSERT INTO `posted_jobs`(`job_title`, `job_category`, `application_link`, `role_open_mode`, `job_description`, `job_type`, `job_nature`, `salary_range`, `start_date`, `application_deadline`, `estimated_period`, `company_name`, `email`, `company_location`, `company_logo`, `company_website`, `region`) VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?, ?, ?)");
		$sql->execute(array($job_title, $job_category, $application_link, $role_open_mode, $job_description, $job_type, $job_nature, $salary_range, $start_date, $application_deadline, $estimated_period, $company_name, $email, $company_location, $company_logo, $company_website, $region));
		$last_id = $connect->lastInsertId();

		$totalAmount = $estimated_period * 2.99;
		setcookie("postedJobID", base64_encode($last_id), time()+60*60*24*7, '/');
		setcookie("userMail", base64_encode($email), time()+60*60*24*7, '/');
		setcookie("customer_name", base64_encode($company_name), time()+60*60*24*7, '/');
		setcookie("totalAmount", base64_encode(number_format($totalAmount)), time()+60*60*24*7, '/');
		
		echo "Job Submitted pending payments and verification";

	}
?>