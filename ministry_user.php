<?php

require('database.php');
session_start();
$sql = "SELECT * FROM articles WHERE `a_type` ='Ministry';";
$execute = mysqli_query($conn,$sql);
$postData = mysqli_num_rows($execute);

?>


<!DOCTYPE html>
<html  lang="en">
  <head>
    <meta charset="UTF-8">
    <title>MIB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Google Font -->
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <!-- Plugins CSS -->
    <link href="assets/css/normalize.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/iline-icons.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/animate.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/owl.theme.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/owl.transitions.css" type="text/css" rel="stylesheet" />

    <!-- Main CSS -->
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/responsive.css" type="text/css" rel="stylesheet" />
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
              <li><a  href="index_user.php">Home</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Category<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <a  href="mib_user.php">
                      Melayu Islam Beraja
                    </a>
                  </li>
                  <li>
                    <a  href="culture_user.php">
                      Our culture
                    </a>
                  </li>
                  <li class="active">
                    <a  href="ministry_user.php">
                      Ministries
                    </a>
                  </li>
                  <li>
                    <a  href="wawasan_user.php">
                      Wawasan 2035
                    </a>
                  </li>
                  <li>
                    <a  href="reference_user.php">
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
                  <li><a class="text-primary"><?php echo $_SESSION['fName']; ?></a></li>
                  <li><a href="contact_user.php" >Contact</a></li>
                  <li><a href="logout_process.php" >Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="search-container" style="float:right;margin-top:10px">
        

          <form action="searchuser.php" method="post">
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
      <!-- BLOG POST BODY SECTION -->
      <section class="pattern-3 no-padding-right">
      <h1 style="font-size:80px; text-align:center;">Ministries</h1>
        <!-- .container -->
        <div class="container">
          <!-- .row -->
          <div class="row">
            <!-- .col-md-12 -->
            <div class="col-md-12">
              <!-- All blog posts -->

                  <div class="container">
                  <?php
                      if($postData > 0){
                        while($row = mysqli_fetch_array($execute)){ 
                          $timeStamp = $row['a_created'];
                          $date = date('d M Y', strtotime($timeStamp));
                          $time = date('h:i A', strtotime($timeStamp));
                          ?>
                          
                          <h1 style="text-align: left; color: black ;"><a href="mibintroduction_user.php.php?a_id=<?php echo $row['a_id'];?>"><?php echo $row['a_title']; ?></a></h1>
                          <p  style="text-align: right;  color: black ;"><span>Published on <?php echo $date; ?> At: <?php echo $time; ?></span></p>
                          <hr>
                          <?php 
                          $firstdesc=substr($row['a_content'], 0, 600); ?>
                          <p style="text-align: center;"><?php echo $firstdesc;?>.....</p>
                          <label style="font-size:20px;"><a href="mibintroduction_user.php?a_id=<?php echo $row['a_id'];?>">Read More</a></label>
                          <hr>
                          <br >
                          <?php 
                        }
                      }

                      ?>

                    </div>
                    
                 
              <!-- /.row -->
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- BLOG POST BODY SECTION END -->
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
                  <h3  class="uppercase">contact us</h3>
                  <span class="line-sep-gray"></span>
                  <p>
                    for any bugs and error please do contact us @
                  </p>

                  <p><b>mibsys@mail.com</p>
                    
                  
                  <!-- Newsletter form -->
                  <form action="#" id="mailchimp-form" method="post" class="subscription" data-url="http://appdevfolio.us10.list-manage.com/subscribe/post?u=a024d704e715c033b405711a3&amp;id=de4c3fd5b0">
                    <div class="form-group">
                      <div class="input-group">
                        
                        <span class="input-group-btn">
                          
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
                    2021 by Daus Has and Dzulkhairi
                  </p>
                </aside>
                <aside class="col-md-4 col-sm-6 col-xs-12">
                  <h3  class="uppercase">Visit Us</h3>
                  <span class="line-sep-gray"></span>
                  <!-- address -->
                  <address>
                    <strong>Brunei Darussalam</strong><br/>
                   Rimba, Serusop<br/>
                    Berlin, GE 10117<br/>
                    2122123<br/>
                    <a href="mailto:#">info@mibsys.com</a><br/>
                    <a href="mailto:#">support@mibsys.com</a><br/>
                    <br>
                   
                  </address>
                  <!-- /address -->
                </aside>
              </div>
              <!-- /.row -->
             
              <!-- /.row -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
        <!-- FOOTER CONTENT -->
      </footer>
      <!-- FOOTER END -->
    </div>
    <!-- MAIN CONTAINER END -->
    <!-- Back to top -->
    <div id="back-to-top" class="back-to-top">
      <a href="#" class="icon iline2-thin16 no-margin"></a>
    </div>
    <!-- Back to top end -->


    <!-- Include js plugin -->
    <script src="assets/js/libs/jquery-1.11.2.min.js"></script>
    <script src="assets/js/libs/jqBootstrapValidation.js"></script>
    <script src="assets/js/libs/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/libs/imagesloaded.js"></script>
    <script src="assets/js/libs/jquery.magnific-popup.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/libs/isotope.pkgd.min.js"></script>
    <script src="assets/js/libs/ParallaxScrolling.js"></script>
    <script src="assets/js/libs/jquery.mailchimp.js"></script>
    <script src="assets/js/libs/wow.min.js"></script>
    <script src="assets/js/libs/owl.carousel.js"></script>
    <script src="assets/js/libs/jquery.fittext.js"></script>
    <script src="assets/js/libs/jquery.lettering.js"></script>
    <script src="assets/js/libs/jquery.textillate.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
