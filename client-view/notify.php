<?php 
  session_start();
  if(isset($_SESSION['name'])){
    include('../database/DbConnectivity.php');
    include('config/like.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Campus Notify Me</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <!-- Font awesome -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="../assets/css/jquery.fancybox.css" type="text/css" media="screen"/> 
    <!-- Theme color -->
    <link id="switcher" href="../assets/css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Main style sheet -->
    <link href="../assets/css/style.css" rel="stylesheet">    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5dc7549819440c0012abd4e4&product=inline-share-buttons' async='async'></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) 
    .row.content {height: 1500px}
    /* Set gray background color and 100% height */
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    body header {
      position: fixed;
      z-index: 1;
    }
    .menu{
      margin-top: 50px;
    }
    .blog li{
      text-decoration: none;
      display: inline;
      padding: 10px;
    }
    
    @media screen and (min-width: 768px) {
      .tim{
        width: 75%;
        float: right;
      }
      .blog img{
        border: 1px solid #ddd; 
        height : 10%; 
        width: 10%;
        float: right;
      }
      .blog{
        float: right;
        margin-top: 115px;
        margin-bottom: 20px;
      }
      .blog .com{
        text-align: center;
        width:60%;
      }
      .foot p{
        color: black; 
        float: left; 
        margin-left: 15%; 
        background-color:#f8f8f8; 
        padding: 15px;
        border-radius: 5px;
      }
      .sidenav {
        background-color: #f1f1f1;
        height: 100%;
        margin-top: 115px;
        scroll-behavior: smooth;
        position: fixed;
      }
    }
    
    .like-btn{
      color: blue;
      font-size: 25px;
    }
   
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
      .sidenav {
        background-color: #ffffff;
        margin-top: 80px;
      } 
      .blog img{
        border: 1px solid #ddd; 
        height : 20%; 
        width: 20%;
        margin-top: 30px;
      }
      .blog .com{
        width: 100%;
      }
      .foot p{
        color: black;  
        background-color:#f8f8f8; 
        padding: 15px;
        border-radius: 5px;
      }
    }
  </style>
  </head>
  <body> 
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->
  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span>universityeventnotifier5@gmail.com</span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span>08100897169</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                      <li><a href=""><span class="fa fa-facebook"></span></a></li>
                      <li><a href=""><span class="fa fa-twitter"></span></a></li>
                      <li><a href=""><span class="fa fa-google-plus"></span></a></li>
                      <li><a href=""><span class="fa fa-linkedin"></span></a></li>
                      <li><a href=""><span class="fa fa-youtube"></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <section id="mu-menu">
        <nav class="navbar navbar-default" role="navigation">  
          <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->              
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.html"><i class="fa fa-university"></i><span>Varsity</span></a>
              <!-- IMG BASED LOGO  -->
              <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="home1.php"><strong>Home</strong></a></li>         
                <li><a href="contant.php"><strong>Contact</strong></a></li>                   
                <li><a href="about.php"><strong>About</strong></a></li>
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown"><strong>Campus Blog</strong><span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="home1.php">About School</a></li>                
                    <li><a href="home1.php">Event(Info) Blog</a></li>                
                  </ul>
                </li>            
                <li><a href="notification.php"><strong>Notifcation</strong></a></li>        
                <li><a href="" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
              </ul>                     
            </div><!--/.nav-collapse -->        
          </div>     
        </nav>
      </section>
    </div>
  </header>
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form" action="search.php?jkfj%hmbf%jisbf=getInfo" method="POST">
             <input type="search" name="search" placeholder="Type Your Keyword(s) & Hit Enter">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <div class="container-fluid">
      <div class="row content">
        <div class="col-sm-3 sidenav">
          <h4 class="menu">CampusNotifyMe Blog</h4>
          <hr>
          <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="">University</a></li>
            <li><a href="">Student</a></li>
            <li><a href="">Admin</a></li>
            <li><a href="">Developer</a></li>
            <li><?php echo "<a href='log-out.php'><strong><h2 style ='color:black; text-align: left; font-size:15px;'>Log-out</h2></strong></a></tr>"?></li> 
          </ul><br>
          <form class="mu-search-form" action="search.php?jkfj%hmbf%jisbf=getInfo" method="POST">
            <div class="input-group">
              <input type="text" style="z-index: 0" name="search" class="form-control" placeholder="Search Blog..">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-default" style="z-index: 0">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </div>
          </form>
          <hr>
        </div>
      <div class="col-sm-9 blog">
        <div class="container-fluid">
          <div class="row content">
            <br>
            <h4 style="float: right;">You are Welcome: <strong><?php echo $_SESSION['name'];?></strong></h4>
            <h4><a href='notify.php' style="color: red; border-radius: 30px; margin-bottom: 10px; padding: 15px; background-color: #f8f8f8"><strong>My-Profile</strong></a></h4>
            <hr>
            <?php echo "<a href='log-out.php'><strong><h2 style ='color:#ffffff; background-color:#00BFFF; width:20%; text-align: center; font-size:20px; font-family:sans-serrif; border-radius:20px; padding: 5px; float:right'>Log out</h2></strong></a></tr>"?>
            <br><br>
            <hr>
            <?php
              function my_error_handler($e_type, $e_message, $e_file, $e_line) {    
                /*echo '<h1> Oops! </h1>';      
                echo '<hr/>';    
                echo '<p><b> Error Type: </b>' . $e_type . '<br/>';    
                echo '<b> Error Message: </b>'. $e_message . '<br/>';    
                echo '<b> Filename: </b>'. $e_file . '<br/>';    
                echo '<b> Line Number: </b>'. $e_line.'</p>'; */
                echo "";
              }
              function my_error_handler1($e_type, $e_message, $e_file, $e_line) {     
                echo ''; 
              }
              $query = 'CREATE TABLE IF NOT EXISTS profileImages (image_id  INTEGER  NOT NULL AUTO_INCREMENT, username VARCHAR(255) NOT NULL, image_filename VARCHAR(255) NOT NULL DEFAULT "",image_date  DATE  NOT NULL, PRIMARY KEY (image_id)) ENGINE=MyISAM';
                mysqli_query($con, $query) or die (mysqli_error($con));
              if(isset($_POST['Submited'])){ 
                if($_FILES['upload_file']['error'] != UPLOAD_ERR_OK) { 
                  switch ($_FILES['upload_file']['error']) {    
                    case UPLOAD_ERR_INI_SIZE:
                      echo "<br/>";        
                      die('The uploaded file exceeds the upload_max_filesize directive '.'in php.ini............'); 
                      break;    
                    case UPLOAD_ERR_FORM_SIZE: 
                      echo "<br/>";       
                      die('The uploaded file exceeds the MAX_FILE_SIZE directive that '.'was specified in the HTML form............');        
                      break;
                    case UPLOAD_ERR_PARTIAL:
                      echo "<br/>";         
                      die('The uploaded file was only partially uploaded............');       
                      break;   
                    case UPLOAD_ERR_NO_FILE: 
                      echo "<br/>";       
                      die('No file was uploaded............');        
                      break;   
                    case UPLOAD_ERR_NO_TMP_DIR: 
                      echo "<br/>";        
                      die('The server is missing a temporary folder............');       
                      break;    
                    case UPLOAD_ERR_CANT_WRITE: 
                      echo "<br/>";       
                      die('The server failed to write the uploaded file to disk...................');     
                      break;   
                    case UPLOAD_ERR_EXTENSION:
                      echo "<br/>";         
                      die('File upload stopped by extension............');       
                      break;   
                    }
                  }
                  $image_date = date('Y-m-d');
                  list($width, $height, $type, $attr) = getimagesize($_FILES['upload_file']['tmp_name']);
                  switch ($type) { 
                    case IMAGETYPE_GIF:    
                      $image = imagecreatefromgif($_FILES['upload_file']['tmp_name']) or
                      die('The file you uploaded was not a supported filetype.');   
                      $ext = '.gif';    
                      break; 
                    case IMAGETYPE_JPEG:    
                      $image = imagecreatefromjpeg($_FILES['upload_file']['tmp_name']) or        
                      die('The file you uploaded was not a supported filetype.');    
                      $ext = '.jpg';    
                      break; 
                    case IMAGETYPE_PNG:    
                      $image = imagecreatefrompng($_FILES['upload_file']['tmp_name']) or        
                      die('The file you uploaded was not a supported filetype.');    
                      $ext = '.png';    
                      break; 
                    default:    
                      die('The file you uploaded was not a supported filetype.'); 
                  }
                  $query = 'INSERT INTO profileImages(username, image_date) VALUES("'.$_SESSION['name'].'","'.$image_date.'")'; 
                  mysqli_query($con, $query) or die (mysqli_error($con));
                  $last_id = mysqli_insert_id($con);
                  $imagename = $last_id . $ext; 
                  $query = 'UPDATE profileImages SET image_filename = "'.$imagename.'" WHERE image_id = "' . $last_id.'"';
                  mysqli_query($con, $query) or die (mysqli_error($con));
                  $newdir = 'C:/wamp64/www/NotifyMe/Profilepictures';
                  switch ($type){ 
                    case IMAGETYPE_GIF:    
                      imagegif($image, $newdir . '/' . $imagename);    
                      break;   
                    case IMAGETYPE_JPEG:    
                      imagejpeg($image, $newdir . '/' . $imagename, 100);    
                      break;    
                    case IMAGETYPE_PNG:    
                      imagepng($image, $newdir . '/' . $imagename);    
                      break; 
                      imagedestroy($image);
                  }    
                }
                ?>
              <?php
                $query = "SELECT image_filename, image_date FROM profileImages WHERE username ='".$_SESSION['name']."'";
                set_error_handler('my_error_handler1'); 
                $rey = mysqli_query($con, $query) or die(mysqli_error($con));
                $row = mysqli_fetch_array($rey);
                extract($row);
                if($image_filename != ""){  
                ?>   
                <a href="../Profilepictures/<?php echo $image_filename;?>"><img src='../Profilepictures/<?php echo $image_filename;?>' class='thumbnail'></a>
                <?php
                echo"<p><strong style ='font-size:20px; color:blue '> Your Profile picture was uploaded on:</strong> $image_date</p>";
                }else{
                  ?>
                  echo "<img src='' height = '120px' width = '120px' style='float:right; margin-bottom: 10px; margin-right: 30px; margin-up:10px; border: 1px solid #ddd'>";
                  <?php
                }
                $query = "SELECT username, email FROM account WHERE username ='".$_SESSION['name']."'";
                $re = mysqli_query($con, $query) or die(mysqli_error($con));
                $row = mysqli_fetch_array($re);
                extract($row);
                echo "<p ><strong style ='font-size:20px; color:blue'>Profile Name:</strong>"." ".$username."</p>";
                echo "<p ><strong style ='font-size:20px; color:blue'>Email:</strong>"." ".$email."</p>";
                if($image_filename != ""){ 
                  echo "<p ><strong style ='font-size:20px; color:blue'>Profile Picture Status: </strong>Active </p>";
                }else{
                  echo "<p ><strong style ='font-size:20px; color:blue'>Profile Picture Status: </strong>None </p>";
                }
                  echo "<form action = 'notify.php' enctype='multipart/form-data' method ='POST'>";
                ?>
              <p>Upload a profile picture</p>
              <input type='file' name='upload_file' style = 'margin-top:15px'/>
              <input type='submit' name='Submited' value='Upload picture' style = 'margin-top:5px'/>
            </form>       
          </div>
        </div>
      </div>
      <hr>
      <div class="tim">
        <footer id="mu-footer">
          <!-- start footer top -->
          <div class="mu-footer-top" style="background-color:#f1f1f1;">
            <div class="container" >
              <div class="mu-footer-top-area">
                <div class="row">         
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="mu-footer-widget">
                      <h4 style="color:black;">Event News letter</h4>
                      <p style="color:black;">Get latest update, news & academic offers via emails or mobile contacts</p>
                      <input type="text" placeholder="Type your Mobile Number">
                      <form class="mu-subscribe-form">
                        <input type="email" placeholder="Type your Email">
                        <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                      </form>               
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="mu-footer-widget">
                      <h4 style="color:black;">Contact</h4>
                      <address>
                        <p style="color:black;">Campus E.Notifier</p>
                        <p style="color:black;">Phone: 08100897169</p>
                        <p style="color:black;">Website: www.inprogess.com</p>
                        <p style="color:black;">Email: adenusidamilola5@gmail.com</p>
                      </address>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end footer top -->
          <!-- start footer bottom -->
          <div class="mu-footer-bottom">
            <div class="container">
              <div class="mu-footer-bottom-area foot">
                <p style="color: black">&copy; All Right Reserved. Designed by <a href="http://www.markups.io/" rel="nofollow" style="color: black"><strong>By Dammy.io</strong></a></p>
              </div>
            </div>
          </div>
        </div>
        <!-- end footer bottom -->
        </footer>
      </div>
    </div>
  </section>
  <!-- End menu -->
  <!-- Start footer --> 
  <!-- jQuery library -->
  <script src="../assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="../assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="../assets/js/waypoints.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="../assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="../assets/js/jquery.fancybox.pack.js"></script>
  <!-- Custom js -->
  <script src="../assets/js/custom.js"></script> 
  <script src ="../script.js"></script>
  <script src ="../logsin.js"></script>
  </body>
</html>
<?php
}else{
  header('Refresh: 1; URL=logsign-up.html?redirect=' . $_SERVER['PHP_SELF']);      
  die();
}
?>