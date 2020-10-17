<?php
  include('../../database/DbConnectivity.php');
  $name = ($_POST['username']);
  $password1 = ($_POST['password']);
  $email1 = ($_POST['email']);

  $count = 'SELECT * FROM account';
  $query = mysqli_query($con, $count) or die(mysqli_error($con));  
  $number = mysqli_num_rows($query);

  $id = 101 + $number;
  $same = 0;

  $query = "SELECT username, email FROM account";
  $result = mysqli_query($con, $query) or die(mysqli_error($con)); 

  while ($row = mysqli_fetch_array($result)) {
    extract($row);
      if($name == $username || $email1 == $email){
        $same = $same + 1; 
      }
  }
  if($same >= 1){
    echo "username  or email already exists"."</br>";
    echo "click on the ok button to continue"."</br>";
    echo "<a href = '../logsign-up.html'>";
    echo "<button type = button> Ok </button>";
    echo "</a>";
    echo "<hr >";
    echo "</pre>";
  }elseif($same == 0){
    $query = "INSERT INTO account (id,username,password,email) VALUES($id,'$name','$password1','$email1')"; 
    mysqli_query($con, $query) or die(mysqli_error($con)); 

    echo " "."<hr >";
    echo "<pre style='margin-top: 40px; margin-left: 20px'>";
    echo "$name you have successfully registered"."</br>";
    echo "click on the ok button to continue"."</br>";
    echo "<a href = '../logsign-up.html'>";
    echo "<button type = button> Ok </button>";
    echo "</a>";
    echo "<hr >";
    echo "</pre>";
  }
 
?>