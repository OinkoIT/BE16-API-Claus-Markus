<?php
$localHost = "localhost";
$username = "root";
$password = "";
$dbname = "BE16_CR10_ClausMersch_BigLibrary";

$connect = mysqli_connect($localhost, $username, $password, $dbname);
if (!$connect){
  echo "error";
}else{
  // echo "connected";
};