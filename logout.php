<?php
		include("includes/db.php");
		unset($_SESSION['user_id']);
		unset($_SESSION['user_email_job_portal']);
		setcookie("userPortalLogin", "", time() - 3600, '/');
		if(session_destroy()) {
        	header("location:./");
        }

	?>