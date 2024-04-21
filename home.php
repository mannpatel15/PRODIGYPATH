<?php include('home_check.php') ?>
<?php include('./CORE-JAVA/core_java_check.php')?>
<?php include('contactus.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODIGYPATH</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<style>


.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}


        body {
            font-family: "Montserrat", sans-serif;
}
#Fit{
    font-family: "Montserrat", sans-serif;
}

.navbar {
    font-family: "Montserrat", sans-serif;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: rgb(31, 41, 55);
}

.navbar-brand {
    position: absolute;
    left: 50%;
    margin-top: 200px;
    margin-bottom: -10px;
    transform: translateX(-50%);
    display: flex;
}

.navbar-brand img {
    max-width: 250px;
    height: auto;
}

@media (max-width: 991.98px) {
    .text-end {
    display: flex;
    flex-direction: column;
}

.text-end a {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 5px; 
}

.text-end a .btn {
    font-family: "Montserrat", sans-serif;
    color: rgb(33, 41, 54);
    width: 100%;
    transition: color 0.1s ease, background-color 0.1s ease;
    border-radius: 10px;
}
.text-end a .btn:hover{
    font-family: "Montserrat", sans-serif;
    color: rgb(33, 41, 54);
    width: 100%;
}


.text-end .btn[data-modal-type="login"] {
        color: aliceblue; 
        width: 100%;
        background-color: rgb(31, 41, 55); 
        border-color: aliceblue; 
    }

    .text-end .btn[data-modal-type="login"]:hover {
        color: rgb(31, 41, 55); 
        background-color: aliceblue; 
    }


    .navbar-collapse {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    background-color: aliceblue; 
    width: 70%; 
    z-index: 1000;
    transform: translateX(-100%);
    transition: transform 0.3s ease-in-out;
    overflow-y: auto; 
    overflow-x: hidden; 
}


    .navbar-collapse.show {
        transform: translateX(0);
    }

    .close-btn {
        
        display: none;
        position: absolute;
        font-size: 25px;
        top: 10px;
        transition: color 0.1s ease, background-color 0.1s ease;
        border-radius: 100%;
        right: 10px;
        color: rgb(31, 41, 55); 
        cursor: pointer;
    }
    .close-btn:hover {
        background-color:rgb(31, 41, 55);
        color: aliceblue;
        
    }

    .navbar-collapse.show + .close-btn {
        display: block;
    }
}

.navbar-nav .nav-link {
    color: aliceblue; 
    transition: color 0.1s ease, background-color 0.1s ease;
    padding: 12px 24px;
    margin: 5px;
    border-radius: 10px;
}

.navbar-nav .nav-link:hover {
    color: rgb(31, 41, 55);
    background-color: aliceblue;
}

.navbar-toggler-icon {
    background-color: #ffffff;
}

.nav-item {
    font-size: 20px;
}

.navbar-toggler {
    z-index: 2;
}

.dropdown-item {
    background-color: aliceblue;
    transition: color 0.1s ease, background-color 0.1s ease;
    border-radius: 10px;
}

.dropdown-item:hover {
    background-color: rgb(33, 41, 54);

    color: aliceblue;
}

.navbar-collapse.show .navbar-nav .nav-link {
    font-family: "Montserrat", sans-serif;
    color: rgb(33, 41, 54); 
    transition: color 0.1s ease, background-color 0.1s ease;
    padding: 12px 24px;
    margin: 5px;
    border-radius: 10px; 
}

.navbar-collapse.show .navbar-nav .nav-link:hover {
    color: aliceblue; 
    background-color: rgb(33, 41, 54);
}
.top-row {
    display: none; 
}

.top-row.visible {
    display: block; 
}

    .carousel-control-prev .fas,
    .carousel-control-next .fas {
        color: rgb(33, 41, 54);
        font-size: 30px;
    }
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        display: none;
    }
    /* .carousel-item {
        opacity: 0;
        transition: opacity 0.2s ease;
    }

    .carousel-item.active {
        opacity: 1;
    } */
    @keyframes slideInWavy {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(0%);
            }
        }

        .carousel-item.next {
    animation: slideInWavy 0.8s cubic-bezier(0.40, 0, 0.30, 1);
}




