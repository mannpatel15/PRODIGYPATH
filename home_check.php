<?php
session_start();
// initializing variables
$first_name = "";
$last_name = "";
$gender="";
// $countryCode="";
$contact_number="";
$email="";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'edtech');
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // echo"eeeeehehehehe";
  // receive all input values from the form
  $firstName = mysqli_real_escape_string($db, $_POST['first_name']);
  $lastName = mysqli_real_escape_string($db, $_POST['last_name']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $contactNumber = mysqli_real_escape_string($db,$_POST['contact_number']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstName)) { array_push($errors, "First Name is required"); }
  if (empty($lastName)) { array_push($errors, "Last Name is required"); }
  if (empty($gender)) { array_push($errors, "Gender is required"); }
  if (empty($contactNumber)) { array_push($errors, "Contact Number is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) { array_push($errors, "The two passwords do not match"); }

  // first check the database to make sure 
  // a user does not already exist with the same email
  // echo"pagal";
  $user_check_query = "SELECT * FROM user_details WHERE first_name='$firstName' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    // echo"hello";
    if ($user['first_name'] === $firstName) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
  
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
  	$query = "INSERT INTO user_details (first_name,last_name, gender, contact_number,email,password) 
  			  VALUES('$firstName', '$lastName','$gender','$contactNumber','$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['first_name'] = $firstName;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home.php');
  }
}


// LOGIN USER
// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password_1']);

  echo"$password";

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user_details WHERE email='$email' AND password='$password'";
    // echo"$query";
  	$results = mysqli_query($db, $query);
    if (!$results) {
      // Add error handling for the query
      $error_message = mysqli_error($db);
      echo"$error_message";
      array_push($errors, "Database error: $error_message");
  }
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: home_after.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}




?>