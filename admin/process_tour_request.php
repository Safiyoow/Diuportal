<?php
require '../dbConnection/connect.inc.php';
require '../dbConnection/core.inc.php';

if (isset($_POST['btnAdmitTour'])) {
    $tourId = $_POST['tour_id'];
    $query = "UPDATE tours SET status = 'admitted' WHERE id = $tourId";
    if (mysqli_query($connection, $query)) {
        // Redirect back to the admin dashboard
        header("Location: home.php?btnTourService=success");
        exit();
    } else {
        // Redirect back to the admin dashboard with an error parameter
        header("Location: home.php?btnTourService=error");
        exit();
    }
}

if (isset($_POST['btnCancelTour'])) {
    $tourId = $_POST['tour_id'];
    $query = "UPDATE tours SET status = 'canceled' WHERE id = $tourId";
    if (mysqli_query($connection, $query)) {
        // Redirect back to the admin dashboard
        header("Location: home.php?btnTourService=success");
        exit();
    } else {
        // Redirect back to the admin dashboard with an error parameter
        header("Location: home.php?btnTourService=error");
        exit();
    }
}

// Add any additional processing as needed

// Redirect back to the admin dashboard with an error parameter if no valid action is performed
header("Location: home.php?btnTourService=error");
exit();
?>
