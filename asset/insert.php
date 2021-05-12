<?php
include 'connection.php';
session_start();

if(isset($_POST['submit'])){
$errors=array();
$email = $_POST['mailid'];
$pass = $_POST['subject'];
$room = $_POST["room"] ;

$stmt= $db->query("select * from login where email='$email'  ");
while($row=$stmt->fetch()){
 	$str_pass=$row['password'];
	$pass_check=password_verify($pass,$str_pass);
	if($pass_check)	{ 
		$custid=$row['id'];
		$name=$row['name'];
	}
}
$stmt->execute();
if(isset($custid)==1){
 $_SESSION['cid']=$custid;
 $_SESSION['name']=$name;
 $_SESSION['room']=$room;
header('location:home.php');
exit();
 }
 else{
		array_push($errors,"Invalid email and password");
 }
if(count($errors) > 0){
	foreach($errors as $error){
	$_SESSION["error"] = $error; 
	}
}

header('location:../index.php');
}
if(isset($_POST['submitRegister'])){
$errors=array();
$email = $_POST['mailid1'];
$pass = $_POST['subject1'];
$name = $_POST["name1"] ;


$query = $db ->prepare( "select email from login where email='$email'  " );
$query->execute();

if( $query-> rowCount() > 0 ) { # If rows are found for query
    array_push($errors,"Email is Already registerd !! try with Other email.");
}
else {
	
 $hash=password_hash($pass,PASSWORD_BCRYPT);
$stmt = $db ->prepare("INSERT INTO login VALUES(null,'$name', '$email','$hash')");
		if($stmt -> execute()){
			array_push($errors,"Successfully Registerd.");
		}else{
			echo "failure";
		}
}
if(count($errors) > 0){
	foreach($errors as $error){
	$_SESSION["error"] = $error; 
	}
}
header('location:../index.php');

}

?>