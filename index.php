<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIU portal Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>
 
<body>
    <?php 
    include("header.php");
    ?>
    
    <div class="container1 mt-5">
        <div class="jumbotron">
            <div class="logo">
                <img  src="./images/logo.jpg" alt="logo image" width="150" height="70">
            </div>
            <h4 class="display-4 fw-normal" > Welcome to the DIU Student Portal</h4>
            <p>Your gateway to academic success!</p>
            <p>Log in or sign up to access your profile and courses.</p>
            <a class="btn btn-primary btn-lg" href="student/index.php" role="button">Log In</a>
            <a class="btn btn-success btn-lg" href="register/register.student.php" role="button">Sign Up</a>

        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="js.js"></script> 
</body>
</html>
