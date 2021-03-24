<?php
session_start();


// To decide which function
if(isset($_POST['action'])) {
  if (isset($_SESSION['error'])){
    unset($_SESSION['error']);
  }

  // determine which form
  switch ($_POST['action']) {
    // login function
    case 'login':
      userLogin();
      break;
    // manage profile function
    case 'manageProfile':
      manageVolunteerProfile();
      break;

    case 'registerStaff':
      registerStaff();
      break;

    case 'createTrip':
      createTrip();
      break;

    case 'updateApp':
      updateApp();
      break;

    case 'updateSlots':
      updateSlots();
        break;
    case 'applyForTrip':
      applyForTrip();
      break;

    case 'viewApp':
      selectApplication();
      break;


    case 'tripDel':
      tripDel();
      break;

    case 'selectDoc':
      selectDocument();
      break;
  }
}

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

// for result of insert, update an existing object
function db_result($sql){
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
  return $result;
}


//For return id after insert object
function db_insert($sql){

  $servername = "127.0.0.1";
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

  return $conn->insert_id;
}


function userLogin(){
$sql = "SELECT * FROM hbmember where username = '" . $_POST['username'] . "' and password = '" . $_POST['password'] . "'";

  $member = db_search($sql);

  if($member != null){
    $_SESSION['userID'] = $member->userID;
    $_SESSION['username'] = $member->username;
    $_SESSION['password'] = $member->password;
    $_SESSION['name'] = $member->name;
    $_SESSION['position'] = $member->position;

    switch ($_SESSION['position']) {
     case 'manager':
        header("Location:manager.php?position=manager");
        echo "<script> window.location.assign('manager.php'); </script>";
        break;
     case 'staff':
        header("Location:staff.php?position=staff");
        echo "<script> window.location.assign('staff.php'); </script>";
        break;
     case 'volunteer':
        header("Location:volunteerHomepage.php?position=volunteer");
        echo "<script> window.location.assign('volunteerHomepage.php'); </script>";
        break;
      default:
        header("Location:homepage.php?error=usernotfound");
        echo "<script> window.location.assign('homepage.php'); </script>";
        break;
       }
  }
  else {
        echo '<script> alert("Invalid username or password! You will be redirect to HELP Bomba Homepage ")</script>';
        echo "<script> window.location.assign('homepage.php'); </script>";
  }


}

function manageVolunteerProfile(){
  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $dbname     = "helpbomba";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  $oldpassword = $_POST['oldpassword'];
  $sql = "UPDATE hbmember SET password = '$_POST[newpassword]', name = '$_POST[name]', contactNo = '$_POST[phoneno]' WHERE password = '$oldpassword' AND userID = '".$_SESSION['userID']."'";
  $sql_run = mysqli_query($conn, $sql);

  if ($sql_run){
    $documenttype = $_POST['documenttype'];
    $dateofexpiry = $_POST['dateofexpiry'];

    $file = $_FILES['fileupload']['name'];

    $sql2 = "SELECT * FROM `Document` WHERE userID_fk = '".$_SESSION['userID']."'";
    $result = db_search($sql2);
    if ($result == null){
      $sql3 = "INSERT INTO `Document`(`documentType`, `expiryDate`, `docImage`, `userID_fk`) VALUES ('$documenttype', '$dateofexpiry', '$file', '".$_SESSION['userID']."')";
      $sql3_run = mysqli_query($conn, $sql3);
      if ($sql3_run){
        echo '<script type="text/javascript">alert("All Data Updated and New Document Inserted")</script>';
        echo "<script> window.location.assign('volunteerHomepage.php'); </script>";
      }
      else{
        echo '<script type="text/javascript">alert("Document Type, Date of Expiry and File Not Inserted")</script>';
        echo "<script> window.location.assign('volunteerHomepage.php'); </script>";
      }
    }
    else{
      $sql4 = "UPDATE Document SET documentType = '$documenttype', expiryDate = '$dateofexpiry', docImage = '$file' WHERE userID_fk = '".$_SESSION['userID']."'";
      $sql4_run = mysqli_query($conn, $sql4);
      if ($sql4_run){
        echo '<script type="text/javascript">alert("All Data and Document Updated")</script>';
        echo "<script> window.location.assign('volunteerHomepage.php'); </script>";
      }
      else{
        echo '<script type="text/javascript">alert("Document Type, Date of Expiry and File Not Updated")</script>';
        echo "<script> window.location.assign('volunteerHomepage.php'); </script>";
      }
    }
  }
  else{
    echo '<script type="text/javascript">alert("All Data Not Updated")</script>';
    echo "<script> window.location.assign('manageVolunteerProfile.php'); </script>";

  }
}

