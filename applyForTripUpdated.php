<!DOCTYPE html>
<html>
    <head>
        <title>Apply For Trip</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="applyForTripUpdated.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light py-3 fixed-top bg">
                <div class="container">
                <a class="navbar-brand" href="homepage.php">HELPBOMBA.ORG</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars text-light" aria-hidden="true"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto float-right text-right">
                    <li class="nav-item">
                        <a class="nav-link ml-5" href="manageVolunteerProfile.php">Manage Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5" href="applyForTrip.php">Apply For Trip</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5" href="viewApplicationStatus.php">View Application</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5" href="homepage.php">Log Out</a>
                    </li>
                  </ul>
                </div>
                </div>
              </nav>
        </header>

        <div class="main">
            <div class="main-content">
                <h1>List of Crisis Trips</h1>
                <div class="d-flex w-100 justify-content-between">
                  <table align="center">
                    <tr>
                      <th>CTID</th>
                      <th>Type</th>
                      <th>Description</th>
                      <th>Date</th>
                      <th>Location</th>
                      <th>Minimum Duration</th>
                      <th>Number of Volunteers</th>
                      <th>Skill Requirement(s)</th>
                      <th>Available Slots</th>
                      <th>Operation</th>
                    </tr>
                    <?php
                    $servername = "localhost";
                    $username   = "root";
                    $password   = "";
                    $dbname     = "helpbomba";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM Trip";
                    $result = mysqli_query($conn, $sql);

                    if ($result -> num_rows > 0){
                      while ($row = $result -> fetch_assoc()){
                        echo "<tr><td> ".$row["cTID"]." </td><td> ".$row["cType"]." </td><td> ".$row["description"]." </td><td> ".$row["cTDate"]." </td><td> ".$row["location"]." </td><td> ".$row["minDuration"]." </td><td> ".$row["numVolunteers"]." </td><td> ".$row[
                          "skillRequirement(s)"]." </td><td> ".$row["availableSlots"]." </td><td><a href= '#alertModal' data-toggle = 'modal'>Apply</td></tr>";
                      }
                    }
                    else{
                      echo "0 result";
                    }
                    ?>
                  </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="alertModal" data-backdrop="static" data-keyboard="false" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Caution</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Are you sure you want to apply for this trip?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <input name="action" value="applyForTrip" hidden>
                <input type="submit" value = "Yes" class="btn btn-primary" data-dismiss="modal" onclick="applyMessage()"></input>
              </div>
            </div>
          </div>
        </div>

        <section id="contact">
          <footer class="py-5">
              <div class="container" py-5>
                  <div class="row">
                      <div class="col-md-5 col-sm-6">
                          <h2>HELP BOMBA Sdn. Bhd.</h2>
                          <p>Wisma Help, Jalan Dungun, Bukit Damansara,<br>50490 Kuala Lumpur,<br>Wilayah Persekutuan Kuala Lumpur</p>
                      </div>

                      <div class="col-md-4 col-sm-6">
                          <div class="footer-info">
                              <h2>Keep In Touch</h2>
                              <p><a href="#">016-1234567</a></p>
                              <p><a href="#">HELPBOMBA@gmail.com</a></p>
                              <p><a href="#">Our Location</a></p>
                          </div>
                      </div>

                      <div class="col-md-3 col-sm-12">
                          <div class="footer-info">
                              <h2>About Us</h2>
                              <p>HELP BOMBA is an NGO (Non-Government Organization) that aims to help people who are facing crises arising from natural disasters such as flood and earthquakes.</p>
                          </div>
                      </div>

                      <div class="col-md-12 col-12 text-center">
                          <div class="copyright-text">
                              <p>Copyright @ 2021 <a href="#">HELP BOMBA Organization</a></p>
                          </div>
                      </div>
                  </div>
              </div>
          </footer>
        </section>

        <script>
          function applyMessage(){
            alert("You have applied in the trip, please check your application status at manage profile section")
          }
        </script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
