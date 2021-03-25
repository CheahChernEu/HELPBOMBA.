<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "helpbomba";
//
// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
//
// if(isset($_POST['delete'])){
//   $Checkbox = $_POST['checkbox'];
//
//   $sql = "SELECT * FROM `crisistrip` WHERE cTID = $Checkbox";
//   $check = mysqli_query($conn, $sql);
//
//
//   if(mysqli_num_rows($check)>0){
//     $sql1 = "DELETE FROM `crisistrip` WHERE cTID = $Checkbox";
//     $queryDelete = mysqli_query($conn,  $sql1);
//     if($queryDelete==null){
//        echo '<script> alert("Error occur! Please retry again!")</script>';
//        echo "<script> window.location.assign('ManageApplications.php'); </script>";
//     }else{
//      echo '<script> alert("Record deleted!")</script>';
//     echo "<script> window.location.assign('ManageApplications.php'); </script>";
//     }
//   }
//   else{
//       echo '<script> alert("Record does not exist!")</script>';
//       echo "<script> window.location.assign('ManageApplications.php'); </script>";
//   }
//
// }else{
//    echo '<script> alert("Error in deleting!")</script>';
//    echo "<script> window.location.assign('ManageApplications.php'); </script>";
// }




?>
