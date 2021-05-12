<?php
	include 'connection.php';	
	session_start();
$room = $_SESSION['room'];

	$query = "SELECT * FROM chat where room = '$room';";
	$run = $con -> query($query);
	while ($row = $run->fetch_array()) :
	if( $_SESSION['cid'] == $row['PRN_no']){
?>
		<div align="right">
		<div class="msg-box clearfix" style="text-align:left">
		<img src="../pic/user.png" alt="user" class="user-profilePhoto">
		<p style="width:max-content"><span class="user-name"><?php echo $row['name'];?></span><br><?php echo $row['message'];?>
		<br><span class="time" style="text-align:right"><?php echo $row['date'];?></span>
		</p>
		</div></div>
<?php
	}else{
?>
		<div class="msg-box clearfix">
		<img src="../pic/user.png" alt="user" class="user-profilePhoto">
		<p style="width:max-content"><span class="user-name"><?php echo $row['name'];?></span><br><?php echo $row['message'];?>
		<br><span class="time"><?php echo $row['date'];?></span>
		</p>
		</div>
		
<?php 
	}
endwhile; ?>