<!DOCTYPE html>

     <?php
     require_once("../Controller/ViewController.php");
     require_once("../Model/ViewModel.php");
     require_once("../common/commonfunctions.php");
    
     ?> 


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Log in</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <?php
    Callingcsslinks();
    ?>

    <!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <?php
    Preloader();
  ?>
  <!-- ***** Preloader End ***** -->
    <!-- ***** Header Area Start ***** -->
    <?php
    DisplayHeader();
    ?>
      <!-- ***** Header Area End ***** -->



    <div class="main-banner">
      <?php
      LogIn();
      ?>
    </div>


       <!-- footer-->
   <?php
    DisplayFooter();
   ?>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
       <!-- footer-->
   <?php
    CallingJS();
    LogInScript();
    ?>


</body>

</html>