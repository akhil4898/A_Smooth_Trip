<?php

// Create connection
$conn = mysqli_connect("localhost","root","","trip");
$email= $_POST['email'];
$phone= $_POST['phone'];
$pickup= $_POST['pickup'];
$drop= $_POST['drop'];
$date= $_POST['date'];
$time= $_POST['time'];
// Check connection

if (empty($email) && empty($phone) && empty($pickup) && empty($drop) && empty($date) && empty($time))
{
    die('Could not connect: ' . mysqli_error());
}
else
{
$sql = "INSERT INTO booking VALUES ('$email', '$phone','$pickup', '$drop', '$date', '$time')";

if ($re = mysqli_query($conn,$sql)) 
{
	echo "<div align='center'>Your Cab Is Booking Successfully !!!
<a href='index.html'>Home</a>	
</div>";
  } 
else 
{
    echo "Error: ";
}
}
?> 
