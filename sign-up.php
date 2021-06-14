<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Fallone - Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Google Font -->
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <!-- Plugins CSS -->
    <link href="assets/css/normalize.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/iline-icons.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/animate.css" type="text/css" rel="stylesheet" />
    <!-- Main CSS -->
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/responsive.css" type="text/css" rel="stylesheet" />
    <!-- Shortcut icon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"/>
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
                  <li>
                    <a  href="mib.php">
                      Melayu Islam Beraja
                    </a>
                  </li>
                  <li>
                    <a  href="#">
                      Our culture
                    </a>
                  </li>
                  <li>
                    <a  href="#">
                      Ministries
                    </a>
                  </li>
                  <li>
                    <a  href="#">
                      Wawasan 2035
                    </a>
                  </li>
                  <li>
                    <a  href="#">
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
                  <li class="active"><a class="text-success" href="sign-up.php">Sign Up</a></li>
                  <li><a href="contact.php"  >Contact</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!-- NAVIGATION END -->
    <!-- MAIN CONTAINER -->
    <div class="main-content">
      <!-- SIGN UP SECTION -->
      <section class="text-white">
        <div class="cover-4"></div>
        <!-- .container -->
        <div class="container">
          <!-- .row -->
          <div class="row">
                <div class="col-md-4 col-md-offset-8 col-lg-offset-8 mar-bottom-md">
                  <h1 class="text-uppercase text-primary wow fadeInDown text-center"  data-wow-duration=".8s" data-wow-delay=".2s">Sign up now!</h1>
                  
                  <form action="sign_up_process.php" method="POST" class="mar-top-lg error wow fadeInUp"  style="text-align: center"data-wow-duration="1s" data-wow-delay=".6s" novalidate="" name="signupForm">
                    <!-- .form-group -->

                    <div class="form-group control-group">
                      <input id="fName" type="text" class="input-lg" name="fName" placeholder="First Name* :" required="" pattern=".{4,}"data-validation-required-message="Please enter your first name." />
                      <p class="help-block"></p>
                    </div>
                    <!-- .form-group -->
                    <div class="form-group control-group">
                      <input id="lName" type="text" class="input-lg" value="" name="lName" placeholder="Last Name* :" required="" pattern=".{4,}"data-validation-required-message="Please enter your last name." />
                      <p class="help-block"></p>
                    </div>
                    <!-- .form-group -->
                    <div class="form-group control-group">
                      <input pattern=".{7,10}" id="phoneNum" type="text" class="input-lg" value="" name="phoneNum" placeholder="Phone Number :" />
                      <p class="help-block"></p>
                    </div>
                    <!-- .form-group -->
                    <div class="form-group control-group">

                    <!-- EMAIL -->
                      <input id="eMail" class="half left input-lg" type="email" value="" name="eMail" placeholder="E-mail* :" required="" data-validation-required-message="Please enter your email address." />

                    <!--PASWORD -->
                      <input id="uPassword" class="half right input-lg" type="text" value="" name="uPassword" placeholder="Password* :" required="" pattern=".{5,}"data-validation-required-message="Please enter a password." title="6 characters minimum"/>
                      <span class="clearboth"></span>
                      <p class="help-block"></p>
                    </div>

                    <!-- YANG ANI DAUS MEMBER-->
                    <div class="form-group control-group">
                      <input id="userType" type="hidden" class="input-lg" value="Member" name="userType" placeholder="User Type:" />
                      <p class="help-block"></p>
                    </div>
                    <button name="signup" type="submit" class="btn btn-success btn-full btn-lg">Sign Up</button>
                  </form>
                </div>
              </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- SIGN UP SECTION END -->
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
                  <h3  class="uppercase">Newsletter</h3>
                  <span class="line-sep-gray"></span>
                  <p>
                    Subscribe to our weekly Newsletter and stay tuned 
                    to all our updates.
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
                    <strong>Appdevfolio</strong><br/>
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
    </div>
    <!-- MAIN CONTAINER END -->
<!-- Back to top -->
     <div id="back-to-top" class="back-to-top">
       <a href="#" class="icon iline2-thin16 no-margin"></a>
     </div>
     <!-- Back to top end -->


    <!-- Plugins JS -->
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
    <script src="assets/js/libs/jquery.fittext.js"></script>
    <script src="assets/js/libs/jquery.lettering.js"></script>
    <script src="assets/js/libs/jquery.textillate.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
