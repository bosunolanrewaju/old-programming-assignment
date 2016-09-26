<?php 
  //Define constants
  define("DB_HOST", "db_host");
  define("DB_SCHEMA", "db_schema");
  define("DB_USER", "db_user");
  define("DB_PASSWORD", "db_password");

  $GLOBALS['DB'] = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_SCHEMA);

  if(!$GLOBALS['DB']){
    die("Error: Unable to connect to the database");
  }

  if(!mysqli_select_db($GLOBALS['DB'], DB_SCHEMA)){
    die("Error: Unable to select database table (schema)");
  }
?>
