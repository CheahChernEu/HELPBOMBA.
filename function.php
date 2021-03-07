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
        header("Location:homepage.php?error=usernotdefined");
        echo "<script> window.location.assign('homepage.php'); </script>";
        break;
       }
  }
  else {
        header("Location:homepage.php?error=invalidlogin");
        echo '<script type="text/javascript">alert("Invalid username or password")</script>';
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

    $sql2 = "INSERT INTO `Document`(`documentType`, `expiryDate`, `docImage`, `userID_fk`) VALUES ('$documenttype', '$dateofexpiry', '$file', '".$_SESSION['userID']."')";
    $sql2_run = mysqli_query($conn, $sql2);
    if ($sql2_run){
      echo '<script type="text/javascript">alert("All Data Updated")</script>';
      echo "<script> window.location.assign('volunteerHomepage.php'); </script>";
    }
    else{
      echo '<script type="text/javascript">alert("Document Type, Date of Expiry and File Not Updated")</script>';
      echo "<script> window.location.assign('volunteerHomepage.php'); </script>";
    }
  }
  else{
    echo '<script type="text/javascript">alert("All Data Not Updated")</script>';
    echo "<script> window.location.assign('manageVolunteerProfile.php'); </script>";

  }
}






?>
