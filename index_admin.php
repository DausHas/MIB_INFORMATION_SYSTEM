<!DOCTYPE html>
<?php
require('database.php');
session_start();
include_once 'add_article_process.php';
?>
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
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="active">
                    <a  href="index_admin.php">
                      Create New Article
                    </a>
                  </li>
                  <li>
                    <a  href="viewallarticles.php">
                     Update/Delete Article
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
                  <li>
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
                    <a  href="reference_admin.php">
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
      <!-- Features -->
      <section class="white">
        <!-- .container -->
        <div class="container">
          <!-- .row -->
          <div class="row">
            <!-- .col-md-12 -->
            <div class="col-md-12">
              <!-- .row -->

              <?php if(!empty($statusMsg)){?>
              <p class="stmsg"><?php echo $statusMsg; ?></p>
              <?php } ?>

            <h1>Create New Article</h1>
              <!-- SINI SIMPAN CONTENT TO ADD NEW ARTICLES-->
              <form method="post" action="">
                <div class="input-field">
                <h6>Enter Title</h6>
                <input type="text" name="a_title" id="title">
                </div>

              <label>Section:</label>
              <select name="a_type" id="a_type">
                <option value="Melayu Islam Beraja">Melayu Islam Beraja</option>
                <option value="Culture">Culture</option>
                <option value="Ministry">Ministry</option>
                <option value="Wawasan">Wawasan</option>
                <option value="Reference">Reference</option>
              </select>
              <textarea name="a_content" id="text_editor" class="form-control bg-dark text-white my-3"></textarea>
              <input type="submit" name="submit" value="Add Article">
              </form>

              <!-- /.row -->
            </div>
            <!-- /.col-md-12 -->
            <?php if(!empty($editorContent) || !empty($editorTitle)){ ?>
              <div class="ed-cont">
                <p>Title: <?php echo $editorTitle;?> </p>
                <p>Section: <?php echo $editorCategory ?></p>
                <?php echo $editorContent; ?>
              </div>
              <?php } ?>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /Features -->
      <!-- BEGIN FOOTER -->
      
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
    <script src="assets/ckeditor/ckeditor.js"></script>
    <script>
      CKEDITOR.replace('text_editor');
    </script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
