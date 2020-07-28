<?php
 require 'dbconfig/config.php' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body style= "background-color:#34495e">

<div id="main-wrapper">
    <center>
    <h2 style="font-family:Helvetica, Arial, sans-serif;  font-size:30px; color:#dd4b39; "><u>Register Account Form</u></h2>
  <p>Please fill in this form to create an account.</p>
    <hr>
</center>
<br>


<form class="myform" action="newregister.php" method="post">
<label style="background-color:white"> <b>Full Name:</b></label><br>
    <input name="email" type="text" class="names" placeholder="Type your Full Name " required/>
    <br>
    
    <label style="background-color:white"> <b>Username or Email:</b></label><br>
    <input name="username" type="text" class="inputvalues" placeholder="Type your Username or Email" required/><br>
    
    <label style="background-color:white"><b> Password:</b></label><br>
    <input name="password" type="password" class="inputvalues" placeholder="Type your Password" required/><br>
   
    
    <label style="background-color:white"><b>Confirm Password:</b></label><br>
    <input name="cpassword"type="password" class="inputvalues" placeholder="Type your Confirm Password" required/>
    <label style="background-color:white">
    <input type="checkbox" checked="checked">
   By creating an account you agree to our <a href="#">Terms & Privacy</a>.
   
</label>
    <input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/>
    <br>
    
    <center>
    <label> Or</label>
</center>
<div class="col s12 m6 offset-m3 center-align">
    <a class="oauth-container btn darken-4 white black-text" href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin" style="text-transform:none">
        <div class="left">
            <img width="20px" style="margin-top:7px; margin-right:8px" alt="Google sign-in" 
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
        </div>
        Login with Google
    </a>
</div>

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <br>
	<div class="col">
        <a href="https://www.facebook.com/" class="fb btn" style="background-color:#3B5998;">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
        </a>
        <a href="https://twitter.com/" class="twitter btn" style="background-color:#55ACEE;">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
       
      </div>
	   <div class="container signin">
   <center> <p>Already have an account? <a href="index.php">Login in</a>.</p></center>
  </div>
    
</form>   
<?php
if(isset($_POST['submit_btn']))
{
    //echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
if($password==$cpassword)
{
    $query= "select * from aaron WHERE username='$username'";
    $query_run = mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
    {
        //there is already a user with the same username
        echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
        }
        else
        {
            $query= "insert into aaron values('$username','$password')";
            $query_run = mysqli_query($con,$query);

            if($query_run)
            {
                echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';

            }
            else{
                echo '<script type="text/javascript"> alert("Error!") </script>';

            }
        }
}
else{
    echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';
}
}
?>
</div>
</body>
</html>