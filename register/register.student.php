<?php 

require '../dbConnection/connect.inc.php';


if( isset($_POST['username']) && 
	isset($_POST['password']) && 
	isset($_POST['confirm_password']) && 
	isset($_POST['firstname']) && 
	isset($_POST['lastname']) &&
	isset($_POST['othername']) &&
	isset($_POST['gender']) &&
	isset($_POST['guardianName']) &&
	isset($_POST['guardianOccupation']) &&
	isset($_POST['guardianPhone']) &&
	isset($_POST['relationWithGuardian']) &&
	isset($_POST['class']) && 
	isset($_POST['birthdate']) &&
	isset($_POST['residentialAddress']) && 
	isset($_POST['postalAddress']) &&
	isset($_POST['durationOfStudy']) &&
	isset($_POST['dateOfEnrollment']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$password_hash = md5($password);
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$othername = $_POST['othername'];
	$class = $_POST['class'];
	$birthdate = $_POST['birthdate'];
	$durationOfStudy = $_POST['durationOfStudy'];
	$dateOfEnrollment = $_POST['dateOfEnrollment'];
	$gender = $_POST['gender'];
	$guardianName = $_POST['guardianName'];
	$guardianOccupation = $_POST['guardianOccupation'];
	$guardianPhone = $_POST['guardianPhone'];
	$relationWithGuardian = $_POST['relationWithGuardian'];
	$residentialAddress = $_POST['residentialAddress'];
	$postalAddress = $_POST['postalAddress'];


	if(!empty($username) && !empty($password) && !empty($confirm_password) && !empty($firstname) && !empty($lastname))
	{
		if(strlen($username) > 30 || strlen($firstname) >15 || strlen($lastname) > 15)
		{
			//echo 'Please ahear to maximum length of fields.';
			echo "<script language='javascript' type='text/javascript'>
				alert('Please ahear to maximum length of fields.');
				</script>";
		}
		else
		{
			if($password != $confirm_password)
		{
			//echo 'Password do not match.';
			echo "<script language='javascript' type='text/javascript'>
				alert('Password do not match.);
				</script>";
		}
		else
		{
			$query = "SELECT `username` FROM `students` WHERE `username` = '$username'";
			$query_run = mysqli_query($connection, $query);
			if(mysqli_num_rows($query_run) == 1)
			{
				//echo 'The Username '.$username.' already exists.';
				echo "<script language='javascript' type='text/javascript'>
							alert('The Username already exists.');
							</script>";
			}
			else
			{
				$query = "INSERT INTO `students` VALUES('".mysqli_real_escape_string($connection, $username)."', '".mysqli_real_escape_string($connection, $password_hash)."', '".mysqli_real_escape_string($connection, $firstname)."', '".mysqli_real_escape_string($connection, $lastname)."', '".mysqli_real_escape_string($connection, $othername)."' , '".mysqli_real_escape_string($connection, $gender)."', '".mysqli_real_escape_string($connection, $guardianName)."','".mysqli_real_escape_string($connection, $guardianOccupation)."', '".mysqli_real_escape_string($connection, $guardianPhone)."', '".mysqli_real_escape_string($connection, $relationWithGuardian)."','".mysqli_real_escape_string($connection, $class)."', '".mysqli_real_escape_string($connection, $birthdate)."', '".mysqli_real_escape_string($connection, $residentialAddress)."' , '".mysqli_real_escape_string($connection, $postalAddress)."', '".mysqli_real_escape_string($connection, $durationOfStudy)."' ,'".mysqli_real_escape_string($connection, $dateOfEnrollment)."')";

        $query_run = mysqli_query($connection, $query);
       

				if($query_run)
				{
					echo "<script language='javascript' type='text/javascript'>
							alert('$firstname $lastname has been Registered successfully');
							</script>";
				}
				else
				{
					//echo 'Registration Failed. Try again later.';
					echo "<script language='javascript' type='text/javascript'>
							alert('Registration Failed. Try again later.');
							</script>";
				}
			}
		}
		}
	}
	else
	{
		//echo 'All fields are required.';
		echo "<script language='javascript' type='text/javascript'>
							alert('All fields are required.');
							</script>";
	}
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

  <title>DIU student Portal - Register</title>

  <!-- Custom fonts for this template-->
  <link href="../bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/registerAdmin.css">

</head>
<style>
	body {
    background-image: url(../images/campus.jpg);
    background-repeat: no-repeat;
    background-position: center;
     background-size: cover;
    height: 100%;
}
</style>
<body class="bg-success">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5" style=" border-radius: 50px;">
      <div class="card-body p-0">
      	 <center>
				<image src="../images/logo.jpg"   height="120" href="#">
          <h1>Dhaka International University </h1>
			</center>
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-2 d-none d-lg-block "></div>
          <div class="col-lg-8">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Student Registration</h1>
              </div>
              <div class="">
	<form action="register.student.php" method="POST" class="user"  enctype="multipart/form-data">
		 <div class="form-group">
            <input type="text" required="" class="form-control form-control-user" id="exampleLastName" placeholder="Username" name="username" maxlength="30" value="<?php if(isset($username)){echo($username);} ?>">
            </div>
		 <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            	<input type="password" required="" class="form-control form-control-user" maxlength="32" placeholder="Password" name="password">
            </div>
            <div class="col-sm-6">
             	<input type="password" required="" class="form-control form-control-user" placeholder="Password" maxlength="32" name="confirm_password">
            </div>
         </div>
         <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            	<input type="text" name="gender" required="" class="form-control form-control-user" placeholder="Gender" maxlength="15"  value="<?php if(isset($gender)){echo($gender);} ?>">
            </div>
            <div class="col-sm-6">
             	<input type="text" name="firstname" required="" class="form-control form-control-user" placeholder="First Name" maxlength="15"  value="<?php if(isset($firstname)){echo($firstname);} ?>">
            </div>
         </div>
         <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            	<input type="text" name="lastname" required="" class="form-control form-control-user" placeholder="Last Name" maxlength="15" value="<?php if(isset($lastname)){echo($lastname);} ?>">
            </div>
            <div class="col-sm-6">
             	<input type="text" name="othername" placeholder="Other Name" class="form-control form-control-user" maxlength="15" value="<?php if(isset($othername)){echo($othername);} ?>">
            </div>
         </div>
         <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            	<input type="text" name="birthdate" required="" class="form-control form-control-user" placeholder="Date of Birth" maxlength="20"  value="<?php if(isset($birthdate)){echo($birthdate);} ?>">
            </div>
            <div class="col-sm-6">
             	<input type="text" name="class" required="" class="form-control form-control-user" placeholder="Class"  maxlength="50"  value="<?php if(isset($class)){echo($class);} ?>">
            </div>
         </div>
         <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            	<input type="date" required="" class="form-control form-control-user" name="dateOfEnrollment" placeholder="Date of Enrollment" maxlength="15"  value="<?php if(isset($dateOfEnrollment)){echo($dateOfEnrollment);} ?>">
            </div>
            <div class="col-sm-6">
             	<input type="text"  placeholder="Duration of Study" class="form-control form-control-user" name="durationOfStudy" maxlength="40" value="<?php if(isset($durationOfStudy)){echo($durationOfStudy);} ?>">
            </div>
         </div>
         <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            	<input type="text" required="" name="guardianName" class="form-control form-control-user" placeholder="Name of Guadian" maxlength="20"  value="<?php if(isset($guardianName)){echo($guardianName);} ?>">
            </div>
            <div class="col-sm-6">
             	<input type="text" required="" name="guardianOccupation" class="form-control form-control-user" placeholder="Guadian Occupation"  maxlength="50"  value="<?php if(isset($guardianOccupation)){echo($guardianOccupation);} ?>">
            </div>
         </div>
         <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            	<input type="text" required="" name="relationWithGuardian" class="form-control form-control-user" placeholder="Relation With Guadian" maxlength="20"  value="<?php if(isset($relationWithGuardian)){echo($relationWithGuardian);} ?>">
            </div>
            <div class="col-sm-6">
             	<input type="text" required="" name="guardianPhone" class="form-control form-control-user" placeholder="Guadian's Phone"  maxlength="50"  value="<?php if(isset($guardianPhone)){echo($guardianPhone);} ?>">
            </div>
         </div>
         <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            	<input type="text" name="residentialAddress" class="form-control form-control-user" placeholder="Residential Address" maxlength="20"  value="<?php if(isset($residentialAddress)){echo($residentialAddress);} ?>">
            </div>
            <div class="col-sm-6">
             	<input type="text" name="postalAddress" class="form-control form-control-user" placeholder="Postal Address"  maxlength="50"  value="<?php if(isset($postalAddress)){echo($postalAddress);} ?>">
            </div>
			<div class="form-group">
				<label for="facialImage">Upload Image:</label>
				<input type="file" class="form-control-file" id="facialImage" name="facialImage">
			</div>
			
		</div>
          <hr>  
	<input type="submit" value="Register" class="btn btn-success btn-user btn-block"><br>
	<input type="reset" value="Cancel" class="btn btn-success btn-user btn-block">
	 <hr>
    <div class="text-center">
        <a class="small text-info" href="../student/index.php">Student Login</a>
       </div> 
   <hr>
 
</form>

</div>
</div>


<?php
	
	// Facial image upload 
	if(isset($_FILES['facialImage'])) {
		$targetDirectory = "uploads/"; // Directory to store uploaded images
		$targetFile = $targetDirectory . basename($_FILES['facialImage']['name']);
		$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
	
		// Check if the uploaded file is an image
		$check = getimagesize($_FILES['facialImage']['tmp_name']);
		if($check !== false) {
			// Check file size and allowed file types
			if ($_FILES['facialImage']['size'] > 500000) {
				echo "Sorry, your file is too large.";
			} elseif ($imageFileType !== "jpg" && $imageFileType !== "png" && $imageFileType !== "jpeg") {
				echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
			} else {
				// Move the uploaded file to the specified directory
				if (move_uploaded_file($_FILES['facialImage']['tmp_name'], $targetFile)) {
					echo "The file " . basename($_FILES['facialImage']['name']) . " has been uploaded.";
					// Store the file path in the database
					$filePath = mysqli_real_escape_string($connection, $targetFile); // Escape the file path for SQL
					$insertQuery = "INSERT INTO files (file_path) VALUES ('$filePath')";
	
					if (mysqli_query($connection, $insertQuery)) {
						echo "File path stored in the database successfully.";
						// Perform additional actions if needed
					} else {
						echo "Error: " . $insertQuery . "<br>" . mysqli_error($connection);
					}
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
		} else {
			echo "File is not an image.";
		}
	}
	
	
 ?>    
        </div>
        </div>
      </div>
    </div>

  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="../bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="../bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../bootstrap/js/sb-admin-2.min.js"></script>

</body>

</html>
