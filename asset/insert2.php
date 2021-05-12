<?php
	include 'connection.php';	
	session_start();
	
		 $name = $_SESSION['name'];
		 $msg = $_POST['msg'];
		 $PRN = $_SESSION['cid'];
		 $room = $_SESSION['room'];
		 date_default_timezone_set('Asia/Kolkata');
		 $date = date('Y-m-d H:i:s'); 
		$stmt = $con ->prepare("INSERT INTO chat VALUES(null,'$PRN', '$name','$msg','$room','$date')");
		if($stmt -> execute()){
			echo "success";
		}else{
			echo "failure";
		}
		

	
?>