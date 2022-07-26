<?php

header('Content-Type: application/json');
header('Access-Control_Allow-Method: GET');
require_once 'dbConnect.php';
require_once 'toolBox.php';

if($_SERVER['REQUEST_METHOD'] == 'GET'){


  $sql2 = "SELECT * FROM data WHERE available = 1";
  $result2 = mysqli_query($connect, $sql2);
  if($result2){
    response(200, "Count available Books fetched", $result2->num_rows);
  }else{
    response(400, "Error");
  };
};
mysqli_close($connect);
