<?php

$conn = mysqli_connect("localhost","root","","helpbomba");

$username = $_POST['signUpUsername'];
$password =$_POST['signUpPw'];
$position =$_POST['roleOptions'];

$sql = "INSERT INTO `hbmember`( `username`, `password`, `position` ) VALUES ('$username','$password','$position')";
$insert = mysqli_query($conn,$sql);
if(!$insert){
  echo"ERROR";
}else{
  header("Location: E:\SEP\Xampp\htdocs\SEP assignment 2 - latest");
}
 ?>