function registerStaff(){
  $conn = mysqli_connect("localhost","root","","helpbomba");
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
}

function createTrip(){
  $conn = mysqli_connect("localhost","root","","helpbomba");
  $tripDate = $_POST['tripDate'];
  $location = $_POST['location'];
  $description = $_POST['description'];
  $cType = $_POST['cType'];
  $minDuration = $_POST['minDuration'];
  $skillReq = $_POST['skillReq'];
  $numVolunteers = $_POST['numVolunteers'];
  $userID = $_SESSION['userID'];

  $sql1="SELECT * FROM `crisistrip` WHERE cTDate = '$tripDate'";
  $select = db_search($sql1);
if($select!=null){
  echo '<script> alert("On this date, there is another crisis trip being held, Please choose a different date for the new trip!")</script>';
  echo "<script> window.location.assign('staff.php');</script>";
}else{

   $sql2 = "INSERT INTO `crisistrip`( `cType`, `description`, `cTDate`, `location`, `minDuration`, `numVolunteers`, `skillRequirement(s)`, `availableSlots`, `userID_fk`) VALUES ('$cType', '$description', '$tripDate', '$location', '$minDuration', '$numVolunteers', '$skillReq', '$numVolunteers', '$userID')";

   $insert = mysqli_query($conn,$sql2);
   if(!$insert){
     echo"ERROR";
   }else{
     echo '<script> alert("This crisis trip has been created successfully")</script>';
     echo "<script> window.location.assign('staff.php');</script>";
   }
 }
}




function updateApp(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "helpbomba";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

    $applicationID = $_POST['applicationID'];
    $documentID = $_POST['documentID'];
    $statusUpdate = $_POST['statusUpdate'];
    $remarks = $_POST['remarks'];

    $sql = "SELECT * FROM `application` WHERE applicationID = $applicationID";
    $check = mysqli_query($conn, $sql);


    if(mysqli_num_rows($check)>0){
      $sql1 = "UPDATE `application` SET `applicationStatus`= '$statusUpdate', `remarks`= '$remarks' WHERE documentID = $documentID and applicationID = $applicationID ";
      $queryUpdate = mysqli_query($conn,  $sql1);
      if($queryUpdate==null){
         echo '<script> alert("Error occur! Please retry again!")</script>';
         echo "<script> window.location.assign('Application.php'); </script>";

      }else{
       echo '<script> alert("Application status has been updated!")</script>';
       echo "<script> window.location.assign('Application.php'); </script>";
      }
    }
    else{
        echo '<script> alert("This application does not exist!")</script>';
        echo "<script> window.location.assign('Application.php'); </script>";
    }
}

