<?php

/**
*Created by: LAURIER HABIYAREYE
* Registration Number: 222003068
*School Department: Year 2 in BIT (Business Information Technology)
*Project: FUNDRAISING PLATFORM FOR NON PROFITS ORGANIZATIONS
 
 */
require_once 'config.php'; 



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nonprofitID = $_POST['nonprofit_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $eventDate = $_POST['event_date'];
    $location = $_POST['location'];

    $query = "INSERT INTO events (NonprofitID, Title, Description, EventDate, Location) VALUES (?, ?, ?, ?, ?)";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("issss", $nonprofitID, $title, $description, $eventDate, $location);
        if ($stmt->execute()) {
            echo 'success';
        } else {
            echo 'Error: ' . $stmt->error;
        }
    } else {
        echo 'Error: ' . $conn->error;
    }
    $stmt->close();
}
$conn->close();
?>
