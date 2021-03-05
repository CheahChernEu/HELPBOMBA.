<?php
 function db_connection($sql){

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "HELPBOMBA";

   //Create fann_get_total_connections
   $conn = new mysqli($servername,$username,$password, $dbname);

   //Check fann_get_total_connection
   if($conn->connect_error){
     die("Connection Failed:".$conn->connect_error);
   }

   $resultObj = $conn->query($sql);

   return $resultObj->fetch_object();
 }

 ?>
