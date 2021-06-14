<?php

require('database.php');
$sql = "SELECT * FROM `articles` WHERE `a_type` ='Culture';";
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
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <a  href="index_admin.php">
                      Create New Article
                    </a>
                  </li>
                  <li  class="active">
                    <a  href="index_admin_upd.php">
                     Update/Delete Articles
                    </a>
                  </li>
                </ul>
              </li>


              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Manage Articles<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <a  href="mib_admin.php">
                      Melayu Islam Beraja
                    </a>
                  </li>
                  <li class="active">
                    <a  href="culture_admin.php">
                      Our culture
                    </a>
                  </li>
                  <li>
                    <a  href="ministry_admin.php">
                      Ministries
                    </a>
                  </li>
                  <li>
                    <a  href="wawasan_admin.php">
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
                <li><a href="logout_process.php" >Logout</a></li>
              </li>
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!-- NAVIGATION END -->
    <!-- MAIN CONTAINER -->
    <div class="main-content">
      <!-- BLOG POST BODY SECTION -->
      <section class="pattern-3 no-padding-right">
        <h2 class="hidden">blog posts</h2>
        <!-- .container -->
        <div class="container">
          <!-- .row -->
          <div class="row">
            <!-- .col-md-12 -->
            <div class="col-md-12">
              <!-- All blog posts -->

                  <div class="container" style="text-align:center;">
                  <?php
                      if($postData > 0){
                        while($row = mysqli_fetch_array($execute)){ 
                          $timeStamp = $row['a_created'];
                          $date = date('d M Y', strtotime($timeStamp));
                          $time = date('h:i A', strtotime($timeStamp));
                          ?>
                          
                          <h1><a href="mibintroduction_admin.php?a_id=<?php echo $row['a_id'];?>"><?php echo $row['a_title']; ?></a></h1>
                          <span >Published on <?php echo $date; ?> At: <?php echo $time; ?></span>
                          <a href="index_admin_upd.php?a_id=<?php echo $row['a_id'];?>"><input type="submit" name="update" value="Update Article"></a>
                          <input type="submit" name="delete" value="Delete Article"><hr>
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
     s
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
