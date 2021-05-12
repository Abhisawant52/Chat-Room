<?php
	include 'connection.php';
	session_start();
	unset($_SESSION["error"]);
?>
<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Jquery-->
	<script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>

	<!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
	
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	
	<link rel="shortcut icon" type="image/jpg" href="../pic/logoAA.png"/>
    <title>ChatRoom - Abhishek Sawant</title>
	
	<script >
		function ajax(){
			var req = new XMLHttpRequest();
		req.open('GET','chat.php',true);
				req.onreadystatechange = function() {
				if(req.readyState == 4 && req.status == 200){
					document.getElementById('chat').innerHTML = req.responseText;	
				}
			}
			req.send();
		}
		setInterval(function() {ajax()}, 1000);
	</script>
  </head>
  <body>
  <h1 class="tab-title"> <?php echo $_SESSION['room']; ?> Chat Room</h1>
  <?php $_SESSION["PRN_No"] = "STUD01";
  //echo  $_SESSION["PRN_No"] ;
  ?>
	<div class="ibox-Content">  
	<!--chat database-->
	<div id="chat"></div>
	<!--end msgbox-->
	</div>
	<!--send -->
	<div class="user-input" ><form method="post" id="myform" action="insert2.php">
	<input type="text" name="msg" id="msg" placeholder="Describe yourself here..." class="msg" autocomplete="off" required / >
	<button type="submit" name="submit" value="submit" id="insert" class="btn1">
	<span class="send-btn"><img src="../pic/message2.png" height="45px" width="45px"></span></button>
	</form>
	</div>
	
<p id="result"></p>
  <footer>
  <hr color="gray">
  <h6>Develop By <a href="https://github.com/abhisawant52">Abhishek Sawant.</a> 
  <span style="float:right"><a href="logout.php">LOGOUT</a></span></h6>
  
  </footer>
<script>

$('#myform').submit(function(){ return false; });

$('#insert').click(function(){
var msg = $('#msg').val();
if (msg!= "" ) {

   $.post($('#myform').attr('action'),
   $('#myform :input').serializeArray(),
function(output){   
//$('#result').html(output);
$('#msg').html = '';
document.getElementById('msg').value = '';
 }); 
}

else{
return false;
}
 });



</script>


</body>
</html>