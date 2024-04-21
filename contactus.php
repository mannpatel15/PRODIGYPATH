<?php
session_start();
// initializing variables
$name = "";
$email = "";
$message="";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'edtech');
// REGISTER USER
if (isset($_POST['contact'])) {
  // echo"eeeeehehehehe";
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $message = mysqli_real_escape_string($db, $_POST['message']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "First Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($message)) { array_push($errors, "Message is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same email
//   echo"pagal";
  $user_check_query = "SELECT * FROM contact WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO contact (name,email, message) 
  			  VALUES('$name', '$email','$message')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "Mesaage sent";
  	// header('location: NEW.php');
  }
}


// LOGIN USER
// LOGIN USE



?>