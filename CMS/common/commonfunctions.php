<?php
function Preloader(){
    ?>
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
<?php
}    
 function DisplayHeader(){
    ?>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="../../MainPage.html" class="logo">
                            <img src="../assets/images/logoMovie.png" alt="" style="width: 158px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        
                    </nav>
                </div>
            </div>
        </div>
    </header>

<?php
 }
 function DisplayHeaderMenu(){
    ?>
    <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="../../MainPage.html"class="logo">
                        <img src="../assets/images/logoMovie.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="../CMSpages/SignUp.php" class="active">Sign Up</a></li>
                      <li><a href="../CMSpages/AddItem.php">Add Movies</a></li>
                      <li><a href="../CMSpages/itemslist.php">Movie Manager</a></li>
                      <li><a href="../CMSpages/index.php">Log Out</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>

<?php
     }   
function DisplayFooter(){
?> 
    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2048 LUGX Gaming Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow"
                        href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
            </div>
        </div>
    </footer>
    
<?php
    }   
function Callingcsslinks(){
        ?>
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
            
<?php
    } 
function CallingJS(){
        ?>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/isotope.min.js"></script>
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/counter.js"></script>
    <script src="../assets/js/custom.js"></script>    
<?php
    }    
?>