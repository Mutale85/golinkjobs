<?php
	include "db.php";
	if (isset($_POST['job_title'])) {
		$company_id = $_SESSION['user_id'];
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
		$areas = '';
		if ($role_open_mode == '2') {
			
			foreach ($_POST['region'] as $key => $value) {
				$areas .= $value.', ';
			}
			$region = rtrim($areas, ', ');
		}else{
			
			$region = 'World Wide';
		}
		$sql = $connect->prepare("INSERT INTO `posted_jobs`(`company_id`, `job_title`, `job_category`, `application_link`, `role_open_mode`, `job_description`, `job_type`, `job_nature`, `salary_range`, `start_date`, `application_deadline`, `estimated_period`, `region`) VALUES (?, ? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?)");
		$sql->execute([$company_id, $job_title, $job_category, $application_link, $role_open_mode, $job_description, $job_type, $job_nature, $salary_range, $start_date, $application_deadline, $estimated_period,$region]);
		$last_id = $connect->lastInsertId();

		$update = $connect->prepare("UPDATE posted_jobs SET posted = 1 WHERE id = ? AND company_id = ?");
		$update->execute([$last_id, $company_id]);

		$totalAmount = $estimated_period * 3.99;
		setcookie("postedJobID", base64_encode($last_id), time()+60*60*24*7, '/');
		setcookie("userMail", base64_encode($_SESSION['user_email_job_portal']), time()+60*60*24*7, '/');
		setcookie("customer_name", base64_encode($_SESSION['username']), time()+60*60*24*7, '/');
		setcookie("totalAmount", base64_encode(number_format($totalAmount)), time()+60*60*24*7, '/');
		
		// echo "Job Submitted pending payments and verification";
		echo "Jobs Posted Successfully";

	}
?>