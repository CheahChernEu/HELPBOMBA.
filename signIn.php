<?php

include("connection.php");

function userLogin(){
//Connect to the database
  $sql = "SELECT * FROM HBMember WHERE username = '".$_POST ['username']."' and password = '".$_POST['password']."'";

$member = db_search($sql);

if($member != null )

          $_SESSION['userID'] = $member->userID;
          $_SESSION['username'] = $member->username;
          $_SESSION['password'] = $member->password;
          $_SESSION['position'] = $member->position;

          switch ($_SESSION['position']) {
            case 'manager':
            if($_SESSION['userID'] == 1){
              echo "<script> window.location.assign('manager.php');</script>";
              break;

            case'staff':
            echo <script> window.location.assign('staff.php');</script>;
            break;

            case'volunteer':
            echo <script> window.location.assign('manageVolunteerProfile.php');</script>;
            break;

            default:
              header("Location:homepage.php?error=usernotfound");
              echo <script> window.location.assign('homepage.php');</script>;
              break;
          }










}


 ?>
