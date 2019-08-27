<?php

// Create connection
$conn = mysqli_connect("localhost","root","","trip");
$fname= $_POST['username'];
$lname= $_POST['lastname'];
$pass= $_POST['pass'];
$conpass= $_POST['cpass'];
$email= $_POST['email1'];
// Check connection

if (empty($fname) && empty($lname) && empty($pass) && empty(conpass) && empty($email))
{
    die('Could not connect: ' . mysqli_error());
}
else
{
$sql = "INSERT INTO signin VALUES ('$fname', '$email','$pass', '$lname')";

if ($re = mysqli_query($conn,$sql)) 
{
	echo "<div align='center'>Insert Data Successfully
<a href='../index.php'>Home</a>	
</div>";
  } 
else 
{
    echo "Error: ";
}
}
?> 
