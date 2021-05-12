<?php
	session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Jquery-->
	<script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>

    <!-- Bootstrap CSS -->
      
	<script type="text/javascript" src="asset/login.js"></script> 

    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="shortcut icon" type="image/jpg" href="pic/logoAA.png"/>
    <title>ChatRoom -Abhisawant</title>
  </head>
  <body>
    <div class="tab">
    <div class="Tab1 col-md-6">
    <h1>Social-Media<img src="pic/login.png" alt="gif" height="120px" width="150px"></h1>
    <h4><br>We helps you connect and share with the people in your life.</h4><br>
    </div>
    <div class="col-md-6">
	<div class="flip-container">
	<div class="flipper" id="flipper">
	<div class="front">
	<h3 class="title">Login</h3>
	
<form name="myForm2" onsubmit="return LoginvalidateForm()" action="asset/insert.php"  method="post">
	<input type="email" class="form-control" placeholder="Email Address" name="mailid" id="mailid"  />
    <p id="p1"></p>
    <input type="password" class="form-control" placeholder="Password" name="subject" id="subject" /> 
    <p id="p2"></p>
	<label for="cars">Choose A Chat Room :</label>
  <select name="room" id="room" >
    <option value="">None</option>
    <option value="Ajagar Gang">Ajagar Gang</option>
    <option value="Java">Java</option>
    <option value="College katta">College katta</option>
    <option value="HTML/CSS">HTML/CSS</option>
  </select> <br>
  <p id="p3"></p><!--end drop down-->
    <button type="submit" name="submit" value="submit" class="B1 btn btn-primary"><b>Log In</b></button>
    
	<span class="error"><?php 
	if(isset($_SESSION["error"])){?>
	<?php echo $_SESSION["error"]; }?></span>
</form>
		<a class="flipbutton"  id="loginButton">Create my account →</a>
	</div>
	
	<div class="back">
	<h3 class="title">Register</h3>
	<form id="myform"onsubmit="return RegistervalidateForm()" action="asset/insert.php"  method="post">

	<input type="Text" class="form-control" placeholder="Name"  name="name1" id="name1" />
    <p id="p4"></p>
	<input type="text" class="form-control" placeholder="Email Address"  name="mailid1" id="mailid1" />
    <p id="p5"></p>
    <input type="password" class="form-control" placeholder="Password"  name="subject1" id="subject1" /> 
    <p id="p6"></p>
	<input type="password" class="form-control" placeholder="Confirem Password" name="subject2"  id="subject2" /> 
    <p id="p7"></p>
       <button type="submit" id="insert2" name="submitRegister" value="submit" class="B1 btn btn-primary"><b>Register</b></button>
    
    <p id="p8"></p></form>
	<a class="flipbutton" id="registerButton"><h6>Login →</h6></a>
	</div>
	
	</div>
    </div>
	<!----->
    </div>
    </div>
    
   <footer>Abhishek Sawant<span style='font-size:18px;'>&#169;</span>2021</footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

	
<script>
var loginButton = document.getElementById("loginButton");
var registerButton = document.getElementById("registerButton");

loginButton.onclick = function(){
	document.querySelector("#flipper").classList.toggle("flip");
}

registerButton.onclick = function(){
	document.querySelector("#flipper").classList.toggle("flip");
}


</script>
  </body>
</html>
