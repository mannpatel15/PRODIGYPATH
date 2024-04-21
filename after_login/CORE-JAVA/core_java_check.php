<?php
session_start();
$email = "";
$hoursPerDay = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'edtech');
// REGISTER USER
if (isset($_POST['gen_user'])) {
    // receive all input values from the form
    $hoursPerDay = mysqli_real_escape_string($db, $_POST['hoursPerDay']);
    
    // Get the email of the logged-in user
    $email = $_SESSION['email'];

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($hoursPerDay)) { array_push($errors, "Hours Per Day is required"); }


    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $query = "INSERT INTO sub_pref1 (email, hoursPerDay) 
                    VALUES('$email', '$hoursPerDay')";
        mysqli_query($db, $query);
        $_SESSION['success'] = "You are now logged in";
        header('location: core_java.php');
    }
}
?>
