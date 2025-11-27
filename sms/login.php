<?php

if(isset($_POST["loginbtn"]))
{
 include("dbconnect.php"); 
$eid = $_POST["email"];
$pwd = $_POST["password"];

$qry = "SELECT * FROM `register` WHERE email='$eid' AND password='$pwd'";

$result = mysqli_query($connect,$qry);

$row = mysqli_num_rows($result);

 

if($row>0)
{
  header("location:user.php");
}else{
  echo "Login failed";
}

}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/css/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.61.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
     <div class="row">
          <div class="col-md-5 mx-auto">	
<form method="post">

  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">  
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
  </div>
 
  <button type="submit" class="btn btn-success" name="loginbtn">Login</button>
  <p> Don't Have an Account? <a href="registration.php"> Sign up</a></p>
</form>	
</div>
</div>
</div>
</body>
</html>