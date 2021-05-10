<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head >
  <title>Issues from user</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style type="text/css">
    body  {
  background-image: url("background.jpg");
  background-color: #cccccc;
}
</style> 

  <div class="header" style="background-color:red;">
  	<h2>Digital Library taking issues from users</h2>
  </div>
   <form method="post" action="issue.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
      <span class="label success">Welcome to Digital Library Issues Register Page</span>
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Issue or Complaint</label>
  	  <input type="issue" name="issue">
 <div class="input-group">
  	  <button type="submit" class="btn" name="issue_user">Register an issue</button>   
  	</div>
  	<p><a href="index.php?logout='1'" style="color: red;"> <h3>Logout</h3></a></p>
  </form>
</body>
</html>