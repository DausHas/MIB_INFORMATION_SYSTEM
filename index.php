<?php

include('database.php');


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
      <section class="slider-content">
        <!-- .container -->
        <div class="container__carousel">
          <!-- .row -->
          <div class="row">
            <!-- .col-md-12 -->
            <div class="col-md-12">
              <!-- .row -->
              <div class="row">
                <div class="col-xs-12 no-padding">
                  <div id="main-carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                      <li data-target="#main-carousel" data-slide-to="1"></li>
                      <li data-target="#main-carousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <!-- img src="assets/images/slider/Slider-1.png" alt="first slider image" /-->
                        <div class="carousel-caption">
                          <span class="caption-head" data-animation="animated bounceInLeft"><span class="text-success">melayu</span> <span class="text-primary">islam</span> beraja</span>
                          <p class="text-center" data-animation="animated bounceInRight"></p>
                          <a class="btn btn-primary btn-lg" data-animation="animated zoomInUp" href="mib.php">Read More</a>
                        </div>
                      </div>
                      <div class="item">
                        <!--img src="assets/images/slider/Slider-2.png" alt="second slider image" / -->
                        <div class="carousel-caption">
                          <span class="caption-head" data-animation="animated bounceInDown"> <span class="text-success">ministries</span></span><br/>
                          <a class="btn btn-success btn-lg" data-animation="animated zoomInRight" href="ministry.php">Read More</a>
                        </div>
                      </div>
                      <div class="item">
                        <!-- img src="assets/images/slider/Slider-3.png" alt="thirth slider image" / -->
                        <div class="carousel-caption">
                          <span class="caption-head" data-animation="animated zoomInLeft" >wawasan<span class="text-danger">2035</span></span><br/>
                          <p class="text-center" data-animation="animated flipInX"> </p>
                          <a class="btn btn-danger btn-lg" data-animation="animated lightSpeedIn" href="wawasan.php">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section> 
      <!-- /Image Slider --> 


      <section class="blue cut-ccw02">
        <!-- .container -->
        <div class="container">
          <!-- .row -->
          <div class="row">
            <!-- .col-md-12 -->
            <div class="col-md-12">
              <!-- .row -->
              <div class="row">
                <div class="col-sm-6 col-xs-12">
                  <h2 class="uppercase wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">About This Website</h2>
                  <span class="line-sep-blue"></span>
                  <p class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">
                    This website is aim to spread the teachings and awareness of the MIB teachings, to help re-educate our 
                    people about the MIB teachings and also to help them learn about our culture, our ministries, our vision(wawasan 2035)
                    , all the available public services and also References for students who would like to use for their studies.
                    The website can also help prepare candidates who are going for goverment position examinations.  
                  </p>
                
                </div>



                <div class="col-sm-6 col-xs-12">

                  <div>

                  <img src="https://kyotoreview.org/wp-content/uploads/Sultan-Omar-Ali-Saifuddien-Mosque-678x381.jpg" alt="">
                    <figure>
                                                  
                      <div class="">
                        <p>
                          <a href="images/logo.jpg" class="" alt="image">
                            
                          </a>
                        </p>
                      </div><!--image overlay-->
                    </figure><!--/figure-->
                  </div>
                </div>
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
              <div class="row">
                <div class="col-md-6 mar-bottom-md">
                  <span class="icon blue-icon iline2-codings1"></span>
                  <h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s">Objective</h2>
                  <span class="line-sep-gray"></span>
                  <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <p>- To help spread awareness about MIB and its teachings</p>
                      <p>- Preserve our culture and teaching it to the new generations</p>
                        <p>- help prepare students for their exams or assignments</p>
                          <p>- help participants who are going for their job examination in the goverment sector</p>
                  </p>
                </div>
                <div class="col-md-6 mar-bottom-md">
                  <span class="icon green-icon iline2-tablet42"></span>
                  <h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s"><a href="ministry_user.php">Ministries</a></h2>
                  <span class="line-sep-gray"></span>
                  <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                  Ministries are the primary executive branches of the Government of Brunei. There are thirteen ministries, which include: Prime Minister's Office. Ministry of Finance and Economy.
                  </p>
                </div>

               


              </div>
              <!-- /.row -->
            </div>



            <div class="col-md-12">
              <!-- .row -->
              <div class="row">
               
                

                <div class="col-md-6 mar-bottom-md">
                  <span class="icon blue-icon iline2-newspaper7"></span>
                  <h2 a class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s"><a href="culture_user.php">Culture</a></h2>
                  <span class="line-sep-gray"></span>
                  <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                  The culture of Brunei is strongly influenced by Malay cultures and the Islamic religion. The culture is also influenced by the
                   demographic makeup of the country: more than two-thirds of the population are Malay, and the remainder consists of Chinese, Indians
                    and indigenous groups such as Muruts, Dusuns and Kedayans.
                  </p>
                </div>

                <div class="col-md-6 mar-bottom-md">
                  <span class="icon blue-icon iline2-dollar77"></span>
                  <h2  class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s"><a href="wawasan_user.php">Wawasan 2035</a> </h2>
                  <span class="line-sep-gray"></span>
                  <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                  In 2008, Brunei Darussalam began its new journey towards Wawasan Brunei 2035, its national vision, 
                  in which by 2035, the country aspires to be recognised for its educated, highly skilled and accomplished
                   people, with a high quality of life and a dynamic, sustainable economy
                  </p>
                </div>


              </div>
              <!-- /.row -->
            </div>



            <!-- /.col-md-12 -->
          </div>






          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
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
