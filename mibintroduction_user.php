<?php

require('database.php');
session_start();
include_once 'add_comment_Process.php';

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
    <link rel="icon"  href="images/logo.jpg"/>
    <!-- Shortcut icon -->

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
              <li class="active"><a  href="index_user.php">Home</a></li>
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
                  <li>
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
                  <li><a class="text-primary" href="profile.php"><?php echo $_SESSION['fName']; ?></a></li>
                  <li><a href="contact.php" >Contact</a></li>
                  <li><a href="logout_process.php" >Logout</a></li>
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
      <!-- BLOG POST BODY SECTION -->
      <section class="pattern-3 no-padding-right">
        <!-- .container -->
        <div class="container">
          <!-- .row -->
              <!-- All blog posts -->
              <?php
              if(isset($_GET['a_id'])){

                $auth_id = mysqli_real_escape_string($conn,$_GET['a_id']);
                $sql= "SELECT * FROM articles WHERE a_id = $auth_id";
                $excute = mysqli_query($conn,$sql);
                $post = mysqli_fetch_assoc($excute);


                if($auth_id != $post['a_id']){
                  header('refresh:3; url=mib_user.php');
                  echo "Article does not exist";
                  exit();
                }



              }else{
                header('location:mib_user.php');
                exit();
              }
              ?>

                  <div class="container">
                  <h1><?php echo $post['a_title']; ?></h1>
                  <div class="content">
                    <?php echo $post['a_content']; ?>
                  </div>
                  </div>
        </div>
        <!-- /.container -->
      </section>


        
          <!-- comment start below-->

					

					<div class="comment-top">

<?php
$query = "SELECT * FROM comment WHERE a_id = $auth_id ORDER BY comment_id DESC";


$result = mysqli_query($conn, $query);

if ($result){
  $num_rows = mysqli_num_rows($result) ; 
  if($num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $commentid = $row['comment_id'];
      $comment = $row['comment'];
      $Userid= $row['user_id'];
      $Blogid= $row['a_id'];
      $created = $row ['created'];
      $username = $row ['username'];
      $fName = $_SESSION['fName'];
      
      echo"
        <br><div class='media'>
          <div class='media-body' style='padding-left: 80px;'>
            
            <h5>$username</h5>		
            <h6>Time posted $created</h6>												
            <p>$comment</p><br>
            												
            <hr>

          </div>
        </div>
      ";
    }
  }
}

?>


</div>
</div>



        <!-- test saja comment -->

<!-- comment Ends-->



    <br>
<!------------------------------------ ADD comment ----------------------------------------------------------->
<div class="comment-top">
<div class="comment-bottom">

<form action="" method="post">
<div class="col-md-6 mb-6">		
<label for="user_id"></label>
<input type="hidden" class="form-control" name="a_id" value = "<?php echo $_GET['a_id']; ?>">
<input type="hidden" class="form-control" name="user_id" value = "<?php echo $_SESSION['user_id']; ?>">
<label id="name"><?php echo $_SESSION['fName'];?></label>
<input type="hidden" class="form-control" name="username" value = "<?php echo $_SESSION['fName']; ?>">
<div><textarea id="comment_area" class="form-control" name="comment" placeholder="Message..." required="" ></textarea>
 <button type="submit" name="submit" class="btn btn-primary submit">Submit</button></div>
</div>



</form>
</div>
</div>
<!------------------------------------ ADD comment end----------------------------------------------------------->


      <!-- BLOG POST BODY SECTION END -->
      <!-- BEGIN FOOTER -->
      
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
