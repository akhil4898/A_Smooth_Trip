<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="sgnup.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

    <style>
    #msg {
    visibility: hidden;
    min-width: 250px;
    background-color:yellow;
    color: #000;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    right: 30%;
    top: 30px;
    font-size: 17px;
	margin-right:30px;
}

#msg.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {top: 0; opacity: 0;} 
    to {top: 30px; opacity: 1;}
}

@keyframes fadein {
    from {top: 0; opacity: 0;}
    to {top: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {top: 30px; opacity: 1;} 
    to {top: 0; opacity: 0;}
}

@keyframes fadeout {
    from {top: 30px; opacity: 1;}
    to {top: 0; opacity: 0;}
}
    </style>
</head>

<body>
<div class="signup">
    <form action="signup.php" method="post">
    <h2 style="color: #fff;">Sign Up</h2>
    <input type="text" name="username" placeholder="First name "><br><br>
    <input type="text" name="lastname" placeholder="Last name"><br><br>
    <input type="password" name="pass" placeholder="Password"><br><br>    
    <input type="password" name="cpass" placeholder="Confirm Password"><br><br>   
    <input type="text" name="email1" placeholder="Email address"><br><br>  
    <input type="submit" class="btn btn-default" name= login value="Sign up"><br><br>
        <div id="msg">Congratulations You Sign Up successfully!!</div>
        <script>
function myFunction() {
    var x = document.getElementById("msg");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
        Already have account?<a href="logn.html" style="text-decoration: none; font-family: 'Play', sans-serif; color: yellow;">&nbsp;Log In</a>
    </form>
    
    </div>
</script>
</body>

</html>
 
