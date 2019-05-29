<?php
session_start();
$username = "";
$email    = "";
$errors = array(); 

//hiqe prej komenti cila tvyn
//Te arita:
//$db = mysqli_connect("localhost","root","","login") or die ("could not connect to database");
//Te aurora: 
$db = mysqli_connect("localhost","root","pwdpwd","login") or die("could not connect to database");

//te ariani: 
//$db = mysqli_connect("localhost","root","nihon123","login") or die("could not connect to database");


if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['user']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phonenum']);
  $password_1 = mysqli_real_escape_string($db, $_POST['pass']);
  $password_2 = mysqli_real_escape_string($db, $_POST['pass1']);
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { 
    array_push($errors, "Email is required"); 
  }else{
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
       array_push($errors,  "Invalid email format");
    }
  }
  if (empty($phone)) { array_push($errors, "Phone number is required"); }
  if (empty($password_1)) { 
    array_push($errors, "Password is required"); 
  }else{
    if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $password_1)) {
      array_push($errors, "the password does not meet the requirements!");
    }else if ($password_1 != $password_2) {
      array_push($errors, "The two passwords do not match");
    }
  }

  $result = mysqli_query($db, "select * from users where username = '$username' or email = '$email'")
                  or die("Failed to query database " .mysqli_error($db));
  $user = mysqli_fetch_array($result);
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, upassword) 
  			  VALUES('$username', '$email', '$password')";//qetu password-> upassword
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: dashboard.php');
  }
}

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
    $query = "SELECT * FROM users WHERE username='$username' AND upassword='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: dashboard.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>