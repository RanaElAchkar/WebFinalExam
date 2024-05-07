<!DOCTYPE html>
<?php

    
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Lugx Gaming Shop HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="../assets/images/logo.png" alt="" style="width: 158px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        
                    </nav>
                </div>
            </div>
        </div>
      </header>
      <!-- ***** Header Area End ***** -->



    <div class="main-banner">
        <h1 style="text-align: center; padding-bottom: 30px;"><span>Welcome..! Log In here</span></h1>
        <div class="container">
            <div style="text-align: center;">
                <div class="Form">
                    <h2 style="padding-top: 40px;padding-bottom: 40px;">Log In</h2>
                    <form name="LogInForm" id="login" action="login.php" method="POST">

                        <div class="frm-element">
                            <div class="frm-label">
                                <label for="username">Username: </label>
                            </div>
                            <input type="text" name="username" id="username"class="textfield">
                        </div>
                        <br>
                        <br>
                        <div class="frm-element">
                            <div class="frm-label">
                                <label for="password">Password: </label>
                            </div>
                            <input type="password" name="password" id="password" class="textfield">
                        </div>
                        <br>
                        <br>
                        <input type="button" name="signup" value="Log In" class="Button" style="margin-right: 30px;"
                            onclick="LogInFrm()">
                        <input type="button" name="cancel" value="Cancel" class="Button" style="margin-left: 30px;"
                            onclick="ResetFrm()">
                        <br>
                        <br>


                        <h3 style="padding-top: 40px;padding-bottom: 40px;">Create an account? <a href="SignUp.php">Sign up here</a></h3>
                </div>
            </div>

            </form>




          </div>
    </div>


    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2048 LUGX Gaming Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow"
                        href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/isotope.min.js"></script>
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/counter.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script>
      function LogInFrm() {
          let username = document.getElementById("username").value;
          console.log(username);
          let password = document.getElementById("password").value;
          console.log(password);
          if ((username == "") || (password == "")) {
              alert("Please fill in the username and password");
          }
          else {
              document.getElementById("login").submit();

          }


      }
      function ResetFrm() {
          document.getElementById("username").value = "";
          document.getElementById("password").value = "";
          alert("clear");
      }

  </script>

</body>

</html>