<?php
	require_once('config.php');
	$searchterm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
	$output = '';
	$sql = mysqli_query($conn, "SELECT * FROM users WHERE fname LIKE '%{$searchterm}%' OR lname LIKE '%{$searchterm}%'");
	if(mysqli_num_rows($sql) > 0){
		include_once('data.php');
	}else{
		$output .= "No user found related to your search term";
	}
	echo $output;
?>