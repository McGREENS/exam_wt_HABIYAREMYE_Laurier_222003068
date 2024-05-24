<?php
/**
*Created by: LAURIER HABIYAREYE
* Registration Number: 222003068
*School Department: Year 2 in BIT (Business Information Technology)
*Project: FUNDRAISING PLATFORM FOR NON PROFITS ORGANIZATIONS
 
 */
// Include database connection file
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $userID = $_POST['userID'];
    $title = $_POST['title'];
    $categoryID = $_POST['categoryID'];
    $description = $_POST['description'];
    $goal = $_POST['goal'];
    $startDate = $_POST['startdate'];
    $endDate = $_POST['enddate'];

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO campaigns (UserID, Title, CategoryID, Description, Goal, StartDate, EndDate) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isissss", $userID, $title, $categoryID, $description, $goal, $startDate, $endDate);

    // Execute the statement
    if ($stmt->execute()) {
        // Display success notification and redirect
        echo '<script>alert("Your campaign was successfully created."); window.location.href="nonprofit_dashboard.html";</script>';
    } else {
        // Display error message
        echo '<script>alert("Oops! Something went wrong. Please try again later.");</script>';
    }

    // Close statement
    $stmt->close();
    // Close connection
    $conn->close();
}
?>
