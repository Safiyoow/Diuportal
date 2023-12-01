<?php
require '../dbConnection/connect.inc.php';
require '../dbConnection/core.inc.php';

if(login())
{
  $myuser = $_SESSION['username'];
  ?>
  <div id="wrapper">
  <div class="sidebar sidebar-dark bg-success">

    <form action="home.php" method="GET">
      <li class="nav-item action">
       
        <center>
          <img src="../images/logo.jpg" class="img-responsive img-thumbnail" width="90" height="70">
        </center>
         <large class="nav-link text-center font-weight-bold ">PROFILE</large>
      </li>
      <li class="nav-item active">
        <hr>
        <button type="submit" name="btnService" class="btn nav-link bg-gradient-success active ">SERVICE INFO</button>

        <button type="submit" name="btnPersonalDetail" class="btn nav-link bg-gradient-success ">PERSONAL INFO</button>
        

        <button type="submit" name="btnVerifyDetail" class="btn nav-link bg-gradient-success ">VERIFY DETAILS</button>

        <button type="submit" name="btnResult" class="btn nav-link bg-gradient-success ">ACADEMIC RESULT</button>
        <button type="submit" name="btnFees" class="btn nav-link bg-gradient-success ">ACCOUNT DETAILS</button>

        <button type="submit" name="btnTimeTable" class="btn nav-link bg-gradient-success ">TIME TABLE</button>

        <button type="submit" name="btnTourService" class="btn nav-link bg-gradient-success ">TOUR SERVICE</button>


        <button type="submit" name="btnChangePassword" class="btn nav-link bg-gradient-success ">CHANGE PASSWORD</button>

        <button type="submit" name="btnLogout" class="btn nav-link bg-gradient-success ">LOGOUT</button>
      </li>
    </form>
  </div>


  

  <div id="content-wrapper"> 
    <nav class="navbar bg-white topbar navbar-fixed-top mb-4 shadow static-top ">
      <h4 class="text-primary"> Dhaka International University  </h4>
      <small class="text-right"><?php echo $_SESSION['firstname']; echo " "; echo $_SESSION['lastname']; ?></small>
    </nav>

  <?php
  if(isset($_GET['btnService']))
  {
    ?>

    <div class='container-fluid'>
      <div class='row'>
        <div class='col-xl-6 col-lg-6 col-sm-12'>
          <div class='card shadow mb-5'>
            <div class='card-header py-3 d-flex flex-row align-items-center justify-content-between'>
              <h6 class='m-0 font-weight-bold text-primary'>SERVICE INFORMATION</h6>
            </div>
            <div class='card-body'>
              <p>
              Dear Student,  <br/>

Welcome to Dhaka International University (DIU)! Your gateway to knowledge, growth, and a vibrant academic community.
<br/>
<strong>Research Study: </strong>  <br/>
We invite you to participate in our ongoing research aimed at understanding the hypokinetic risk factor of diseases for life modification. Your insights will contribute to the enhancement of health awareness and interventions.
<br/>
<strong> Campus Safety: </strong> <br/>
DIU is dedicated to providing a secure environment. Our commitment extends to fostering a campus free from sexual harassment, assault, stalking, and intimate partner violence. Your safety and well-being are our top priorities.
<br/>
<strong> Student Portal: </strong><br/>
Explore the DIU Student Portal for a seamless academic experience. Access important resources, view grades, and stay updated on campus news. This platform also allows you to apply for free hostel accommodation, ensuring a comfortable living space conducive to your academic journey.
<br/>
<strong> Free Hostel Accommodation:</strong> <br/>
DIU offers free hostel facilities for eligible students. Take advantage of this opportunity to immerse yourself in a supportive learning community. Apply through the student portal for a chance to secure accommodation that complements your educational pursuits.
<br/>
<strong>Campus Tours:</strong> <br/>
Embark on a journey of discovery with our free campus tours. Familiarize yourself with the university's state-of-the-art facilities, modern classrooms, and vibrant student spaces. These tours provide a firsthand experience of the DIU atmosphere..<br>
       
<br/> <br/> THANK YOU</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
  }
  ?>
<?php
 

if (login()) {
    $myuser = $_SESSION['username'];

    // Check if the TOUR SERVICE button is clicked
    if (isset($_GET['btnTourService'])) {
        ?>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-xl-6 col-lg-6 col-sm-12'>
                    <div class='card shadow mb-5'>
                        <div class='card-header py-3 d-flex flex-row align-items-center justify-content-between'>
                            <h6 class='m-0 font-weight-bold text-primary'>TOUR SERVICE</h6>
                        </div>

                        <div class='card-body'>
                            <p>
                                Explore our beautiful campus with our guided tours. Our campus is equipped with state-of-the-art facilities, modern classrooms, and vibrant student spaces. Join our tours to get a firsthand experience of the DIU atmosphere and learn about the rich history and culture of our institution.
                            </p>

                            <!-- Tour Registration Form -->
                            <form action="tour_registration.php" method="POST">
                                <div class="form-group">
                                    <label for="tourEventName">Select Tour Event:</label>
                                    <select class="form-control" id="tourEventName" name="tourEventName" required>
                                        <?php
                                        // Fetch available tour events
                                        $eventsQuery = "SELECT * FROM tour_events WHERE status = 'active'";
                                        $eventsResult = mysqli_query($connection, $eventsQuery);

                                        while ($event = mysqli_fetch_assoc($eventsResult)) {
                                            echo "<option value='{$event['id']}'>{$event['event_name']} - {$event['event_date']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tourEventDate">Event Date:</label>
                                    <input type="date" class="form-control" id="tourEventDate" name="tourEventDate" required>
                                </div>
                                <button type="submit" name="btnRegisterTour" class="btn btn-success">Register for Tour</button>
                            </form>
                            <!-- End of Tour Registration Form -->
                        </div>
                        <!-- Current status display -->
                        <div class='card-body'>
                            <?php
                            // Fetch the current status of the student's tour registration
                            $statusQuery = "SELECT status FROM tours WHERE student_username = '$myuser' ORDER BY id DESC LIMIT 1";
                            $statusResult = mysqli_query($connection, $statusQuery);

                            // Check if there are any rows returned
                            if ($statusResult && mysqli_num_rows($statusResult) > 0) {
                                $currentStatus = mysqli_fetch_assoc($statusResult)['status'];

                                // Display the current status to the student
                                if ($currentStatus == null) {
                                    echo "<p>No pending tour service registration.</p>";
                                } else {
                                    echo "<p>Your current tour registration status: <strong>$currentStatus</strong></p>";
                                }
                            } else {
                                echo "<p>No pending tour service registration.</p>";
                            }
                            ?>
                        </div>

                              
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>

  <!-- Logout Button -->
  <?php
  if(isset($_GET['btnLogout']))
  {
    ?>
    <div class='container-fluid'>
      <div class='row'>
        <div class='col-xl-6 col-lg-6 col-sm-12'>
          <div class='card shadow mb-5'>
            <div class='card-header py-3 d-flex flex-row align-items-center justify-content-between'>
              <h6 class='m-0 font-weight-bold text-success'>SERVICE INFORMATION</h6>
            </div>
            <div class='card-body'>
              <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        </div>
              <div class="modal-body">Select "Logout" below if you are ready to logout your account.</div>
        <div class="modal-footer">
          <a class="btn btn-success" href="home.php">Cancel</a>
          <a class="btn btn-success" href="logout.php">Logout</a>
        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>

  <!-- Change Password -->
  <?php
  if(isset($_GET['btnChangePassword']))
  {
    ?>
    <div class='container-fluid'>
        <div class='row'>
         <div class='col-xl-3 col-lg-3 col-md-3'>
           <div class='card shadow mb-2'>
            <div class='card-header py-3 d-flex flex-row align-items-center justify-content-between'>
              <h6 class='m-0 font-weight-bold text-success'>CHANGE PASSWORD</h6>
            </div>
            <div class='card-body'>
              <h5>CREATING NEW PASSWORD</h5>
              <hr>
              <form action='changePassword.php' method='POST' class='user'>
                <div class="form-group">
                  <input type='password' required="" class='form-control form-control-user' id='exampleLastName' placeholder='Enter New Password' name='newPassword' maxlength='30'>
                </div>
                <div class="form-group">
                  <input type='password' required="" class='form-control form-control-user' id='exampleLastName' placeholder='Confirm Passwords' name='confirmPassword' maxlength='30'>
                </div>
                <hr>
                <input type="submit" name="btnChangeUserPassword" class="btn btn-success btn-user btn-block" value="Submit">
                <br>
                <input type='reset' value='Cancel' class='btn btn-success btn-user btn-block'>
                <hr>
                </div>                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    
  }
  ?>

<!-- Personal Information Button -->
  <?php
  if(isset($_GET['btnPersonalDetail']))
  {
    $query = mysqli_query($connection, "SELECT * FROM students WHERE username='$myuser'");
    ?>
    <div class='container-fluid'>
      <div class='row'>
        <div class='col-xl-6 col-lg-6 col-sm-12'>
          <div class='card shadow mb-5'>
            <div class='card-header py-3 d-flex flex-row align-items-center justify-content-between'>
              <h6 class='m-0 font-weight-bold text-success'>PERSONAL INFORMATION</h6>
            </div>
            <div class='card-body'>
              <div class="">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                      ?>
                      <tbody>
                     
                        
                      <tr>
                        <th>Username</th>
                        <td><?php echo $row['username']; ?></td>
                      </tr>
                      <tr>
                        <th>Gender</th>
                        <td><?php echo strtoupper($row['gender']); ?></td>
                      </tr>
                      <tr>
                        <th>First Name</th>
                        <td><?php echo strtoupper($row['firstname']); ?></td>
                      </tr>
                      <tr>
                        <th>Last Name</th>
                        <td><?php echo strtoupper($row['lastname']); ?></td>
                      </tr>
                      <tr>
                        <th>Other Name</th>
                        <td><?php echo strtoupper($row['othername']); ?></td>
                      </tr>
                      <tr>
                        <th>Class</th>
                        <td><?php echo strtoupper($row['class']); ?></td>
                      </tr>
                      <tr>
                        <th>Residential Address</th>
                        <td><?php echo strtoupper($row['residentialAddress']); ?></td>
                      </tr>
                      <tr>
                        <th>Postal Address</th>
                        <td> <?php echo strtoupper($row['postalAddress']); ?></td>
                      </tr>
                      <tr>
                        <th>Guardian's Name</th>
                        <td><?php echo strtoupper($row['guardianName']); ?></td>
                      </tr>
                      <tr>
                        <th>Relation With Guardian</th>
                        <td><?php echo strtoupper($row['guardianOccupation']); ?></td>
                      </tr>
                      <tr>
                        <th>Date of Admission</th>
                        <td><?php echo strtoupper($row['dateOfEnrollment']); ?></td>
                      </tr>
                    </tbody>
                    <?php
                    }
                    ?>
                     <tr>
                        <th>Profile Image</th>
                        <td>
                        <!-- Perform a query to get the file path -->
                        <?php
                         $username = "Safiyoow"; // Adjusted username

                         $query = "SELECT f.file_path 
                                   FROM files f 
                                   JOIN students s ON s.username = '$username'";
                         
                         $result = mysqli_query($connection, $query);
                         
                         if ($result && mysqli_num_rows($result) > 0) {
                             $row = mysqli_fetch_assoc($result);
                             $filePath = $row['file_path'];
                         
                             if ($filePath && file_exists($filePath)) {
                                 echo "<img src='$filePath' alt='Profile Image' style='max-width: 200px; max-height: 200px;' />";
                             } else {
                                 echo "No image available";
                             }
                         } else {
                             echo "No result found";
                         }
                         
                          ?>
                        </td>
                      </tr>
                  </table>
                  <!-- <form action="ho.php" method="GET">
                    <button name="btnUpdatePersonalDetails" class="btn btn-block btn-success">Update Info</button>
                  </form> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
  ?>


  <!-- Verify Information Button -->
  <?php
  if(isset($_GET['btnVerifyDetail']))
  {
    $query = mysqli_query($connection, "SELECT * FROM students WHERE username='$myuser'");
    ?>
    <div class='container-fluid'>
      <div class='row'>
        <div class='col-xl-6 col-lg-6 col-sm-12'>
          <div class='card shadow mb-5'>
            <div class='card-header py-3 d-flex flex-row align-items-center justify-content-between'>
              <h6 class='m-0 font-weight-bold text-success'>VERIFY INFORMATION</h6>
            </div>
            <div class='card-body'>
              <div class="">
                <div class="table-responsive">
                  <div id="printPersonalDetails">
                    <table border="1" class="table table-bordered table-hover table-striped">
                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                      ?>
                      <tbody>
                      <tr>
                        <th>USERNAME</th>
                        <td><?php echo $row['username']; ?></td>
                      </tr>
                      <tr>
                        <th>GENDER</th>
                        <td><?php echo strtoupper($row['gender']); ?></td>
                      </tr>
                      <tr>
                        <th>FIRST NAME</th>
                        <td><?php echo strtoupper($row['firstname']); ?></td>
                      </tr>
                      <tr>
                        <th>LAST NAME</th>
                        <td><?php echo strtoupper($row['lastname']); ?></td>
                      </tr>
                      <tr>
                        <th>OTHER NAME</th>
                        <td><?php echo strtoupper($row['othername']); ?></td>
                      </tr>
                      <tr>
                        <th>CLASS</th>
                        <td><?php echo strtoupper($row['class']); ?></td>
                      </tr>
                      <tr>
                        <th>RESIDENTIAL ADDRESS</th>
                        <td><?php echo strtoupper($row['residentialAddress']); ?></td>
                      </tr>
                      <tr>
                        <th>POSTAL ADDRESS</th>
                        <td><?php echo strtoupper($row['postalAddress']); ?></td>
                      </tr>
                      <tr>
                        <th>GUARDIAN'S NAME</th>
                        <td><?php echo strtoupper($row['guardianName']); ?></td>
                      </tr>
                      <tr>
                        <th>RELATION WITH GUARDIAN</th>
                        <td><?php echo strtoupper($row['guardianOccupation']); ?></td>
                      </tr>
                      <tr>
                        <th>DATE OF ENROLLMENT</th>
                        <td><?php echo strtoupper($row['dateOfEnrollment']); ?></td>
                      </tr>
                    </tbody>
                    <?php
                    }
                    ?>
                  </table>
                  </div>
                  <form action="home.php" method="GET">
                    <button type="submit" name="btnVerify" class="btn btn-block btn-success">VERIFY INFO</button>
                  </form>
                  <button class="btn btn-block btn-success" onclick="printContent('printPersonalDetails')">PRINT</button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
  }
     ?>

    <!-- Confirm Verify Button -->
  <?php
  if(isset($_GET['btnVerify']))
  {
    ?>
    <div class='container-fluid'>
      <div class='row'>
        <div class='col-xl-6 col-lg-6 col-sm-12'>
          <div class='card shadow mb-5'>
            <div class='card-header py-3 d-flex flex-row align-items-center justify-content-between'>
              <h6 class='m-0 font-weight-bold text-success'>VERIFY PERONAL INFORMATION</h6>
            </div>
            <div class='card-body'>
              <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hi <?php echo $_SESSION['firstname']; echo " "; echo $_SESSION['lastname']; ?></h5>
        </div>
              <div class="modal-body">You have Succefully Verify your personal information.</div>
        <div class="modal-footer">
          <a class="btn " href="#">Thanks</a>
        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>


  <!-- Statement of Result Button -->
  <?php
  if(isset($_GET['btnResult']))
  {
    ?>
    <div class='container-fluid'>
      <div class='row'>
        <div class='col-xl-8 col-lg-8 col-sm-12'>
          <div class='card shadow mb-5'>
            <div class='card-header py-3 d-flex flex-row align-items-center justify-content-between'>
              <h6 class='m-0 font-weight-bold text-success'>STATEMENT OF RESULT</h6>
            </div>
            <div class='card-body'>
              <?php

$query = "SELECT * FROM math101 WHERE indexNumber = '$myuser'";
$result = mysqli_query($connection,$query);

if($result == false)
     {
      
     }else
     {
     $row = mysqli_fetch_array($result);
     $mathsClass = $row['ClassScore'];
     $mathsExam = $row['ExamScore'];
     $mathsTotal = $row['TotalScore'];
     $mathsGrade = $row['Grade'];
     $mathsRemark = $row['Remark'];

     if($row['ClassScore'] == '' || $row['ExamScore'] == '' )
      {
        $mathsClass = "IC";
        $mathsExam = 'IC';
        $mathsGrade = 'IC';
        $mathsTotal = 'IC';
        $mathsRemark = 'IC';
      }

  
     }

  
  $query = "SELECT * FROM cse101 WHERE indexNumber = '{$myuser}' ";
  $result = mysqli_query($connection, $query);
  if($result == false)
  {

  }else
  {
     $row = mysqli_fetch_array($result);
     $EnglishClass = $row['ClassScore'];
     $EnglishExam = $row['ExamScore'];
     $EnglishTotal = $row['TotalScore'];
     $EnglishGrade = $row['Grade'];
     $EnglishRemark = $row['Remark'];
  }
  if($row['ClassScore'] == '' || $row['ExamScore'] == '' )
  {
    $EnglishClass = "IC";
    $EnglishExam = 'IC';
    $EnglishGrade = 'IC';
    $EnglishTotal = 'IC';
    $EnglishRemark = 'IC';
  }


  $query = "SELECT * FROM eee101 WHERE indexNumber = '{$myuser}' ";
  $result = mysqli_query($connection, $query);
  if($result == false)
  {

  }else
  {
     $row = mysqli_fetch_array($result);
     $SocialClass = $row['ClassScore'];
     $SocialExam = $row['ExamScore'];
     $SocialTotal = $row['TotalScore'];
     $SocialGrade = $row['Grade'];
     $SocialRemark = $row['Remark'];
  }
  
  if($row['ClassScore'] == '' || $row['ExamScore'] == '' )
  {
    $SocialClass = "IC";
    $SocialExam = 'IC';
    $SocialGrade = 'IC';
    $SocialTotal = 'IC';
    $SocialRemark = 'IC';
  }

  $query = "SELECT * FROM cse102 WHERE username = '{$myuser}' ";
  $result = mysqli_query($connection, $query);
  if($result == false)
  {

  }else
  {
    $row = mysqli_fetch_array($result);
     $ScienceClass = $row['ClassScore'];
     $ScienceExam = $row['ExamScore'];
     $ScienceTotal = $row['TotalScore'];
     $ScienceGrade = $row['Grade'];
     $ScienceRemark = $row['Remark'];
  }
  
     
    if($row['ClassScore'] == '' || $row['ExamScore'] == '' )
  {
    $ScienceClass = "IC";
    $ScienceExam = 'IC';
    $ScienceGrade = 'IC';
    $ScienceTotal = 'IC';
    $ScienceRemark = 'IC';
  }

  
  $query = "SELECT * FROM cse202 WHERE indexNumber = '{$myuser}' ";
  $result = mysqli_query($connection, $query);

  if($result == false)
  {

  }else
  {
    $row = mysqli_fetch_array($result);
     $RMEClass = $row['ClassScore'];
     $RMEExam = $row['ExamScore'];
     $RMETotal = $row['TotalScore'];
     $RMEGrade = $row['Grade'];
     $RMERemark = $row['Remark'];
  }

  if($row['ClassScore'] == '' || $row['ExamScore'] == '' )
  {
    $RMEClass = 'IC';
    $RMEExam = 'IC';
    $RMEGrade = 'IC';
    $RMETotal = 'IC';
    $RMERemark = 'IC';
  }
  
  $query = "SELECT * FROM cse201 WHERE indexNumber = '{$myuser}' ";
  $result = mysqli_query($connection, $query);

  if($result == false)
  {

  }else
  {
    $row = mysqli_fetch_array($result);
     $ICTClass = $row['ClassScore'];
     $ICTExam = $row['ExamScore'];
     $ICTTotal = $row['TotalScore'];
     $ICTGrade = $row['Grade'];
     $ICTRemark = $row['Remark'];
  }
  
  if($row['ClassScore'] == '' || $row['ExamScore'] == '' )
  {
    $ICTClass = 'IC';
    $ICTExam = 'IC';
    $ICTGrade = 'IC';
    $ICTTotal = 'IC';
    $ICTRemark = 'IC';
  }
  
  $query = "SELECT * FROM ged101 WHERE indexNumber = '{$myuser}' ";
  $result = mysqli_query($connection, $query);

  if($result == false)
  {

  }else
  {
    $row = mysqli_fetch_array($result);
     $BDTClass = $row['ClassScore'];
     $BDTExam = $row['ExamScore'];
     $BDTTotal = $row['TotalScore'];
     $BDTGrade = $row['Grade'];
     $BDTRemark = $row['Remark'];
  }
  
  if($row['ClassScore'] == '' || $row['ExamScore'] == '' )
  {
    $BDTClass = 'IC';
    $BDTExam = 'IC';
    $BDTGrade = 'IC';
    $BDTTotal = 'IC';
    $BDTRemark = 'IC';
  }

  $query = "SELECT * FROM eee102 WHERE indexNumber = '{$myuser}' ";
  $result = mysqli_query($connection, $query);

  if($result == false)
  {

  }else
  {
     $row = mysqli_fetch_array($result);
     $GHLanguageClass = $row['ClassScore'];
     $GHLanguageExam = $row['ExamScore'];
     $GHLanguageTotal = $row['TotalScore'];
     $GHLanguageGrade = $row['Grade'];
     $GHLanguageRemark = $row['Remark'];
  }  
  
  if($row['ClassScore'] == '' || $row['ExamScore'] == '' )
  {
    $GHLanguageClass = 'IC';
    $GHLanguageExam = 'IC';
    $GHLanguageGrade = 'IC';
    $GHLanguageTotal = 'IC';
    $GHLanguageRemark = 'IC';
  }

  $query = "SELECT * FROM math201 WHERE indexNumber = '{$myuser}' ";
  $result = mysqli_query($connection, $query);

  if($result == false)
  {

  }else
  {
    $row = mysqli_fetch_array($result);
     $FrenchClass = $row['ClassScore'];
     $FrenchExam = $row['ExamScore'];
     $FrenchTotal = $row['TotalScore'];
     $FrenchGrade = $row['Grade'];
     $FrenchRemark = $row['Remark'];
  }
  
     
  
  if($row['ClassScore'] == '' || $row['ExamScore'] == '' )
  {
    $FrenchClass = 'IC';
    $FrenchExam = 'IC';
    $FrenchGrade = 'IC';
    $FrenchTotal = 'IC';
    $FrenchRemark = 'IC';
  }
  
  if(!empty($ScienceClass) && !empty($ScienceExam))
  {
    $coreSubjects = "";
  }else{
       $coreSubjects = $mathsGrade + $EnglishGrade + $SocialGrade + $ScienceGrade;

  }

  if($mathsClass == 'IC' || $ScienceClass == 'IC')
  {
    $rawScore = '';
  }else
  {
       $rawScore = $mathsTotal + $SocialTotal + $EnglishTotal + $ScienceTotal + $RMETotal + $ICTTotal + $BDTTotal + $GHLanguageTotal + $FrenchTotal;

  }

   //$electives = array('$FrenchGrade', '$GHLanguageGrade', '$BDTGrade', '$ICTGrade', '$RMEGrade');
   // $first = max($electives);
   // $second = min($electives);
                      
  
?>
  <div id="result">
    <center>
  <div class="table-responsive">
    <table border="1" class="table table-bordered  border-none  table-condense">
    <tr>
  <td>
    <table width="100%" class="text-center table table-bordered  border-none  table-condense">
      <tr>
        <td>
          <img src='../images/logo.jpg' width=80 height=70 class="mx-auto d-block">
        </td>
        <td>
          <b><font size='5'>Dhaka International University</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br><br>
          <font size='4' color='blue'><b>Academic Student Result</b></font>
        </td>
      </tr>
    </table >
  </td>
</tr>

    <tr>
    <td>
      <table class="table table-bordered  border-none  table-condense   ">
        <tr ></tr><td><font size='4'  class="ml-2"> <strong>NAME:</strong> <?php echo strtoupper($_SESSION['firstname']); echo " "; echo strtoupper($_SESSION['lastname']); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Reg:</strong> <?php echo "$myuser"; ?></font></td></tr>
        <tr  ><td><font class="ml-2" size='4'><strong>Batch:</strong> 56 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> Session:</strong> 2019-2020</font></td></tr>
      </table>
    </td>
    </tr>
    <tr>
    <td>
      <table width="100%" class="table table-bordered  border-none  table-condense mt-2">
      <!-- sem-1 -->
      <tr><th><i>Subjects</i></th><th><i> Incourse</i></th><th><i> Final </i></th><th><i>Total Score</i></th><th><i>Grade</i></th><th><i>Grade Earned</i></th></tr>
        <td style="background-color: #DCDCDC;" colspan=6><div class='text-danger'><B>&nbsp;Semester 1</B></div></td>
        <tr><td>&nbsp; CSE-101</td><td align="center"><?php echo "$EnglishClass"; ?></td><td align="center"><?php echo "$EnglishExam"; ?></td><td align="center"><?php echo "$EnglishTotal"; ?></td><td align="center"><?php echo "$EnglishGrade"; ?></td><td><?php echo "$EnglishRemark"; ?></td></tr>
        <tr><td>&nbsp; CSE-102</td><td align="center"><?php echo "$ScienceClass"; ?></td><td align="center"><?php echo "$ScienceExam"; ?></td><td align="center"><?php echo "$ScienceTotal"; ?></td><td align="center"><?php echo "$ScienceGrade"; ?></td><td><?php echo "$ScienceRemark"; ?></td></tr>
        <tr><td>&nbsp; MAT-101</td><td align="center"><?php echo "$mathsClass"; ?></td><td align="center"><?php echo "$mathsExam"; ?></td><td align="center"><?php echo "$mathsTotal"; ?></td><td align="center"><?php echo "$mathsGrade"; ?></td><td><?php echo "$mathsRemark"; ?></td></tr>
        <tr><td>&nbsp; EEE-101</td><td align="center"><?php echo "$SocialClass"; ?></td><td align="center"><?php echo "$SocialExam"; ?></td><td align="center"><?php echo "$SocialTotal"; ?></td><td align="center"><?php echo "$SocialGrade"; ?></td><td><?php echo "$SocialRemark"; ?></td></tr>
         <!-- sem-2 -->
        <td style="background-color: #DCDCDC;" colspan=6><div class='text-danger'><B>&nbsp;Semester 2</B></div></td>
       <tr><th><i>Subjects</i></th><th><i> Incourse</i></th><th><i> Final </i></th><th><i>Total Score</i></th><th><i>Grade</i></th><th><i>Grade Earned</i></th></tr>
        <tr><td>&nbsp;CSE-201</td><td align="center"><?php echo "$ICTClass"; ?></td><td align="center"><?php echo "$ICTExam"; ?></td><td align="center"><?php echo "$ICTTotal"; ?></td><td align="center"><?php echo "$ICTGrade"; ?></td><td><?php echo "$ICTRemark"; ?></td></tr>
        <tr><td>&nbsp;GED-101</td><td align="center"><?php echo "$BDTClass"; ?></td><td align="center"><?php echo "$BDTExam"; ?></td><td align="center"><?php echo "$BDTTotal"; ?></td><td align="center"><?php echo "$BDTGrade"; ?></td><td><?php echo "$BDTRemark"; ?></td></tr>
        <tr><td>&nbsp;CSE-202</td><td align="center"><?php echo "$RMEClass"; ?></td><td align="center"><?php echo "$RMEExam"; ?></td><td align="center"><?php echo "$RMETotal"; ?></td><td align="center"><?php echo "$RMEGrade"; ?></td><td><?php echo "$RMERemark"; ?></td></tr>
        <tr><td>&nbsp;EEE-102</td><td align="center"><?php echo "$GHLanguageClass"; ?></td><td align="center"><?php echo "$GHLanguageExam"; ?></td><td align="center"><?php echo "$GHLanguageTotal"; ?></td><td align="center"><?php echo "$GHLanguageGrade"; ?></td><td><?php echo "$GHLanguageRemark"; ?></td></tr>
        <tr><td>&nbsp;MAT-201</td><td align="center"><?php echo "$FrenchClass"; ?></td><td align="center"><?php echo "$FrenchExam"; ?></td><td align="center"><?php echo "$FrenchTotal"; ?></td><td align="center"><?php echo "$FrenchGrade"; ?></td><td><?php echo "$FrenchRemark"; ?></td></tr>
       
        <!-- sem 3 -->
        
        <td style="background-color: #DCDCDC;" colspan=6><div class='text-danger'><B>&nbsp;Semester 3</B></div></td>
       <tr><th><i>Subjects</i></th><th><i> Incourse</i></th><th><i> Final </i></th><th><i>Total Score</i></th><th><i>Grade</i></th><th><i>Grade Earned</i></th></tr>
        <tr><td> <div  > Semester or Marks not exists <br></div></td></tr> 

         <!-- sem 4-->
        
         <td style="background-color: #DCDCDC;" colspan=6><div class='text-danger'><B>&nbsp;Semester 4</B></div></td>
       <tr><th><i>Subjects</i></th><th><i> Incourse</i></th><th><i> Final </i></th><th><i>Total Score</i></th><th><i>Grade</i></th><th><i>Grade Earned</i></th></tr>
        <tr><td> <div  > Semester or Marks not exists <br></div></td></tr> 
         <!-- sem 5 -->
        
         <td style="background-color: #DCDCDC;" colspan=6><div class='text-danger'><B>&nbsp;Semester 5</B></div></td>
       <tr><th><i>Subjects</i></th><th><i> Incourse</i></th><th><i> Final </i></th><th><i>Total Score</i></th><th><i>Grade</i></th><th><i>Grade Earned</i></th></tr>
        <tr><td> <div  > Semester or Marks not exists <br></div></td></tr> 
         <!-- sem 6 -->
        
         <td style="background-color: #DCDCDC;" colspan=6><div class='text-danger'><B>&nbsp;Semester 6</B></div></td>
       <tr><th><i>Subjects</i></th><th><i> Incourse</i></th><th><i> Final </i></th><th><i>Total Score</i></th><th><i>Grade</i></th><th><i>Grade Earned</i></th></tr>
        <tr><td> <div  > Semester or Marks not exists <br></div></td></tr> 
         <!-- sem 7 -->
        
         <td style="background-color: #DCDCDC;" colspan=6><div class='text-danger'><B>&nbsp;Semester 7</B></div></td>
       <tr><th><i>Subjects</i></th><th><i> Incourse</i></th><th><i> Final </i></th><th><i>Total Score</i></th><th><i>Grade</i></th><th><i>Grade Earned</i></th></tr>
        <tr><td> <div  > Semester or Marks not exists <br></div></td></tr> 
         <!-- sem 8 -->
        
         <td style="background-color: #DCDCDC;" colspan=6><div class='text-danger'><B>&nbsp;Semester 8</B></div></td>
       <tr><th><i>Subjects</i></th><th><i> Incourse</i></th><th><i> Final </i></th><th><i>Total Score</i></th><th><i>Grade</i></th><th><i>Grade Earned</i></th></tr>
        <tr><td> <div  > Semester or Marks not exists <br></div></td></tr> 
      </table>
    </td>
    </tr>

    <tr>
    <td>
       
      <table border="1" width="50%" class="table-borderd ">
        <tr><td align="center"><b>GRADING SYSTEM</b></td><td align="center"><b>GRADE</b></td><td><b>&nbsp;REMARK</b></td></tr>
        <tr><td align="center">80 - 100</td><td align="center">1</td><td>&nbsp;A+</td></tr>
        <tr><td align="center">70 - 79</td><td align="center">2</td><td>&nbsp;A</td></tr>
        <tr><td align="center">65 - 69</td><td align="center">3</td><td>&nbsp;B+</td></tr>
        <tr><td align="center">60 - 64</td><td align="center">4</td><td>&nbsp; B</td></tr>
        <tr><td align="center">55 - 59</td><td align="center">5</td><td>&nbsp;C+</td></tr>
        <tr><td align="center">50 - 54</td><td align="center">6</td><td>&nbsp;C</td></tr>
        <tr><td align="center">45 - 49</td><td align="center">7</td><td>&nbsp;D+</td></tr>
        <tr><td align="center">35 - 44</td><td align="center">8</td><td>&nbsp;D</td></tr>
        <tr><td align="center">00 - 34</td><td align="center">9</td><td>&nbsp;F</td></tr>
      </table>
 
    </td>
    </tr>
  </table>
  </div>
</center>
  </div>
  <br>
  <center>
    <button class="btn btn-success btn-block " onclick="printContent('result')">Print</button>
  </center>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
  ?>


  <!-- Time Table Button -->
  <?php
  if(isset($_GET['btnTimeTable']))
  {
    $res = mysqli_query($connection, "SELECT * FROM timeTable");
    ?>
    <div class='container-fluid'>
      <div class='row'>
        <div class='col-xl-8 col-lg-8 col-sm-12'>
          <div class='card shadow mb-5'>
            <div class='card-header py-3 d-flex flex-row align-items-center justify-content-between'>
              <h6 class='m-0 font-weight-bold text-success'>EXAMINATION TIME TABLE</h6>
            </div>
            <div class='card-body'>
              <div class="table-responsive">
            <div class='table-responsive'><table class='table table-striped table-bordered table-hover table-condense'>
              <thead>
                <tr>
                  <th>ROLL</th>
                  <th>SUBJECT NAME</th>
                  <th>DATE</th>
                  <th>ETIME</th>
                  <th>VENUE</th>
                </tr>
              </thead>
      
      <?php
      while ($row = mysqli_fetch_array($res)) {
        ?>
        <tbody>
          <tr>
          <td><?php echo strtoupper($row['id']); ?></td>
          <td><?php echo $row['subject']; ?></td>
          <td><?php echo $row['examDate']; ?></td>
          <td><?php echo strtoupper($row['examTime']); ?></td>
          <td><?php echo strtoupper($row['venue']); ?></td>
        </tr>   
        </tbody>  

        <?php
      }
      ?>
      </table>
  </div>
          <button class="btn btn-success btn-block" onclick="printContent('printTimeTable')">Print</button>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
  ?>


  <!-- Fees Button -->
  <?php
  if(isset($_GET['btnFees']))
  {
    $query = mysqli_query($connection, "SELECT * FROM fees WHERE username='$myuser'");
    ?>
    <div class='container-fluid'>
      <div class='row'>
        <div class='col-xl-6 col-md-8 col-lg-6 col-sm-8'>
          <div class='card shadow mb-5'>
            <div class='card-header py-3 d-flex flex-row align-items-center justify-content-between'>
              <h6 class='m-0 font-weight-bold text-success'>ACCOUNT DETAILS</h6>
            </div>
            <div class='card-body'>
              <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered">
                  <?php
                  if($row = mysqli_fetch_array($query))
                  {
                    ?>
                    <tbody>
                      <tr>
                        <th>Firstname</th>
                        <td><?php echo $_SESSION['firstname']; ?></td>
                      </tr>
                      <tr>
                        <th>Lastname</th>
                        <td><?php echo $_SESSION['lastname']; ?></td>
                      </tr>
                    <tr>
                      <th>Username</th>
                      <td><?php echo $row['username']; ?></td>
                    </tr>
                    <tr>
                      <th>Payment Made</th>
                      <td><?php echo $row['paymentMade']; ?></td>
                    </tr>
                    <tr>
                      <th>Existing Balance</th>
                      <td><?php echo $row['existingBalance']; ?></td>
                    </tr>
                    <tr>
                      <th>Fees For This Academic Year</th>
                      <td><?php echo $row['feesForAcademicYear']; ?></td>
                    </tr>
                    <tr>
                      <th>Balance Carry Forward</th>
                      <?php  $moneyCarry = $row['feesForAcademicYear'] - $row['paymentMade'] ?>
                      <td><?php echo $moneyCarry; ?></td>
                    </tr>
                  </tbody>
                  <?php
                  }
                  ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
  ?>


  

</div>
</div>

<?php
}else{
  header('Location: index.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>STUDENT PORTAL</title>

  <!-- Bootstrap styles for this project-->
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Script for printing -->
  <script>
    function printContent(el) {
      var restorepage = document.body.innerHTML;
      var printcontent = document.getElementById(el).innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorepage;
    }
  </script>

</head>

<body>
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to logout your account.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-info" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <script>
$(document).ready(function() {
    // Handle the form submission using AJAX
    $('form').submit(function(event) {
        event.preventDefault(); // Prevent the default form submission

        var form = $(this);
        var url = form.attr('action');
        var formData = form.serialize();

        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            dataType: 'json', // Specify the expected data type
            success: function(response) {
                if (response.status === 'success') {
                    // Update the page content or show a success message
                    location.reload(); // Reload the page to reflect the changes
                } else {
                    // Handle the error and show an alert
                    alert('Error processing the request');
                }
            },
            error: function() {
                // Handle the AJAX error and show an alert
                alert('Error connecting to the server');
            }
        });
    });
});
 