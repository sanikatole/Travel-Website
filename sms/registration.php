<?php

if(isset($_POST["registerbtn"])) 
{	

include("dbconnect.php");

$fn = $_POST["fullname"];
$dob = $_POST["dob"];
$gn = $_POST["gender"];
$eid = $_POST["email"];
$pwd = $_POST["password"];
$mob = $_POST["mobile"];
$addr = $_POST["address"];

$qry= "INSERT INTO `login`(`id`, `fullname`, `dob`, `gender`, `email`, `password`, `mobile`, `address`) VALUES (NULL,'$fn','$dob','$gn','$eid','$pwd','$mob','$addr')";

 $result= mysqli_query($connect,$qry);
 if($result)
 {
 	echo"Data Stored Successfully";
 }
 else{
 	echo"Something went wrong";
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
    <label>Fullname</label>
    <input type="text" class="form-control" id="fullname" placeholder="Enter Fullname" name="fullname">  
  </div>

  <div class="form-group">
    <label>Date of Birth</label>
    <input type="date" class="form-control" id="dob" name="dob"> 
  </div>

  <div class="form-group">
    <label>Gender</label>
    <input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender" value="Female"> Female
  </div>

  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">  
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
  </div>

  <div class="form-group">
    <label>Mobile Number</label>
    <input type="tel" class="form-control" id="mobile" placeholder="Mobile No" name="mobile">
  </div>

  <div class="form-group">
    <label>Address</label>
    <textarea id="address" placeholder="Address" class="form-control"name="address"></textarea>
  </div>

  <button type="submit" class="btn btn-primary" name="registerbtn">Register</button>
  <p> Already have an Account?<a href="login.php"> Sign In</a></p>
</form>	
</div>
</div>
</div>
</body>
</html>