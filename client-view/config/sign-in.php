<?php
session_start();
  include('../../database/DbConnectivity.php');
  $errors = array();
  if (empty($_POST['username'])) {        
    $errors[] = 'Username cannot be blank.';    
  }if(empty($_POST['password'])) {        
    $errors[] = 'Password cannot be blank.';    
  }

 if(count($errors) > 0){ 
      echo '<p><strong style="color:#FF000;"> Unable to login</strong></p>';
      echo '<p> Please fix the following: </p>';
      echo '<ul>';        
    foreach ($errors as $error){            
      echo '<li>'.$error.'</li >';        
    }       
      echo '</ul>';       
  }
  $name = (isset($_POST['username']))? trim($_POST['username']): '';
  $password1 =(isset($_POST['password']))? trim($_POST['password']):'';
  $redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : '../home1.php';
  $same = 0;

  $query = "SELECT username, password FROM account";
  $result = mysqli_query($con, $query) or die(mysqli_error($con)); 

  function my_error_handler($e_type, $e_message, $e_file, $e_line) {    
    echo '<h1> Oops! </h1>';      
    echo '<hr/>';    
    echo '<p><b> Error Type: </b>' . $e_type . '<br/>';    
    echo '<b> Error Message: </b>'. $e_message . '<br/>';    
    echo '<b> Filename: </b>'. $e_file . '<br/>';    
    echo '<b> Line Number: </b>'. $e_line.'</p>'; 
  } 
  set_error_handler('my_error_handler'); 
  while ($row = mysqli_fetch_array($result)) {
    extract($row);
      if($name == $username && $password == $password1){
      	$same = $same + 1;
      }
  }
  $query = "SELECT distinct(id) FROM account WHERE username ='".$name."'";
  $re = mysqli_query($con, $query) or die(mysqli_error($con));
  $row = mysqli_fetch_array($re);
  extract($row);

if (isset($_POST['submit'])) {
    if($same == 1){
      $_SESSION['name'] = $name;
     header ('Refresh: 1; URL=' . $redirect);
     // header('Refresh: 1; url=home1.php', FALSE, 307);
      exit();
    }else{
      header('Refresh: 1; URL=logsign-up.html?err-pass&username=' . $_SERVER['PHP_SELF']);  
      die();
    }
  }
?>