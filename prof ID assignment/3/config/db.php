<?php 
//Define constants
define("DB_HOST", "127.0.0.1");
define("DB_SCHEMA", "beefoods");
define("DB_USER", "beefoods");
define("DB_PASSWORD", "root");

$GLOBALS['DB'] = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_SCHEMA);

if(!$GLOBALS['DB']){
    die("Error: Unable to connect to the database");
}

if(!mysqli_select_db($GLOBALS['DB'], DB_SCHEMA)){
    die("Error: Unable to select database table (schema)");
}
?>