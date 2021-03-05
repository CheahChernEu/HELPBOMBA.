<!DOCTYPE html>
<html>
    <head>
        <title>ManagerHomepage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" type="text/css" href="managerstyling.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light py-3 fixed-top bg">
                <div class="container">
                <a class="navbar-brand" href="#">CRS.ORG</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars text-light" aria-hidden="true"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto float-right text-right">
                    <li class="nav-item">
                        <a class="nav-link ml-5" href="#aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5" href="#picture">Picture Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5" href="#staff">Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5" href="login.php">SignUp/LogIn</a>
                    </li>
                  </ul>
                </div>
                </div>
              </nav>
        </header>

        <section id = "home">
            <video controls="" autoplay="" muted="" loop="">
                <source src="naturaldisastervideo.mov" type="video/mp4">
            </video>

            <div class = "container">
                <div class="row pt-5">
                    <div class="home-text col-mid-8 col-sm-12 mt-5">
                        <h1>We value life above everything</h1>
                        <p>Chance to be a citizen HERO</p>
                        <p>Together working for the greater good</p>
                        <p>Let us stay united!</p>
                    </div>
                </div>
            </div>

            <div class="overlay"></div>
        </section>

        <section id="aboutus">
            <div class="container py-5">
                <div class="row py-5 my-5">
                    <div class="aboutus-text text-center py-5 col-md-10 col-sm-12 mx-auto">
                        <h1 class="pb-3">About Us</h1>
                        <h2>Crisis Relief Services (CRS) is an NGO (Non-Government Organization) that aims to help people who are facing crises arising from natural disasters such as flood and earthquakes.</h2>
                    </div>
                </div>
            </div>
        </section>

        <section id="picture" class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="picture-item">
                            <a href="image1.jpg">
                                <img src="image1.jpg" alt="Image1" class="img-fluid">
                                <div class="picture-overlay">
                                  <div class="picture-info">
                                    <h1>Volunteers do not necessarily have the time,<br> they just have the heart</h1>
                                    <h3> Click to pop!</h3>
                                  </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="picture-item">
                            <a href="image2.jpg">
                                <img src="image2.jpg" alt="Image1" class="img-fluid">
                                <div class="picture-overlay">
                                  <div class="picture-info">
                                    <h1>"Only a life lived for others is worth living</h1>
                                    <h3> Click to pop!</h3>
                                  </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="picture-item">
                            <a href="image3.jpg">
                                <img src="image3.jpg" alt="Image1" class="img-fluid">
                                <div class="picture-overlay">
                                  <div class="picture-info">
                                    <h1>Volunteers are not paid, not because they are worthless, <br>but because they are priceless</h1>
                                    <h3> Click to pop!</h3>
                                  </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="picture-item">
                            <a href="image4.jpg">
                                <img src="image4.jpg" alt="Image1" class="img-fluid">
                                <div class="picture-overlay">
                                  <div class="picture-info">
                                    <h1>Volunteer, <br> Lend a hand and make a difference</h1>
                                    <h3> Click to pop!</h3>
                                  </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="staff" class="h-100">
            <div class="container py-5">
                <h1 class="text-center">Meet Our Staff</h1>
                <!-- Swiper -->
                <div class="swiper-container py-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide col-lg-3 col-md-6 col-sm-12">
                            <img src="avatar1.png" class="img-fluid">
                            <div class="text pt-2">
                                <h3>Johan Yu Han<br><span>CRS Manager</span></h3>
                            </div>
                        </div>
                        <div class="swiper-slide col-lg-3 col-md-6 col-sm-12">
                            <img src="avatar2.png" class="img-fluid">
                            <div class="text pt-2">
                                <h3>Amelia Lee<br><span>CRS Manager</span></h3>
                            </div>
                        </div>
                        <div class="swiper-slide col-lg-3 col-md-6 col-sm-12">
                            <img src="avatar3.png" class="img-fluid">
                            <div class="text pt-2">
                                <h3>Daniel Cheah Hao Ming<br><span>CRS Staff</span></h3>
                            </div>
                        </div>
                        <div class="swiper-slide col-lg-3 col-md-6 col-sm-12">
                            <img src="avatar4.png" class="img-fluid">
                            <div class="text pt-2">
                                <h3>Kenin Tan Hui Ling<br><span>CRS Staff</span></h3>
                            </div>
                        </div>
                        <div class="swiper-slide col-lg-3 col-md-6 col-sm-12">
                            <img src="avatar5.png" class="img-fluid">
                            <div class="text pt-2">
                                <h3>Ismail<br><span>CRS Staff</span></h3>
                            </div>
                        </div>
                        <div class="swiper-slide col-lg-3 col-md-6 col-sm-12">
                            <img src="avatar6.png" class="img-fluid">
                            <div class="text pt-2">
                                <h3>Leonardo Oh Feng Heng<br><span>CRS Staff</span></h3>
                            </div>
                        </div>
                        <div class="swiper-slide col-lg-3 col-md-6 col-sm-12">
                            <img src="avatar7.png" class="img-fluid">
                            <div class="text pt-2">
                                <h3>Michelle Yong Hui Wenn<br><span>CRS Staff</span></h3>
                            </div>
                        </div>
                        <div class="swiper-slide col-lg-3 col-md-6 col-sm-12">
                            <img src="avatar8.png" class="img-fluid">
                            <div class="text pt-2">
                                <h3>Lim Hui Mei<br><span>CRS Staff</span></h3>
                            </div>
                        </div>
                        <div class="swiper-slide col-lg-3 col-md-6 col-sm-12">
                            <img src="avatar9.png" class="img-fluid">
                            <div class="text pt-2">
                                <h3>Jonathan Lee Jiun Sheng<br><span>CRS Staff</span></h3>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>



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
                <form name="staffForm" id="staffForm" action="manager.html">
                  <div class="form-group">
                    <label for="email" class="col-form-label">Username: @eg:123test@gmail.com</label>
                    <input type="email" class="form-control" id="username" placeholder="username" required>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-form-label">Password:</label>
                    <input type="password" id="password" class="form-control" minlength="8" placeholder="password" required>
                  </div>
                  <div class="form-group">
                    <label for="name" class="col-form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="name" required>
                  </div>
                  <div class="form-group">
                    <label for="phoneNo" class="col-form-label">Phone Number: @eg:0186657886</label>
                    <input type="tel" class="form-control" id="phoneNo" placeholder="phone number" required>
                  </div>
                  <div class="form-group">
                    <label for="position" class="col-form-label">Position:</label>
                    <input type="text" class="form-control" id="position" placeholder="position" required>
                  </div>
                  <div class="form-group">
                    <label for="dateJoined" class="col-form-label">Date-Joined:</label>
                    <input type="date" class="form-control" id="dateJoined" name="dateJoined" placeholder="date-joined" required>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button name="submit" id="submit" type="button" class="btn btn-primary" value="Submit"  onsubmit="usernameBlankValidation(),passwordBlankValidation(),nameBlankValidation(),phoneNoBlankValidation(),positionBlankValidation(),dateBlankValidation(),phoneNumValidation(),positionValidation(),evalDate(), checkDateAfter(),validateEmail(),checkPasswordLen(),validatePhone()">Submit</button>
                <button name="close" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

