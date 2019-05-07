<?php
extract($_REQUEST);
$user="admin";
$pass ="pass";

if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
	$c_user = $_COOKIE['username'];
	$c_pass = $_COOKIE['password'];

}

if(isset($Submit)){
	if($user == $username && $pass == $password){
		echo "Welcome $username";
		if(isset($checkbox)){
			setcookie("username", $username,time()+1*24*60*60);
			setcookie("password",$password,time()+1*24*60*60);
		}
	
	}else{ echo "Invalid Username / Password";}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Form</title>
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
    
</style>
</head>
<body>
<div class="login-form">
    <form action="#" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input name="username" type="text" class="form-control" id="username"  placeholder="Username" required="required" value="<?php echo $c_user;?>">
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" id="password" 
             placeholder="Password" required="required" value="<?php echo $c_pass;?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block" name="Submit">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input name="checkbox" type="checkbox" id="checkbox"> 
            Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="registerform.php">Create an Account</a></p>
</div>
</body>
</html>                                		                            