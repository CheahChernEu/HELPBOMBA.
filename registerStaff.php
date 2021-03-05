<?php

include("connection.php");

function db_result($sql){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "HELPBOMBA";

  //Create onnection
  $conn = new mysqli($servername,$username,$password, $dbname);

  //Check connection
  if($conn->connect_error){
    die("Connection Failed:".$conn->connect_error);
  }

  $resultObj = $conn->query($sql);

  return $resultObj;
}

function registerStaff(){

                $username = $_POST['username'];













}







 ?>
