<?php
	include 'connection.php';	
	session_start();
	
		 $name = $_SESSION['name'];
		 $msg = $_POST['msg'];
		 $PRN = $_SESSION['cid'];
		 $room = $_SESSION['room'];
		
		$stmt = $con ->prepare("INSERT INTO chat VALUES(null,'$PRN', '$name','$msg','$room',now())");
		if($stmt -> execute()){
			echo "success";
		}else{
			echo "failure";
		}
		

	
?>