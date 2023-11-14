<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Student portal-Login</title>

  <!-- Bootstrap styles for this project-->
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="index.css">
</head>
<style>
  

</style>
<body class="bg-warning" >
 
        <nav class="navbar navbar-expand-lg navbar-primary   ">
            <div class="container">
                 <div class="logo w-100">
                    <img class="pe-2"  src="../images/logo.jpg" width="50" height="30" alt="logo ">  DIU Portal</a>
               </div>
                <ul class="navbar-nav ml-auto w-25"></ul>
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/index.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../student/index.php">student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../staff/index.php">staff</a>
                    </li>
                    <li class="nav-item bg-warning rounded-pill px-2  w-25">
                        <a class="nav-link text-primary"   href="https://diu.ac/">Learn more </a>
                    </li>
                    
                </ul>
            </div>
        </nav>
    
 <div class="container p-5">
   <div class="row justify-content-center">
   <div class="col-xl-5 col-lg-5 col-md-4">
   <div class="card card-body p-5" style="border-radius: 50px; opacity: 80%">
   <h4 class="text-center text-danger">Dhaka International University</h4>
     <center>
       <img src="../images/logo.jpg" height="100" width="100">
     </center>
    <br/>
     <h5 class="text-center text-danger">Student Login</h5>
     <hr>
     <form class="user" action="login.php" method="POST">
       <div class="form-group">
         <input type="text" class="form-control form-control-user" name="username" placeholder="Username" required="">
       </div>
       <div class="form-group">
         <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required="">
       </div>
       <input type="submit" name="Login" class="btn btn-success btn-user btn-block" value="Login">
       <hr>
       <a href="#" class="text-center text-waning">Forgot Password</a>
     </form>
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
  <script src="..//js/bootstrap.min.js"></script>

</body>



<!-- style="background-image: url('images/students.jpg'); background-repeat: no-repeat; background-size: cover; " -->
</html>