@media (max-width: 991.98px) {
    #fat{
        margin-left: 20px;
        max-width: 90%;
    }
    #cardio{
        max-width: 100%;
    }
    #muscle{
        max-width: 100%;
    }
    
}

@media (min-width: 991.98px) {
    #fat{
        max-width: 100%;
    }
    #cardio{
        margin-left: 94px;
        max-width: 85%;
    }
    #muscle{
        margin-left: 104px;
        max-width: 84%;
    }
    
}
.carouselExampleControls{
    display: flex;
    justify-content: center;
    align-items: center; 
}
#quote{
    font-family: "Montserrat", sans-serif;
}


@media (max-width: 600px) {
    #loginModal {
        width: 80%;
        left: 10%;
        top: 15%;
    }

    #signupModal {
        width: 80%;
        left: 10%;
        /* top: 10%; */
        overflow-y: auto; 
        max-height: 70vh; 
        min-height: 600px;
    }

    #signupModal .modal-content {
        min-height: 300px; 
    }
}

@media (max-width: 991.98px) {
    #contactContainer {
        max-height: 400px; 
        overflow-y: auto; 
    }
}


.modal-content {
    background-color: rgb(33, 41, 54);
    color: aliceblue;
}

.modal-header {
    border-bottom: none;
}

.modal-title {
    color: aliceblue;
}
.modal-body .btn-primary {
    display: block;
    margin: auto;
    width: fit-content; 
}

.modal-body {
    padding: 2rem;
}

.form-label,
.form-control {
    color: aliceblue;
}
.modal-body .form-control:hover{
    background-color: #ffffff;
    color: rgb(33, 41, 54);
}
.modal-body .form-control {
    background-color: #ffffff;
    border-color: aliceblue;
    color: rgb(31, 41, 55);
}

.form-check-label {
    color: aliceblue;
}

.btn-primary {
    color: rgb(33, 41, 54);
    background-color: #ffffff; 
    border-color: rgb(33, 41, 54);
}

.btn-primary:hover {
    background-color: rgb(33, 41, 54); 
    border-color:rgb(33, 41, 54);
}

.btn-close {
    color: aliceblue;
}

.form-check-input:hover{
    background-color: rgb(33, 41, 54);
}

