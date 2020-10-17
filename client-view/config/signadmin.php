<?php
session_start();
include('../../database/DbConnectivity.php');
if(isset($_POST['submit'])){
  $name = ($_POST['username']);
  $_SESSION['name'] = ($_POST['username']);
  $adminid = ($_POST['Admin_id']);
  $count = 'SELECT * FROM account';
  $query = mysqli_query($con, $count) or die(mysqli_error($con));  
  $number = mysqli_num_rows($query);
  $id = 101 + $number;
  $same = 0;
  $query = "SELECT username, id FROM account WHERE id = 102";
  $result = mysqli_query($con, $query) or die(mysqli_error($con)); 
  while ($row = mysqli_fetch_array($result)) {
    extract($row);
      if($name == $username && $adminid == $id){
        $same = $same + 1;
      }
  }
  
if($same == 1){
  $_SESSION['nam'] = 'Dammy';
  header('Refresh: 1; URL="../admin.php"');      
  die();
}elseif($same == 0){
  header('Refresh: 1; URL=logsign-up.html?incorrectusername&Password=' . $_SERVER['PHP_SELF']);  
 }
} 

?>