function tripDel(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "helpbomba";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if(isset($_POST['delete'])){
    $Checkbox = $_POST['checkbox'];

    $sql = "SELECT * FROM `crisistrip` WHERE cTID = $Checkbox";
    $check = mysqli_query($conn, $sql);


    if(mysqli_num_rows($check)>0){
      $sql1 = "DELETE FROM `crisistrip` WHERE cTID = $Checkbox";
      $queryDelete = mysqli_query($conn,  $sql1);
      if($queryDelete==null){
         echo '<script> alert("Error occur! Please retry again!")</script>';
         echo "<script> window.location.assign('ManageApplications.php'); </script>";
      }else{
       echo '<script> alert("Record deleted!")</script>';
      echo "<script> window.location.assign('ManageApplications.php'); </script>";
      }
    }
    else{
        echo '<script> alert("Record does not exist!")</script>';
        echo "<script> window.location.assign('ManageApplications.php'); </script>";
    }

  }else{
     echo '<script> alert("Error in deleting!")</script>';
     echo "<script> window.location.assign('ManageApplications.php'); </script>";
  }
}


// function updateSlots(){
//   $servername = "localhost";
//   $username = "root";
//   $password = "";
//   $dbname = "helpbomba";
//
//   // Create connection
//   $conn = mysqli_connect($servername, $username, $password, $dbname);
//   // Check connection
//   if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
//   }
//
//   $statusUpdate = $_POST['statusUpdate'];
//   if($statusUpdate == 'accepted'){
//     $sql = "UPDATE `crisistrip` SET `availableSlots`= 'availableSlots - 1' FROM crisistrip INNER JOIN application ON crisistrip.cTID = application.cTID";
//     mysqli_query($conn,  $sql);
//   } else {
//     echo '<script> alert("Available Slots are not updated!")</script>';
//     echo "<script> window.location.assign('Application.php'); </script>";
//   }



function applyForTrip(){
  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $dbname     = "helpbomba";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  if (isset($_POST['applyForTrip'])){
    $sql1 = "SELECT * FROM Document WHERE userID_fk = '".$_SESSION['userID']."'";
    $result = mysqli_query($conn, $sql1);
    if ($result -> num_rows > 0){
      while ($row = $result -> fetch_assoc()){
        $documentID_fk = $row["documentID"];
      }
    }
    else{
      echo '<script type="text/javascript">alert("The volunteer does not have a document")</script>';
    }

    $date = date('Y-m-d H:i:s');
    $sql2 = "INSERT INTO `Application`(`applicationDate`, `applicationStatus`, `userID_fk`, `tripID_fk`, `documentID_fk`) VALUES ('$date', 'NEW', '".$_SESSION['userID']."', '$_POST[hidden]', '$documentID_fk')";


    $sql2_run = mysqli_query($conn, $sql2);


    if ($sql2_run){
      echo '<script type="text/javascript">alert("Applied successfully")</script>';
      echo "<script> window.location.assign('volunteerHomepage.php'); </script>";

    }
    else{
      echo '<script type="text/javascript">alert("Applied unsuccesfully")</script>';
      echo "<script> window.location.assign('volunteerHomepage.php'); </script>";

    }
  }
  else{
    echo '<script type="text/javascript">alert("Error Occur")</script>';
    echo "<script> window.location.assign('volunteerHomepage.php'); </script>";
  }

}

function selectTrip(){
  $conn = mysqli_connect("localhost","root","","helpbomba");
  $userid =  $_SESSION['userID'];
  $query = "SELECT * FROM crisistrip c inner join hbmember m WHERE c.userID_fk = $userid and m.userID = $userid and c.cTDate>=CURDATE()";

  return $query;
}

function selectApplication(){
  $conn = mysqli_connect("localhost","root","","helpbomba");
  $tripID = $_POST['viewApp'];
  $query = "SELECT * FROM application a inner join crisistrip c WHERE a.cTID = $tripID and c.cTID = $tripID and a.applicationDate>=CURDATE()" ;
  echo "<script> window.location.assign('Application.php');</script>";
  return $query;
}

// function selectDocument(){
//   $conn = mysqli_connect("localhost","root","","helpbomba");
//   $documentID = $_POST['viewDoc'];
//   $query = "SELECT * FROM document d inner join application a  WHERE  d.documentID = $documentID and a.documentID_fk = $documentID"  ;
//   return $query;
// }







?>