.modal-title {
    margin-left: 0px auto;
    text-align: center;
    width: 100%;
}





    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: aliceblue;">
            <span class="navbar-toggler-icon" style="background-color: aliceblue;"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="top-row" style="padding: 20px;"> 
                <h1 class="text-2xl font-bold mb-4" style="color: rgb(33, 41, 54);">PRODIGYPATH</h1>
                <span class="close-btn">×</span> 
            </div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Learn 
                </a>
                <ul class="dropdown-menu" style="background-color: aliceblue;">
                <div class="drop">
                                <li><a id="coreJava" class="dropdown-item" href="./CORE-JAVA/core_java.php">Core Java</a></li>
                                <li><a id="python" class="dropdown-item" href="./PYTHON/python.php">Python</a></li>
                                <li><a id="react" class="dropdown-item" href="./REACT/react.php">React</a></li>
                            </div>
                </ul>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./aboutus.php">About us</a>
              </li>
    
            </ul>
            <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-secondary" type="submit">Search</button>
            </form> -->
            <div class="text-end">
                <!-- <a href="./login.html" style="color: rgb(33, 41, 54); text-decoration: none;"> -->
                    <button type="button" class="btn btn-outline-light me-2 trigger-modal" style="outline: none;" data-modal-type="login">Login</button>
                    <button type="button" class="btn btn-warning trigger-modal" data-modal-type="signup">Sign Up</button>

                <!-- </a> -->
                <!-- <a href="./signup.html" style="text-decoration: none;"> -->
                    <!-- <button type="button" class="btn btn-warning trigger-modal">Sign Up</button> -->
                <!-- </a> -->
            </div>
            
          </div>
          <a class="navbar-brand" href="home.php"><img src="../Images/logo-removebg.png"/></a>
        </div>
      </nav>




      <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Sign up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="home.php" style="margin-top: -15px;">
                    <?php include('errors.php'); ?>
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" name="first_name" value="<?php echo $first_name; ?>" class="form-control" id="first_name" aria-describedby="nameHelp" placeholder="Enter First Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" name="last_name" value="<?php echo $last_name; ?>" class="form-control" id="last_name" aria-describedby="nameHelp" placeholder="Enter Last Name" required>
                        </div>
                        <?php
                            $gender = isset($_POST['gender']) ? $_POST['gender'] : 'Male';
                            ?>

                            <div class="mb-3">
                                <span class="form-label">Gender</span>
                                <div class="gender-options">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" value="Male" type="radio" name="gender" id="male" <?php echo ($gender === 'Male') ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" value="Female" type="radio" name="gender" id="female" <?php echo ($gender === 'Female') ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" value="Others" type="radio" name="gender" id="other" <?php echo ($gender === 'Others') ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="other">Others</label>
                                    </div>
                                </div>
                            </div>

                
                        <div class="mb-3">
                            <label for="contact_number" class="form-label">Contact Number</label>
                            <div class="input-group">
                                <!-- <div class="input-group-prepend" style="width: 30%;">
                                    <select class="form-select" id="countryCode" name="countryCode" value="<?php echo $countryCode; ?>" >
                                        <option value="+91">+91</option>
                                        <option value="+1">+1</option>
                                        <option value="+44">+44</option>
                                        <option value="+86">+86</option>
                                        <option value="+81">+81</option>
                                    </select>
                                </div> -->
                                <input type="tel" name="contact_number" value="<?php echo $contact_number; ?>" class="form-control rounded-start" id="contact_number" placeholder="Enter Mobile No." style="width: calc(70% - 10px); margin-left: 10px;">
                            </div>
                        </div>
                        
                        
                
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" value="<?php echo $email; ?>"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email id">
                        </div>
                        
                        
                        
                        <div class="mb-3">
                            <label for="password_1" class="form-label">Password</label>
                            <input type="password" name="password_1" class="form-control" id="password_1" placeholder="Enter Password">
                        </div>
                        <div class="mb-3">
                            <label for="password_2" class="form-label">Confirm Password</label>
                            <input type="password" name="password_2" class="form-control" id="password_2" aria-describedby="confirmPasswordHelp" placeholder="Enter Confirm Password" required>
                            <small id="confirmPasswordHelp" class="form-text text-muted">Please enter your password again for confirmation.</small>
                        </div>

                        <button type="submit" name="reg_user" class="btn btn-primary" style="border: 1px solid aliceblue;" onmouseover="this.style.borderColor = 'white';" onmouseout="this.style.borderColor = 'aliceblue';">Sign Up</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Signup form -->
                    <form method="post" action="./after_login/home_after.php" style="margin-top: -33px;">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" placeholder="Enter Email Address" class="form-control" id="email" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="password_1" class="form-label">Password</label>
                            <input type="password" name="password_1" placeholder="Enter Password" class="form-control" id="password_1" required>
                            <!-- <div id="emailHelp" class="form-text mt-3" style="color: #ffffff;">Forgot password ?</div> -->
                        </div>
                        <!-- <button type="submit" class="btn btn-primary mt-4" style="border: 1px solid aliceblue;" onmouseover="this.style.borderColor = 'white';" onmouseout="this.style.borderColor = 'aliceblue';">Login</button> -->
                        <button type="submit" name="login_user" class="btn btn-primary mt-4" style="border: 1px solid aliceblue;" onmouseover="this.style.borderColor = 'white';" onmouseout="this.style.borderColor = 'aliceblue';">Login</button>
                        <!-- <a class="trigger-modal" data-modal-type="signup" style="color: aliceblue;"><div class="form-text mt-3">Don't have an excisting account?</div></a> -->
                    </form>
                </div>
            </div>  
        </div>
    </div>
