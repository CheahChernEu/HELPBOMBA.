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

$username = $_POST['usernameStaff'];
$password = $_POST['passwordStaff'];
$name = $_POST['nameStaff'];
$phoneNo = $_POST['phoneNoStaff'];
$dateJoined = $_POST['dateJoinedStaff'];


  $sql1="SELECT * FROM `hbmember` WHERE username = '$username'";
  $select = db_search($sql1);
if($select!=null){
  echo '<script> alert("This staff has been existed")</script>';
  echo "<script> window.location.assign('manager.php');</script>";
}else{

   $sql2 = "INSERT INTO `hbmember`(`username`, `password`, `name`, `contactNo`, `position`, `dateJoined` ) VALUES ('$username', '$password', '$name', '$phoneNo', 'staff', '$dateJoined' )";

   $insert = mysqli_query($conn,$sql2);
   if(!$insert){
     echo"ERROR";
   }else{
     echo '<script> alert("This staff has been added successfully")</script>';
     echo "<script> window.location.assign('manager.php');</script>";
   }
}



 ?>
