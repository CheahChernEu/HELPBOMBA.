<?php

$conn = mysqli_connect("localhost","root","","helpbomba");

$username = $_POST['usernameStaff'];
$password = $_POST['passwordStaff'];
$name = $_POST['nameStaff'];
$phoneNo = $_POST['phoneNoStaff'];
$position = $_POST['positionStaff'];
$dateJoined = $_POST['dateJoinedStaff'];


   $sql2 = "INSERT INTO `hbmember`(`username`, `password`, `name`, `contactNo`, `position`, `dateJoined` ) VALUES ('$username', '$password', '$name', '$phoneNo', '$position', '$dateJoined' )";

   $insert = mysqli_query($conn,$sql2);
   if(!$insert){
     echo"ERROR";
   }else{
     echo '<script> alert("This staff has been added successfully")</script>';
     echo "<script> window.location.assign('manager.php');</script>";
   }




 ?>
