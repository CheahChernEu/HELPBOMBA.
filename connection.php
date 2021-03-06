<?php
 function db_connection($sql){

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "helpbomba";

   //Create connection
   $conn = new mysqli($servername,$username,$password, $dbname);

   //Check connection
   if($conn->connect_error){
     die("Connection Failed:".$conn->connect_error);
   }

   $resultObj = $conn->query($sql);

   return $resultObj->fetch_object();
 }

 ?>
