<?php include('server.php') ?>
<?php include('contactus.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gymophile</title>
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
                <h1 class="text-2xl font-bold mb-4" style="color: rgb(33, 41, 54);">CORE JAVA</h1>
                <span class="close-btn">×</span> 
            </div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Fitness Plans
                </a>
                <ul class="dropdown-menu" style="background-color: aliceblue;">
                    <div class="drop">
                  <li><a class="dropdown-item" href="./muscle.html">Muscle Building</a></li>

                    </div>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./findmygym.php">Find my gym</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Exercise
                </a>
                <ul class="dropdown-menu" style="background-color: aliceblue;">
                    <div class="drop">
                  <li><a class="dropdown-item" href="./chest.html">Chest</a></li>
                    </div>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./about.php">About us</a>
              </li>
    
            </ul>
            
            
          </div>
          <a class="navbar-brand" href="#"><img src="./finalimg_jpg-Photoroom.png-Photoroom.png"/></a>
        </div>
      </nav>


</div>


    
    <main style="background-color: aliceblue;">
        <section class="bg-gray-800 text-white py-16">
            <div class="container mx-auto px-4 text-center">
                <p class="text-lg mb-8" style="margin: 90px 0 -30px;" id="quote">"Unleash your inner beast."</p>

            </div>
        </section>
        <section class="bg-white-800 text-gray py-16">
            <div class="container mx-auto px-4 text-center">
                <p class="text-lg mb-8" style="margin: 90px 0 -30px;" id="quote">"Unleash your inner beast."</p>

            </div>
        </section>    
    
    </main>
    <footer class="bg-gray-800 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <div id="contactContainer">
            <h2 class="text-3xl font-bold mb-8">Contact Us</h2>
            <form method="post" action="NEW.php">
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
        
        document.querySelectorAll('.trigger-modal').forEach(button => {
    
});

function redirectToHome() {
    // Handle form submission here if needed
    // Redirect to home page
    window.location.href = '#';
    return false;
}



      </script>
</body>
</html>