</div>




    
    <main style="background-color: aliceblue;">
        <section class="bg-gray-800 text-white py-16">
            <div class="container mx-auto px-4 text-center">
                <p class="text-lg mb-8" style="margin: 90px 0 -30px;" id="quote">"Unleash your inner learner."</p>

            </div>
        </section>
        <section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold text-center mb-8" style="color:rgb(31, 41, 55);font-size: xx-large;" id="Fit">LEARN</h2>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-bottom: -60px;">
        <div class="carousel-inner">
            <div class="carousel-item" data-bs-interval="5000" id="fat">
                <a href="#">
                    <img src="../Images/core-java.png" style="height: 600px; width: 1100px;" class="d-block mx-auto" alt="Fat Loss">
                </a>
            </div>
            <div class="carousel-item" data-bs-interval="5000" id="cardio">
                <a href="#">
                    <img src="../Images/python.png" style="height: 600px; width: 1200px;" class="d-block mx-auto" alt="Cardiovascular Fitness">
                </a>
            </div>
            <div class="carousel-item active" data-bs-interval="10000" id="muscle">
                <a href="#">    
                    <img src="../Images/react.png" style="height: 600px; width: 1200px;" class="d-block mx-auto" alt="Muscle Building" autoplay loop muted>
                </a>
            </div>
            <!-- Add more carousel items as needed -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="left :-50px;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            <i class="fas fa-chevron-left"></i> <!-- Add this line for the previous arrow -->
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="right :-50px">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            <i class="fas fa-chevron-right"></i> <!-- Add this line for the next arrow -->
        </button>
    </div>
