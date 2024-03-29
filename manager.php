<!--
Student Name: CHEAH CHERN EU
Student ID: B1801196
-->

<?php
	require_once("function.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Manager Homepage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="managerStyling.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light py-3 fixed-top bg">
                <div class="container">
                <a class="navbar-brand" href="manager.php">HELPBOMBA.ORG</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars text-light" aria-hidden="true"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto float-right text-right">
                    <li class="nav-item ml-4">

                      <!-- User profile icon !-->
                       <div class="dropdown" style="width:auto;height:auto;">
                        <button type="button" class="navbar-brand btn btn-dark dropdown-toggle" data-toggle="dropdown"
                        <i onclick="dropdown(this)" style="width:100px; height:auto; font-size:15px; color:white;"> Profile </i>
                         </button>

                         <!-- Dropdown options !-->
                        <div class="dropdown-menu">
													<a class="dropdown-item" href="#"> ID: <?php echo $_SESSION["userID"]; ?> </a>
                          <a class="dropdown-item" href="#"> Username: <?php echo $_SESSION["username"]; ?> </a>
                          <a class="dropdown-item" href="#"> Name: <?php echo $_SESSION["name"]; ?> </a>
                          <a class="dropdown-item" href="#"> Position: <?php echo $_SESSION["position"]; ?> </a>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5" data-toggle="modal" data-target="#recordModal">Record New Staff </a>
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
            <div class = "container">
                <div class="row pt-5">
                    <div class="home-text col-mid-8 col-sm-12 mt-5">
                        <h1>Welcome Back!  <?php echo $_SESSION["name"]; ?></h1>
                        <p>Start your day with your happy smile!</p>
                        <ul class="section-btn">
                          <button type="button" data-toggle="modal" data-target="#recordModal"><span data-hover="Record New Staff">Record New Staff Here!</span></button>
                        </ul>
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

        <!-- Pop Up Modal for record new staff -->
    <form name="staffForm" id="staffForm" action="function.php" method="POST">
        <div class="modal fade" id="recordModal" tabindex="-1" role="dialog" aria-labelledby="recordModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document" >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="recordModalLabel">Record New Staff</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                  <label for="email" class="col-form-label">Username: @eg:123test@gmail.com</label>
                  <input type="email" class="form-control" id="username" name="usernameStaff" onkeyup="checkEmail(); return false;" placeholder="username" required>
                  <div id="errorName"></div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-form-label">Password:</label>
                  <input type="password" id="password" name="passwordStaff" class="form-control" onkeyup="checkPass(); return false;"  minlength="8" placeholder="password" required>
                  <div id="error"></div>
                </div>
                <div class="form-group">
                  <label for="name" class="col-form-label">Name:</label>
                  <input type="text" class="form-control" id="name" name="nameStaff" placeholder="name" required>
                </div>
                <div class="form-group">
                  <label for="phoneNo" class="col-form-label">Phone Number: @eg:0186657886</label>
                  <input type="tel" class="form-control" id="phoneNo" name="phoneNoStaff" onkeyup="checkphoneNo(); return false;" placeholder="phone number" required>
                  <div id="errorNo"></div>
                </div>
                <div class="form-group">
                  <label for="dateJoined" class="col-form-label">Date-Joined:</label>
                  <input type="date" class="form-control" id="dateJoined" name="dateJoinedStaff" placeholder="date-joined" required>
                </div>

            </div>
            <div class="modal-footer">
              <input name="action" value="registerStaff" hidden>
              <input name="submit" id="submit" type="submit" class="btn btn-primary" value="Submit"  onsubmit="usernameBlankValidation(),passwordBlankValidation(),nameBlankValidation(),phoneNoBlankValidation(),positionBlankValidation(),dateBlankValidation(),phoneNumValidation(),positionValidation(),evalDate(), checkEmail(),nameValidation()">

              <button name="close" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </form>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">
        // Only allow today as the max date can be pick, and dsiable future date to be pick from.
        var date = new Date().toISOString().slice(0,10);

        //To restrict future date
          $('#dateJoined').attr('max', date);

        // check the black field
        function usernameBlankValidation(){
          if(document.getElementById('username').value == ''){
            alert("Username input cannot be blank")
            document.getElementById('username').focus();
            throw new Error("This is not an error. This is just to abort javascript.")
          }
        }

        function passwordBlankValidation(){
          if(document.getElementById('password').value == ''){
            alert("Password input cannot be blank")
            document.getElementById('password').focus();
            throw new Error("This is not an error. This is just to abort javascript.")
          }
        }

        function nameBlankValidation(){
          if(document.getElementById('name').value == ''){
            alert("Name input cannot be blank")
            document.getElementById('name').focus();
            throw new Error("This is not an error. This is just to abort javascript.")
          }
        }

        function nameValidation(){
            var letter = /^[a-z]*$/i;
            if((!(document.getElementById('name').value).match(letter))){
                alert("Please fill in input letters only in the Name section")
                document.getElementById('name').focus();
                throw new Error("This is not an error. This is just to abort javascript.")
            }
        }

        function phoneNoBlankValidation(){
          if(document.getElementById('phoneNo').value == ''){
            alert("Phone Number input cannot be blank")
            document.getElementById('phoneNo').focus();
            throw new Error("This is not an error. This is just to abort javascript.")
          }
        }

        function dateBlankValidation(){
          if(document.getElementById('dateJoined').value == ''){
            alert("Date Joined input cannot be blank")
            document.getElementById('dateJoined').focus();
            throw new Error("This is not an error. This is just to abort javascript.")
          }
        }

        // check the password input
        function checkPass()
        {
          var pass = document.getElementById('password');
          var message = document.getElementById('error');
          var goodColor = "#66cc66";
          var badColor = "#ff6666";

          if(pass.value.length > 8)
          {
            pass.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Good to proceed!"
          }
          else
          {
            pass.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = " Please enter at least 8 characters!"
          }
        }

        // check the email input
        function checkEmail()
        {
          var email = document.getElementById('username');
          var message = document.getElementById('errorName');
          var goodColor = "#66cc66";
          var badColor = "#ff6666";
          var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

          if(email.value.match(filter))
          {
            email.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Email is valid, please proceed!"
          }
          else
          {
            email.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = " Please enter valid email address!"
          }
      }

      function checkphoneNo()
      {
        var phoneNo = document.getElementById('phoneNo');
        var message = document.getElementById('errorNo');
        var goodColor = "#66cc66";
        var badColor = "#ff6666";

        if(phoneNo.value.length > 9 && phoneNo.value.length < 14 )
        {
          phoneNo.style.backgroundColor = goodColor;
          message.style.color = goodColor;
          message.innerHTML = "Good to proceed!"
        }
        else
        {
          phoneNo.style.backgroundColor = badColor;
          message.style.color = badColor;
          message.innerHTML = " Please enter correct phone number!"
        }
      }


        function phoneNumValidation(){
            var words = /^[a-z]*$+/-i;
            if(document.getElementById('phoneNo').value.match(words) ){
                alert("Please fill in numbers input only in the phone number section @eg: 0189590899 without +,-")
                document.getElementById('phoneNo').focus();
                throw new Error("This is not an error. This is just to abort javascript.")
            }
        }

        function validateDate(date)
        {
            // First check for the pattern
            if(!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(date))
                return false;

            // Parse the date parts to integers
            var portions = date.split("/");
            var day = parseInt(portions[0], 10);
            var month = parseInt(portions[1], 10);
            var year = parseInt(portions[2], 10);

            // Check the ranges of month and year
            if(year < 1000 || year > 3000 || month == 0 || month > 12)
                return false;

            var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];

            // Adjust for leap years
            if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
                monthLength[1] = 29;

            // Check the range of the day
            return day > 0 && day <= monthLength[month - 1];
        };


        function evalDate(){
        // define date string to test
          var JoinedDate = document.getElementById('dateJoined').value;
        // check date and print message
            if (!validateDate(JoinedDate)) {
                alert('Invalid date format')
                document.getElementById('dateJoined').focus();
                throw new Error("This is not an error. This is just to abort javascript.")
            }
        }

        </script>
    </body>
</html>
