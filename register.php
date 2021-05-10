<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head >
  <title>Registration to Digital Library&reg;</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style type="text/css">
    body  {
  background-image: url("back8.jpg");
  background-color: #cccccc;
}
</style> 

  <div class="header" style="background-color:blue">
  	<h2>Digital Library&reg;</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
      <span class="label success">Welcome to Digital Library Register Page</span>

    <div class="input-group">
      <label>Full Name</label>
      <input type="text" name="fullname" value="<?php echo $email; ?>">
    </div>

  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>

    <div class="input-group">
      <label>Age</label>
      <input type="text" name="age" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Gender</label>
      <input type="text" name="gender" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Phone Number</label>
      <input type="text" name="phno" value="<?php echo $email; ?>">
    </div>

  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
    <h4>If your having any issues <a href="issue.php">Contact Us</a></h4>
  </form>
</body>
</html>