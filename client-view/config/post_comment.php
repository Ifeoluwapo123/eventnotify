<?php
 session_start();
 include('../../database/DbConnectivity.php');
  if(isset($_SESSION['name'])){ 
  	if(isset($_POST['subCom']) && $_POST['comment'] != ""){
      $Comment = $_POST['comment'];
      $query = 'INSERT INTO comments (image_username, image_filename, comment_file) VALUES ("'.$_SESSION['name'].'", "'.$_SESSION['d'].'", "'.mysqli_real_escape_string($con, $Comment).'")'; 
      mysqli_query($con, $query) or die (mysqli_error($con));
      header('Refresh: 1; URL=../comment.php?imageid='.$_SESSION['d']);      
   die();
    }else{
        echo "Error: Empty Post. Check to fix error";
    ?>
       <a href=<?php echo "../comment.php?imageid=".$_SESSION['d']?>>Comment</a></li>
       <?php        
    }
?>

<?php
}else{
  header('Refresh: 1; URL=../logsign-up.html?redirect=' . $_SERVER['PHP_SELF']);      
   die();
}
?>