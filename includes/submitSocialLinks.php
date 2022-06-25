<?php
	include "db.php";
	if(!empty($_POST['iconID'])){
		extract($_POST);
		$update = $connect->prepare("UPDATE social_media SET facebook = ?, twitter = ?, linkedin = ?, youtube = ? WHERE id = ? ");
		$ex = $update->execute([$facebook, $twitter, $linkedin, $youtube, $iconID]);
		if($ex){
			echo " Socia Links Updated";
		}
	}else{
	
		$company_id = $_SESSION['user_id'];
		$facebook =  filter_input(INPUT_POST, 'facebook', FILTER_SANITIZE_SPECIAL_CHARS);
		$twitter = filter_input(INPUT_POST, 'twitter', FILTER_SANITIZE_SPECIAL_CHARS); 
		$youtube = filter_input(INPUT_POST, 'youtube', FILTER_SANITIZE_SPECIAL_CHARS);
		$linkedin = filter_input(INPUT_POST, 'linkedin', FILTER_SANITIZE_SPECIAL_CHARS);
		
		$sql = $connect->prepare("INSERT INTO `social_media`( `company_id`, `facebook`, `twitter`, `linkedin`, `youtube`) VALUES (?, ?, ?, ?, ?)");
		$ex = $sql->execute([$company_id, $facebook, $twitter, $linkedin, $youtube]);
		if($ex){
			echo " Socia Links Posted";
		}
	}
?>