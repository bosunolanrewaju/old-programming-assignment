<?php 
//Includes
include_once "db.php";

  if($_POST) {
    if($_POST['submit']) {
      switch ($_POST[type]) {
        case 'login':
          $username = $_POST['username'];
          $password = $_POST['password'];
          $query  = sprintf("SELECT uid FROM users WHERE username = '%s' AND password = '%s', $username, $password");
          $result = mysqli_query($GLOBALS['DB'], $query);
          if(mysqli_num_rows($result)) {
            $row = mysqli_fetch_assoc($result)
            header("dashboard.php?u=$username");
          }
          # code...
          break;
        
        default:
          # code...
          break;
      }
    }
  }

?>