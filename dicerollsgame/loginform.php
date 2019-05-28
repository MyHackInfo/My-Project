<?php
session_start();
include("connection.php");
extract($_REQUEST);
//$user="admin";
//$pass ="pass";
//$query = mysqli_query($conn,"select * from user") or die("query not perform");
//$access=mysqli_fetch_array($query) or die("dont access the value");

// test all user search
$query = mysqli_query($conn,"SELECT * FROM `user` WHERE username='$username' and password='$password' ") or die("query not perform");
$c=mysqli_num_rows($query);


if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
	$c_user = $_COOKIE['username'];
	$c_pass = $_COOKIE['password'];

}
//
//    

if(isset($Submit))
{
	//if($access['username'] == $username && $access['password'] == $password)
    if($c>0)
	{

		if(isset($checkbox))
		{
			setcookie("username", $username,time()+60);
			setcookie("password",$password,time()+60);
		}
		$_SESSION['name']=$username;
		header("location: rolling_game_main.php");
		exit();
	
	}else
	{ 
		echo "Invalid Username / Password";
	}
}

if(!empty($_GET['logout']))
{
	session_unset();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Log In</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
   body{
		
		background: #63738a;
		font-family: 'Roboto', sans-serif;
	}
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
        
    }
    .form-control:focus{
		border-color: #5cb85c;
	}
    a{color: white;}
    .pull-right{color: black;}
    
	.login-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.login-form h2:before, .login-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.login-form h2:before{
		left: 0;
	}
	.login-form h2:after{
		right: 0;
	}
</style>
</head>
<body>
<div class="login-form">
    <form action="#" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" name="username" class="form-control" id="username"  placeholder="Username" required="required" >
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" id="password" 
             placeholder="Password" required="required" >
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success btn-block" name="Submit" value="Log In">
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input name="checkbox" type="checkbox" id="checkbox"> 
            Remember me</label>
            <a href="forget_password.php" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="registerform.php">Create an Account</a></p>
</div>
</body>
</html>                                		                            