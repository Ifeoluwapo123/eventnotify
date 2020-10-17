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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    .menu{
      margin-top: 50px;
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
      } 
    }
  </style>
  </head>
  <body> 
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
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
                      <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                      <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                      <li><a href="#"><span class="fa fa-youtube"></span></a></li>
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
                <li class="active"><a href="index.html"><strong>Home</strong></a></li>            
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>Contact</strong><span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="course.html">Email</a></li>                
                    <li><a href="course-detail.html">Phone Number</a></li>                
                  </ul>
                </li>           
                <li><a href="gallery.html"><strong>About</strong></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>Campus Blog</strong><span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="blog-archive.html">About School</a></li>                
                    <li><a href="blog-single.html">Event(Info) Blog</a></li>                
                  </ul>
                </li>            
                <li><a href="contact.html"><strong>Notifcation</strong></a></li>           
                <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
              </ul>                     
            </div><!--/.nav-collapse -->        
          </div>     
        </nav>
      </section>
    </div>
  </header>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <div class="container-fluid">
      <div class="row content">
        <div class="col-sm-3 sidenav">
          <h4 class="menu">CampusNotifyMe Blog</h4>
          <hr>
          <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#section1">University</a></li>
            <li><a href="#section2">Student</a></li>
            <li><a href="#section3">Admin</a></li>
            <li><a href="#section3">Developer</a></li>
          </ul><br>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Blog..">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">
                <span class="glyphicon glyphicon-search"></span>
              </button>
            </span>
          </div>
          <hr>
        </div>
      <div class="col-sm-9">
        <h4><small>RECENT POSTS</small></h4>
        <hr>
        <tr>
        <h2>Event Title/Description:</h2>
        </tr>
        <h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 27, 2015.</h5>
        <h5><span class="label label-danger">Event</span> <span class="label label-primary">News</span></h5><br>
        <p>Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <br><br>
        <?php 
          queryToUploadEventInfo(); 
        ?> 
        <p><span class="badge">2</span> Comments:</p><br>
         <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top" style="background-color:#f1f1f1;">
      <div class="container" >
        <div class="mu-footer-top-area">
          <div class="row">         
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4 style="color:black;">News letter</h4>
                <p style="color:black;">Get latest update, news & academic offers</p>
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
                  <p style="color:black;">P.O. Box 320, Ross, California 9495, USA</p>
                  <p style="color:black;">Phone: (415) 453-1568 </p>
                  <p style="color:black;">Website: www.markups.io</p>
                  <p style="color:black;">Email: info@markups.io</p>
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
        <div class="mu-footer-bottom-area" style="background-color: #f1f1f1;">
          <p style="color: black">&copy; All Right Reserved. Designed by <a href="http://www.markups.io/" rel="nofollow" style="color: black"><strong>MarkUps.io</strong></a></p>
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
 
  <!-- End footer --> 
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
  </body>
</html>
<?php
//}else{
 // header('Refresh: 1; URL=logsign-up.html?redirect=' . $_SERVER['PHP_SELF']);      
  //die();
//}
?>