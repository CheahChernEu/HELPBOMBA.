<?php

include("connection.php");

function userLogin(){
//Connect to the database
  $sql = "SELECT * FROM HBMember WHERE username = '".$_POST ['username']."' and password = '".$_POST['password']."'";

$member = db_search($sql);

if($member != null ){

          $_SESSION['userID'] = $member->userID;
          $_SESSION['username'] = $member->username;
          $_SESSION['password'] = $member->password;
          $_SESSION['position'] = $member->position;

          switch ($_SESSION['position']) {
            case 'manager':
            if($_SESSION['userID'] == $_POST['userID']){

              echo "<script> window.location.assign('manager.php');</script>";
              break;
            }
            case 'staff':
              echo "<script type='text/javascript'> location.assign('staff.php')</script>";
              break;

            case 'volunteer':
              echo "<script type='text/javascript'> location.assign('manageVolunteerProfile.php')</script>";
              break;

            default:
              header("Location:homepage.php?error=usernotfound");
              echo "<script type='text/javascript'> location.assign('homepage.php')</script>";
              break;
            }
        }else{
          header("Location:homepage.php?error=invalidlogin");
          echo "<script type='text/javascript'> location.assign('homepage.php')</script>";
        }

}




 ?>
