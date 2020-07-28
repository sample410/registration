<?php
session_start();
require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style= "background-color:#34495e">

<div id="main-wrapper">
    <center>
    <h2 style="font-family:Helvetica, Arial, sans-serif; color:#34495e; font-size:20px;"><u>LOGIN PAGE</u> </h2>
    <img src="imgs\newone.jpg" class="avatar" style="height:100px; width:275px;"/>
</center>

<form class="myform" action="newindex.php" method="post">
    <label style="color:grey;"> <b>Username:</b></label><br>
    <input name="username" type="text" class="inputvalues" placeholder="Type your Username" required/><br>
	
    <br>
    <label style="color:grey;"><b> Password:</b></label><br>
    <input name="password" type="password" class="inputvalues" placeholder="Type your Password" required/><br>
    <a href="newregister.php"><label style="color:#40739e"><b><u> forget password?</u></b></label></a>
    <br>
    <br>
	<label>
    <input type="checkbox" checked="checked">
    Remember me</label>
    <br>
    <br>

    <input name="login" type="submit" id="login_btn" value="Login"/>
   <a href="newregister.php"> <input type="button" id="register_btn" value="Register"/><br></a>
   <br>
    <br>
    
</form>   
<?php
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query="select * from aaron WHERE username='$username' AND password='$password'";

    $query_run = mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
    {
        //valid
        $_SESSION['username']= $username;
        header('location:newhome.php');

    }
    else{
        //invalid
        echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
    }
}
?>
<center><p style="padding-left:25px; ">Powered by <a href="https://aaron592.github.io/thoppil/" style="color:red;"><u> Aaron Thomas</u></a></p><center>
</div>
</body>
</html>
