<?php

$conn = mysqli_connect("localhost","root","","helpbomba");


function db_search($sql){

  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $dbname     = "helpbomba";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $result = $conn->query($sql);

  return $result->fetch_object();
}

$username = $_POST['signUpUsername'];
$password = $_POST['signUpPw'];
$position = $_POST['roleOptions'];

$sql1="SELECT * FROM `hbmember` WHERE username = '$username'";
$select = db_search($sql1);
if($select!=null){
  echo '<script> alert("This user has been existed")</script>';
  echo "<script> window.location.assign('login.php');</script>";
}else{
    $sq2 = "INSERT INTO `hbmember`( `username`, `password`, `position` ) VALUES ('$username','$password','$position')";
    $insert = mysqli_query($conn,$sq2);
    if(!$insert){
      echo"Sign Up Error";
    }else{
      echo '<script> alert("Sign Up Succesfully!")</script>';
      echo "<script> window.location.assign('homepage.php');</script>";
    }
  }
?>
