<?php
require_once('connect.php');
if(isset($_POST)&!empty($_POST)){
$fname=mysqli_real_escape_string($connection,$_POST['fname']);
$lname=mysqli_real_escape_string($connection,$_POST['lname']);
$email=mysqli_real_escape_string($connection,$_POST['email']);
$createsql="INSERT INTO crud (firstname,lastname,email) VALUES ('$fname','$lname','$email')";
$res=mysqli_query($connection,$createsql);
if($res)
{
  echo "Success";
}
else
{
  echo "Failed";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD Application</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<form method="post"  style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="First Name" name="fname" required><br><br>


    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Last Name" name="lname" required><br><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br><br>


    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
      <a href="view.php"><b>View Data</b></a>
    </div>
  </div>
</form>
	</div>
</div>
</body>
</html>