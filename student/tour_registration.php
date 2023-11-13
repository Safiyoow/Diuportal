<?php
require '../dbConnection/connect.inc.php';
require '../dbConnection/core.inc.php';

if (login()) {
    $myuser = $_SESSION['username'];

    // Fetch the current status of the student's tour registration
    $statusQuery = "SELECT status FROM tours WHERE student_username = '$myuser' ORDER BY id DESC LIMIT 1";
    $statusResult = mysqli_query($connection, $statusQuery);
    $currentStatus = mysqli_fetch_assoc($statusResult)['status'];

    // Check if the student has a pending tour request
    $hasPendingRequest = ($currentStatus == 'pending');

    if (isset($_POST['btnRegisterTour']) && !$hasPendingRequest) {
        $eventName = mysqli_real_escape_string($connection, $_POST['tourEventName']);
        $eventDate = mysqli_real_escape_string($connection, $_POST['tourEventDate']);

        // Perform validation as needed

        $query = "INSERT INTO tours (event_name, event_date, student_username) VALUES ('$eventName', '$eventDate', '$myuser')";
        $result = mysqli_query($connection, $query);

        if ($result) {
            header("Location: home.php?btnTourService=success");
            echo "Tour registration successful!";
            // Update the current status after registration
            $currentStatus = 'pending';
        } else {
            header("Location: home.php?btnTourService=error");
        }
    } elseif ($hasPendingRequest) {
        echo "<p>You already have a pending tour request. Please wait for admission.</p>";
    }

    // Display the current status to the student
    echo "<p>Your current tour registration status: <strong>$currentStatus</strong></p>";

    // Add the rest of your page content or redirect to another page as needed
}
?>
