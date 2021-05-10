<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login into Digital Library&reg;</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style type="text/css">
    body  {
  background-image: url("back6.jpg");
  background-color: #cccccc;
}
</style> 
  <div class="header" style="background-color:blue">
  	<h2>Digital Library&reg;</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
      <span class="label success">Welcome to Digital Library Login Page</span>
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
    <h4>If your facing any issues <a href="issue.php">Contact Us</a></h4> 
  </form>
</body>
</html>