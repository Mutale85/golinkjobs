<?php
	function getUserIpAddr(){
	    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
	        //ip from share internet
	        $ip = $_SERVER['HTTP_CLIENT_IP'];
	    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
	        //ip pass from proxy
	        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    }else{
	        $ip = $_SERVER['REMOTE_ADDR'];
	    }
	    return $ip;
	}

	function time_ago_check($time){
		// date_default_timezone_set("Africa/Lusaka");
		$time_ago 	= strtotime($time);
		$current_time = time();
		$time_difference = $current_time - $time_ago;
		$seconds = $time_difference;
		//lets make tround thes into actual time.
		$minutes 	= round($seconds / 60);
		$hours		= round($seconds / 3600);
		$days 		= round($seconds / 86400);
		$weeks   	= round($seconds / 604800); // 7*24*60*60;  
		$months  	= round($seconds / 2629440); //((365+365+365+365+366)/5/12)*24*60*60  
		$years   	= round($seconds / 31553280); //(365+365+365+365+366)/5 * 24 * 60 * 60

		if ($seconds <= 60) {
			return "$seconds Seconds Ago";
		}else if ($minutes <= 60) {

			if ($minutes == 1) {
				return "1 minute Ago";
			}else{
				return "$minutes minutes ago";
			}
			
		}else if ($hours <= 24) {
			if ($hours == 1) {
				return "1 hour ago";
			}else{
				return "$hours hrs ago";
			}
		}else if ($days <= 7) {
			if ($days == 1) {
				return "1 day ago";
			}else{
				return "$days days ago";
			}
		}else if ($weeks < 7) {
			if ($weeks == 1) {
			
				return "1 week ago";
			}else{
				return "$weeks Weeks ago";
			}
		}else if ($months <= 12) {
			if ($months == 1) {
				return "1 month ago";
			}else{
				return "$months Months ago";
			}
		}else {
			if ($years == 1) {
				return "One year ago";
			}else{
				return "$years years ago";
			}
		}
	}

	function get_gravatar( $email, $s = 80, $d = 'mp', $r = 'g', $img = false, $atts = array() ) {
		$url = 'https://www.gravatar.com/avatar/';
		$url .= md5( strtolower( trim( $email ) ) );
		$url .= "?s=$s&d=$d&r=$r";
		if ( $img ) {
			$url = '<img src="' . $url . '"';
			foreach ( $atts as $key => $val )
				$url .= ' ' . $key . '="' . $val . '"';
			$url .= ' />';
		}
		return $url;
	}
	
	function getCompanyLogo($connect, $company_id){
		$output = '';
		$query = $connect->prepare("SELECT * FROM company WHERE company_id = ?");
		$query->execute([$company_id]);
		$row = $query->fetch();
		if($row){
			extract($row);
		
			$output = '<img src="uploads/'.$company_logo.'" alt="'.$company_logo.'" class="img-gluid coyLogo" width="60">';
		}
		return $output;
	}

	function getCompanyName($connect, $company_id){
		$output = '';
		$query = $connect->prepare("SELECT * FROM company WHERE company_id = ?");
		$query->execute([$company_id]);
		$row = $query->fetch();
		if($row){
			extract($row);
			$output = $company_name;
		}
		return $output;
	}

	function getUserName($connect, $company_id){
		$output = '';
		$query = $connect->prepare("SELECT * FROM register WHERE parent_id = ?");
		$query->execute([$company_id]);
		$row = $query->fetch();
		extract($row);
		return $username;
	}

	function countJobClick($connect, $company_id, $job_id){
		$output = '';
		$check = $connect->prepare("SELECT * FROM job_views WHERE company_id = ? AND job_id = ? ");
        $check->execute([$company_id, $job_id]);
        if ($check->rowCount() > 0) {
        	$row = $check->fetch();
        	if ($row) {
        		$output = $row['clicks'];
        	}
        }else{
        	$output = 0;
        }
        return $output;
	}
?>