<!-- modal for manage application -->
        <div class="modal fade" id="manageModal" tabindex="-1" role="dialog" aria-labelledby="manageModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document" >
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="manageModalLabel">Manage Crisis Trip Application</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                  <div class="tableList">
                    <table>
                      <tr>
                        <th>Trip ID</th>
                        <th>Trip Type</th>
                        <th>Trip Date</th>
                        <th>Trip Location</th>
                        <th>Skill Requirement(s)</th>
                      </tr>
                    </table>
                  </div>
                  <div class="">
                    <p class="d-flex justify-content-center align-items-center">
                      <span class="me-3" style="color: black; font-size: 12px;font-weight:bold;">Please fill in the Trip ID that you want! </span>
                      <input type="integers" name="tripID">
                    </p>
                  </div>

              </div>
              <div class="modal-footer">
                <button name="submit" type="button" class="btn btn-primary">Submit</button>
                <button name="close" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <section id="features" class="text-center text-white">
          <div class="container p-4 pb-0">
          <h2>Record New Staff / Manage Application</h2>
      <!-- Section: CTA -->
          <section class="">
            <p class="d-flex justify-content-center align-items-center">
              <span class="me-3" style="color: black; font-size: 28px;font-weight:bold;">Record New Staff : </span>
              <button type="button" id="btnRecord" class="btn btn-outline-light btn-rounded" data-toggle="modal" data-target="#recordModal">Record Staff Here!</button>
            </p>
            <p class="d-flex justify-content-center align-items-center">
              <span class="me-3" style="color: black; font-size: 28px;font-weight:bold;">Manage Application : </span>
              <button type="button" id="btnManage" class="btn btn-outline-dark btn-rounded" data-toggle="modal" data-target="#manageModal">Manage Application Here!</button>
            </p>
          </section>
      <!-- Section: CTA -->
          </div>
        </section>





        <section id=contact>
          <footer class="py-5">
              <div class="container" py-5>
                  <div class="row">
                      <div class="col-md-5 col-sm-6">
                          <h2>CRS Sdn. Bhd.</h2>
                          <p>Wisma Help, Jalan Dungun, Bukit Damansara,<br>50490 Kuala Lumpur,<br>Wilayah Persekutuan Kuala Lumpur</p>
                      </div>

                      <div class="col-md-4 col-sm-6">
                          <div class="footer-info">
                              <h2>Keep In Touch</h2>
                              <p><a href="#">016-1234567</a></p>
                              <p><a href="#">crs@gmail.com</a></p>
                              <p><a href="#">Our Location</a></p>
                          </div>
                      </div>

                      <div class="col-md-3 col-sm-12">
                          <div class="footer-info">
                              <h2>About Us</h2>
                              <p>Crisis Relief Services (CRS) is an NGO (Non-Government Organization) that aims to help people who are facing crises arising from natural disasters such as flood and earthquakes.</p>
                          </div>
                      </div>

                      <div class="col-md-12 col-12 text-center">
                          <div class="copyright-text">
                              <p>Copyright @ 2021 <a href="#">CRS Organization</a></p>
                          </div>
                      </div>
                  </div>
              </div>
          </footer>
        </section>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script>
            $(window).scroll(function(){
                $('nav').toggleClass('scrolled',$(this).scrollTop()>50)
            })
        </script>
        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 105,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            centeredSlides: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            });

            // Only allow today as the max date can be pick, and dsiable future date to be pick from.
            var date = new Date().toISOString().slice(0,10);

            //To restrict future date
              $('#dateJoined').attr('max', date);

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

            function phoneNoBlankValidation(){
              if(document.getElementById('phoneNo').value == ''){
                alert("Phone Number input cannot be blank")
                document.getElementById('phoneNo').focus();
                throw new Error("This is not an error. This is just to abort javascript.")
              }
            }

            function positionBlankValidation(){
              if(document.getElementById('position').value == ''){
                alert("Position input cannot be blank")
                document.getElementById('position').focus();
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

            function checkPasswordLen()
            {
              var textLength = document.getElementById("password").value.length;

              if( textLength<=8)
              {
                alert('Please enter correct password')
                document.getElementById("password").focus();
                throw new Error("This is not an error. This is just to abort javascript.")
              }
            }



            function validateEmail(){

              var email = document.getElementById("username").value;
            var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

            if(email.match(pattern))
            {
              alert('Your Email address is valid')
              document.getElementById("password").focus();
              throw new Error("This is not an error. This is just to abort javascript.")
            }
            else
            {
              alert('Please enter correct address')
              document.getElementById("username").focus();
              throw new Error("This is not an error. This is just to abort javascript.")
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




            function positionValidation(){
              var staff = 'staff'.toLowerCase();
              if (!(document.getElementById('position').value.toLowerCase() === staff))
              alert("Please just fill in position Staff only!")
              document.getElementById('position').focus();
              throw new Error("This is not an error. This is just to abort javascript.")
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
                    alert('Invalid date format');
                    document.getElementById('dateJoined').focus();
                    throw new Error("This is not an error. This is just to abort javascript.")
                }
            }












        </script>
    </body>
</html>
