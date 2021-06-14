<?php
require('database.php');
session_start();

?>
<!DOCTYPE html>
<html  lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Melayu Islam Beraja</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Google Font -->
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <!--<link href="http://fonts.googleapis.com/css?family=Allerta+Stencil:400,700,900:normal" rel="stylesheet" type="text/css"> -->
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <!-- Plugins CSS -->
    <link href="assets/css/normalize.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/animate.css" type="text/css" rel="stylesheet" />
    <!-- Main CSS -->
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/responsive.css" type="text/css" rel="stylesheet" />
    <!-- icons -->
    <link href="assets/css/iline-icons.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" type="text/css" rel="stylesheet" />
    <!-- Shortcut icon -->
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon"/>
  </head>
  <body>
    <!-- NAVIGATION START -->
  <header class="fallone-navbar" data-id="default-navbar">
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a  href="index.php">Home</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Category<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="active">
                    <a href="mib.php">
                      Melayu Islam Beraja
                    </a>
                  </li>
                  <li>
                    <a  href="culture.php">
                      Our culture
                    </a>
                  </li>
                  <li>
                    <a  href="ministry.php">
                      Ministries
                    </a>
                  </li>
                  <li>
                    <a  href="wawasan.php">
                      Wawasan 2035
                    </a>
                  </li>
                  <li>
                    <a  href="reference.php">
                      References
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a class="text-primary" href="login.php">Login</a></li>
                  <li><a class="text-success" href="sign-up.php">Sign Up</a></li>
                  <li><a href="contact.php"  >Contact</a></li>
                </ul>
              </li>
            </ul>


            <div class="search-container" style="float:right;margin-top:10px">
        

          <form action="search.php" method="post">
          <label>Search</label>
          <input type="text" name="searchterm" placeholder="Search...">
          <input type="submit" name="search">           
          </form>

          </div>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
   

                





    </header>
    <!-- NAVIGATION END -->
    <!-- MAIN CONTAINER -->
    <div class="main-content">
      <!-- Image Slider --> 
     
      <!-- /Image Slider --> 


      <section class="blue cut-ccw02">
      <?php


require('database.php');
  

  $search =mysqli_real_escape_string($conn,trim ($_POST['searchterm']));

$find_article = mysqli_query($conn,"SELECT * FROM articles WHERE `a_title` LIKE '%$search%'");
while($row = mysqli_fetch_assoc($find_article))
{
  $title = $row['a_title'];
  $id = $row['a_id'];

  echo "<span><h1 style=text-align:center; font-size:40;> search Result:   <a href ='mibintroduction.php?a_id=$id'>$title</a>(click here)</span><br />";
}

?>
        <!-- .container -->
        <div class="container">
          <!-- .row -->
          <div class="row">
            <!-- .col-md-12 -->
            <div class="col-md-12">
              <!-- .row -->
              <div class="row">
                



              </div>
              <!-- /.row -->
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- Features -->
      <section class="white">
        <!-- .container -->
        <div class="container">
          <!-- .row -->
          <div class="row">
            <!-- .col-md-12 -->
            <div class="col-md-12">
              <!-- .row -->
 
                

               

               
              </div>
              <!-- /.row -->
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /Features -->
      <!-- BEGIN FOOTER -->
      <footer class="page-footer">
        <!-- FOOTER CONTENT -->
        <div class="container">
          <!-- .row -->
          <div class="row">
            <!-- .col-md-12 -->
            <div class="col-md-12">
              <!-- .row -->
              <div class="row">
                <aside class="col-md-4 col-sm-6 col-xs-12 text-left">
                  <h3  class="uppercase">Contact us</h3>
                  <span class="line-sep-gray"></span>
                  <p>
                   send us an email for any queries
                  </p>
                  <!-- Newsletter form -->
                  <form action="#" id="mailchimp-form" method="post" class="subscription" data-url="http://appdevfolio.us10.list-manage.com/subscribe/post?u=a024d704e715c033b405711a3&amp;id=de4c3fd5b0">
                    <div class="form-group">
                      <div class="input-group">
                        <input type="email" class="form-control input-lg" placeholder="Your email address" id="mailchimp-email" name="EMAIL">
                        <span class="input-group-btn">
                          <button type="submit" class="btn   btn-lg">
                            <i class="iline2-paper41"></i> Signup
                          </button>
                        </span>
                      </div>
                    </div>
                    <label for="mailchimp-email" class="text-danger text-center mailchimp-label"></label>
                  </form>
                  <!-- /Newsletter Registration Form -->
                </aside>
                <aside class="col-md-4 col-sm-6 col-xs-12 text-left">
                  <!-- Copyright Informations -->
                  <h3  class="uppercase">Copyright</h3>
                  <span class="line-sep-gray"></span>
                  <p>
                    2014-2015 Appdevfolio All right reserved
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna 
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                  </p>
                </aside>
                <aside class="col-md-4 col-sm-6 col-xs-12">
                  <h3  class="uppercase">Visit Us</h3>
                  <span class="line-sep-gray"></span>
                  <!-- address -->
                  <address>
                    <strong>Brunei</strong><br/>
                    Pariser Platz, App. 600<br/>
                    Berlin, GE 10117<br/>
                    (+49) 123-456-789<br/>
                    <a href="mailto:#">info@appdevfolio.com</a><br/>
                    <a href="mailto:#">support@appdevfolio.com</a><br/>
                    Monday / Friday<br>
                    09:00 - 13.00 / 14:00 - 18:00
                  </address>
                  <!-- /address -->
                </aside>
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-md-12 text-center mar-top-sm">
                  <!-- .social -->
                  <ul class="social">
                    <li><a href="#" class="icon-xl iline3-be"></a></li>
                    <li><a href="#" class="icon-xl iline3-facebook27"></a></li>
                    <li><a href="#" class="icon-xl iline3-instagram4"></a></li>
                    <li><a href="#" class="icon-xl iline3-twitter19"></a></li>
                    <li><a href="#" class="icon-xl iline3-vimeo11"></a></li>
                  </ul>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
        <!-- FOOTER CONTENT -->
      </footer>
      <!-- FOOTER END -->
      <!-- End Footer -->
    </div>
    <!-- MAIN CONTAINER END -->
    <!-- Back to top -->
    <div id="back-to-top" class="back-to-top">
      <a href="#" class="icon iline2-thin16 no-margin"></a>
    </div>
    <!-- Back to top end -->
    <!-- Plugins JS -->
    <script src="assets/js/libs/jquery-1.11.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/libs/jqBootstrapValidation.js"></script>
    <script src="assets/js/libs/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/libs/imagesloaded.js"></script>
    <script src="assets/js/libs/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/libs/isotope.pkgd.min.js"></script>
    <script src="assets/js/libs/ParallaxScrolling.js"></script>
    <script src="assets/js/libs/jquery.mailchimp.js"></script>
    <script src="assets/js/libs/wow.min.js"></script>
    <script src="assets/js/libs/jquery.fittext.js"></script>
    <script src="assets/js/libs/jquery.lettering.js"></script>
    <script src="assets/js/libs/jquery.textillate.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
  </body>
</html>

