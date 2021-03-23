<?php
	require_once("function.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Application Homepage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="staffCSS.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light py-3 fixed-top bg">
                <div class="container">
                <a class="navbar-brand" href="staff.php">HELPBOMBA.ORG</a>
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

                        <a class="nav-link ml-5" href="staff.php">Organize Trip</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5" href="ManageApplications.php" >Manage Applications</a>
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
            <div class = "container" style="overflow-x:auto;">

                <div class="row pt-5" table-wrapper-scroll-y my-custom-scrollbar>
                    <div class="home-text col-md-12 col-sm-12 mt-5">
                      <?php
                      //connect to mysql
                        $conn = new mysqli("localhost","root","", "helpbomba");
                        if ($conn->connect_error){
                          die("Connection failure: " . mysqli_connect_error());
                        }

                        // use table
                        $document = "use document";
                        $conn->query($document);
                        $docSql = selectDocument();
                        $docRes = mysqli_query($conn, $docSql);

                        $resultDoc = mysqli_query($conn, $docSql) or die("Database error existed:". mysqli_error($conn));

                        //use table
                        $application = "use application";
                        $conn->query($application);
                        $sql = selectApplication();
                        $result = mysqli_query($conn, $sql);

                        //fetch the data from database
                        $resultArray = mysqli_query($conn, $sql) or die("Database error existed:". mysqli_error($conn));
                        //if crisis trip table doesnt have data, display the message
                        if (mysqli_num_rows($result) == 0 ) { ?>
                          <h2>There are no application currently!</h2>
                        <?php }
                        else {
                        ?>
                        <!-- if have crisis trip -->
                        <h3>Lists of Application Table</h3>

                        <!-- All crisis trip that staff in-charge !-->

                        <table id="table-row" class="table table-bordered table-secondary table table-dark col-md-12 col-sm-5 mt-5 " id="cTripTable" style="margin:auto;">
                          <form action="" method="POST" class="form-control">
                            <thead>
                            <tr class=" table-warning" style="color:black;" >
                              <th class="text-center">Select Checkbox</th>
                              <th class="text-center">Application ID</th>
                              <th class="text-center">Date</th>
                              <th class="text-center">Status</th>
                              <th class="text-center">Remark(s)</th>
                              <th class="text-center">View <br> Document</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php
                              // get each row of crisis trip into table
                              while($row = mysqli_fetch_assoc($resultArray)):
                              ?>
                              <tr>
                                <td align="middle">
                                <!-- to select trip that need to delete !-->
                                <input type="checkbox" id="checkboxApp<?php echo $row['applicationID'];?>" onchange="isChecked(this, 'viewDoc<?php echo $row['applicationID'];?>')" name="checkboxApp" value="<?php echo $row['applicationID'];?>" required>
                                </td>
                                <td align="center"><?php echo $row['applicationID'];?></td>
                                <td align="center"><?php echo $row['applicationDate'];?></td>
                                <td align="center"><?php echo $row['applicationStatus'];?></td>
                                <td align="center"><?php echo $row['remarks'];?></td>
                                <td align="middle">

                                  <?php
                                  if (mysqli_num_rows($docRes ) == 0 ) { ?>
                                    <?php echo '<script> alert("There are no document currently!")</script>';?>
                                  <?php }
                                  else {
                                  ?>
                                 <!-- to view document !-->
                                <button type="button" id="viewDoc<?php echo $row['applicationID'];?>" name="viewDoc" disabled data-toggle="modal"  data-target="#updateModal<?php echo $row['applicationID'];?>" class="btn btn-info">View Document</button>
                                <?php } ?>
                                </td>
                              </tr>
                              <script type="text/javascript">

                              function isChecked(checkbox, viewDoc) {
                                document.getElementById(viewDoc).disabled = !checkbox.checked;
                              }



                            </script>

                             </form>


														 <?php
														// get each row of crisis trip into table
														while($rows = mysqli_fetch_assoc($resultDoc)):
														?>
                             <!--Update Application Modal !-->
                                <form action="function.php" method="POST" class="form-control">

                                   <div class="modal fade" id="updateModal<?php echo $row['applicationID'];?>" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
                                     <div class="modal-dialog modal-dialog-centered" role="document">
                                       <div class="modal-content">
                                         <div class="modal-header">
                                           <h5 class="modal-title" id="updateModalLabel">Document Information:</h5>
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                           </button>
                                         </div>

                                         <!-- input values !-->
                                         <div class="modal-body">
                                           <div class="form-group row">
                                            <label for="applicationID" class="col-sm-6 col-lg-4 col-form-label"> Application ID</label>
                                            <div class="col-sm-12 col-lg-8">
                                              <input type="text" class="form-control" name="applicationID" value="<?php echo $row['applicationID'];?>" readonly><br>
                                            </div>

                                            <label for="documentID" class="col-sm-6 col-lg-4 col-form-label"> Document ID </label>
                                            <div class="col-sm-12 col-lg-8">
                                              <input type="text" class="form-control" name="documentID" value="<?php echo $row['documentID'];?>" readonly><br>
                                            </div>

                                            <label for="expiryDate" class="col-sm-6 col-lg-4 col-form-label"> Expiry Date </label>
                                            <div class="col-sm-12 col-lg-8">
                                              <input type="text" class="form-control" name="expiryDate" value="<?php echo $rows['expiryDate'];?>" ><br>
                                            </div>

                                            <label for="docImages" class="col-sm-6 col-lg-4 col-form-label">Document Photos </label>
                                            <div class="col-sm-12 col-lg-8">
                                              <input type="text" class="form-control" name="docImages" value="<?php echo $rows['docImages'];?>"><br>
                                            </div>

																						<label for="status" class="col-sm-6 col-lg-4 col-form-label">Status</label>
                                            <div class="col-sm-12 col-lg-8">
                                              <input type="text" class="form-control" name="statusUpdate" id="statusUpdate" placeholder="update application status" required ><br>
                                            </div>

                                            <label for="remarks" class="col-sm-6 col-lg-4 col-form-label">Remark(s)</label>
                                            <div class="col-sm-12 col-lg-8">
                                              <input type="text"
                                              class="form-control" name="remarks" id="remarks" placeholder="remarks on documents" required>
                                            </div>
                                          </div>
                                         </div>

                                         <!-- Add button !-->
                                         <div class="modal-footer">
																					 <input name="action" value="updateSlots" hidden>
                                           <input name="action" value="updateApp" hidden>
                                           <input type="submit" class="btn btn-primary" name="updateStatus" id="updateStatus" value="Update Here!">
                                         </div>
                                       </div>
                                     </div>
                                   </div>

                                 </form>
																 <?php endwhile;?>
	                               <?php endwhile;?>
                          </tbody>
                        </table>
                        <?php } ?>
                          <br>
                    </div>
                </div>
            </div>
        </div>





        <section id="contact">
            <footer class="py-5">
                <div class="container-fluid" py-5>
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





        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script type="text/javascript">

        function checkStatus(){

          var result = document.getElementById('statusUpdate').value.toLowerCase();
          var reject = "rejected";
          var accept = "accepted";
          if(!(result === reject || result === accept)){
            alert("Please only enter 'rejected' or 'accepted (Required)'")
            document.getElementById('statusUpdate').focus();
            throw new Error("This is not an error. This is just to abort javascript.")
          }
        }

				function remarksBlankValidation(){
	        if(document.getElementById('remarks').value == ''){
	          alert("Remark(s) cannot be blank!")
	          document.getElementById('remarks').focus();
	          throw new Error("This is not an error. This is just to abort javascript.")
	        }
	      }

        </script>
    </body>
</html>
