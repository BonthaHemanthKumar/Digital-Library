<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form

  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);

  $age = mysqli_real_escape_string($db, $_POST['age']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $phno = mysqli_real_escape_string($db, $_POST['phno']);

  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
    if (empty($fullname)) { array_push($errors, "Name is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($age)) { array_push($errors, "Age is required"); }
    if (empty($gender)) { array_push($errors, "Gender is required"); }
    if (empty($phno)) { array_push($errors, "Phone Number is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (fullname, username, email, age, gender, phno, password)
  			  VALUES('$fullname','$username', '$email','$age','$gender','$phno', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

//issues section
$db = mysqli_connect('localhost', 'root', '', 'registration');
if (isset($_POST['issue_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $issue = mysqli_real_escape_string($db, $_POST['issue']);

if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM issues WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
$result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

   if ($user) { // if user NOT exists
    if ($user['username'] !== $username) {
      array_push($errors, "Username NOT exists");
    }

    if ($user['email'] !== $email) {
      array_push($errors, "email NOT exists");
    }
  }
   // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO issues (username, email, issue)
          VALUES('$username', '$email', '$issue')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are ISSUE or COMPLAINT Registred sucefully";
    header('location: login.php');
  }
}



// ...
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }
  }
  else  {
      array_push($errors, "Wrong username/password combination. Please enter again");
    }
  }



//Logout users
if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  header('location: login.php');
}
?>

