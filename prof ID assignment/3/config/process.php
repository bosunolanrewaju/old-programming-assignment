<?php 
  include_once "db.php";
  // NOTE: This is not recommended to use plain text password. 
  // Always, always store an encryted version of the password.
  if($_POST['submit']) {
    if ($_POST[type] == 'login' {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $query  = sprintf("SELECT uid FROM users WHERE username = '%s' AND password = '%s', $username, $password");
      $result = mysqli_query($GLOBALS['DB'], $query);
      if(mysqli_num_rows($result)) {
        $row = mysqli_fetch_assoc($result)
        header("dashboard.php?u=$username");
      }
    }
  }
?>
