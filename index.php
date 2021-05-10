<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>User registration system using PHP and MySQL</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
  </head>
  <style type="text/css">
    body  {
  background-image: url("back13.jpg");
  background-color: #cccccc;
}
  </style>
    <div class="header" style="background-color:red;">
      <h2>Home page</h2>
    </div>
    <div class="content" style="background-color:yellow";>
      <?php if(isset($_SESSION['success'])): ?>
        <div class="error success">
          <h3>
          <?php echo $_SESSION['success'];
          unset($_SESSION['success']);
          ?>
        </h3>
        </div>
      <?php endif ?>
      <?php if(isset($_SESSION["username"])): ?>
        <h3>Welcome <strong><?php echo $_SESSION['username'];?></strong></h3>
        <h4>You are sucessfully loged in</h4>
        <h4>Thankyou for your support</h4>
        
        <h3>To see available Books <a href="book.html">Click Here </a></h3>
        <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
        <h4>If your facing any issues <a href="issue.php">Contact Us</a></h4>
      <?php endif ?>


    </div>

  </body>
</html>