</section>

        <section class="container mx-auto py-16" style="background-color:aliceblue;">
            <h2 class="text-3xl font-bold text-center mb-8 ">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transition duration-300 ease-in-out transform hover:scale-105 font-bold py-4 px-6 rounded-lg">
                    <img src="../Images/goal_setting.png" style="height: 300px;" alt="Service 1" class="w-full h-64 object-cover object-center">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Goal Setting</h3>
                        <p class="text-gray-700">Empower your educational journey with our goal-setting provision in our EdTech web application, guiding users to define and achieve their learning objectives with precision and clarity.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transition duration-300 ease-in-out transform hover:scale-105 font-bold py-4 px-6 rounded-lg">
                    <img src="../Images/vid_lec.png" style="height: 300px" alt="Service 2" class="w-full h-64 object-cover object-center">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Video Lectures</h3>
                        <p class="text-gray-700">Immerse yourself in a world of knowledge with our extensive collection of video lectures, delivering engaging and informative content to fuel your learning journey in our EdTech web application.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transition duration-300 ease-in-out transform hover:scale-105 font-bold py-4 px-6 rounded-lg">
                    <img src="../Images/prog_track.png" style="height: 300px;" alt="Service 3" class="w-full h-64 object-cover object-center">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Individual Progress Tracking</h3>
                        <p class="text-gray-700">Unlock your potential with our EdTech platform's quizzes, where your scores are pivotal in tracking and enhancing your progress through personalized learning pathways.</p>
                    </div>
                </div>
            </div>
        </section>
        

        <section class="container mx-auto py-16" id="stats" style="background-color:aliceblue;margin-top: -30px;">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden transition duration-300 ease-in-out transform font-bold py-4 px-6 rounded-lg">
        <!-- <section id="stats" style="margin-top: -100px;"> -->
            <div class="container" style="margin-bottom: -25px;">
              <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">
                <div class="col d-flex align-items-start">
                  <div
                    class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" height="50" style="color: black; background-color: white;" fill="currentColor" class="bi bi-check2-circle"
              viewBox="0 0 16 16">
              <path
                d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
              <path
                d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
            </svg>
                  </div>
                  <div>
                    <h3 class="fs-2">Total Learners</h3>
                    <p class="text-gray-700">Join over 1000 learners who have embarked on an enriching journey with us, experiencing top-notch services that inspire growth and ignite passion for learning.</p>
                  </div>
                </div>
                
                <div class="col d-flex align-items-start">
                    <div
                    class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" style="background-color: white;" class="bi bi-stars" viewBox="0 0 16 16">
                        <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
                      </svg>
                  </div>
                  <div>
                    <h3 class="fs-2">Rating</h3>
                    <p class="text-gray-700"> Experience the excellence rated at 4.6 stars out of 5 on our platform, where quality meets satisfaction every step of the way.</p>
                  </div>
                </div>
              </div>
            </div>
          <!-- </section> -->
        </div>
    </section>
          

        
    </main>
    <footer class="bg-gray-800 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <div id="contactContainer">
            <h2 class="text-3xl font-bold mb-8">Contact Us</h2>
            <form method="post" action="home.php">
                <?php include('errors.php'); ?>
                <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-4">
                    <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Your Name" class="bg-gray-900 text-white py-2 px-4 rounded-md w-full md:w-auto" required>
                    <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Your Email" class="bg-gray-900 text-white py-2 px-4 rounded-md w-full md:w-auto" required>
                    <textarea placeholder="Your Message" name="message" value="<?php echo $message; ?>" class="bg-gray-900 text-white py-2 px-4 rounded-md w-full md:w-auto" required></textarea>
                    <button type="submit" name="contact" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full w-full md:w-auto">Send</button>
                </div>
            </form>
        </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script>

          document.addEventListener('DOMContentLoaded', function() {
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('.navbar-collapse');
            const closeBtn = document.querySelector('.close-btn');
            const topRow = document.querySelector('.top-row');

            navbarToggler.addEventListener('click', function() {
                navbarCollapse.classList.toggle('show');
                closeBtn.style.display = navbarCollapse.classList.contains('show') ? 'block' : 'none';
                topRow.classList.toggle('visible'); 
            });

            closeBtn.addEventListener('click', function() {
                navbarCollapse.classList.remove('show');
                closeBtn.style.display = 'none';
                topRow.classList.remove('visible');
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('#carouselExampleControls');
            const nextBtn = carousel.querySelector('.carousel-control-next');

            nextBtn.addEventListener('click', function() {
                const activeItem = carousel.querySelector('.carousel-item.active');

                const nextItem = activeItem.nextElementSibling;

                nextItem.classList.add('next');
            });

            // Remove the 'next' class when the animation ends
            carousel.addEventListener('animationend', function(event) {
                if (event.target.classList.contains('carousel-item')) {
                    event.target.classList.remove('next');
                }
            });
        });
        document.querySelectorAll('.trigger-modal').forEach(button => {
    button.addEventListener('click', () => {
        const modalType = button.getAttribute('data-modal-type');
        if (modalType === 'signup') {
            const modal = new bootstrap.Modal(document.querySelector('#signupModal'));
            modal.show();
        } else if (modalType === 'login') {
            const modal = new bootstrap.Modal(document.querySelector('#loginModal'));
            modal.show();
        }
    });
});

function redirectToHome() {
    // Handle form submission here if needed
    // Redirect to home page
    window.location.href = 'home.php';
    return false;
}

var modal = document.getElementById("loginModal");

        // Get the dropdown items
        var coreJavaItem = document.getElementById('coreJava');
        var pythonItem = document.getElementById('python');
        var reactItem = document.getElementById('react');

        // Add event listeners to each dropdown item
        coreJavaItem.addEventListener('click', showAlert);
        pythonItem.addEventListener('click', showAlert);
        reactItem.addEventListener('click', showAlert);

        // Function to show alert message
        function showAlert(event) {
            event.preventDefault(); // Prevent default action of following the link
            alert("Please login to continue.");
        }

        // Get the <span> element that closes the modal
        var span = document.querySelector(".modal-content .close");

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

      </script>
</body>
</html>