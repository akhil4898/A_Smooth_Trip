<?php
 
   session_start();
   $db = mysqli_connect("localhost","root","","trip");
if($db)
{
         
      $myusername = $_POST['email'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT * FROM signin WHERE email = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row=mysqli_fetch_row($result);
	if($myusername==$row[1]&&$mypassword==$row[2])
{	

        $_SESSION['login_user'] = $myusername;
         
        header("location: cong.html");
      }else {
            
         echo( "Your Login Name or Password is invalid<br><a href='logn.html'>Retrun Home</a>");
      }
   
}
else
echo "connection lost";
?>

