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
    $email = $_POST['email'];

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO newsletter (Email, Date) VALUES (?, NOW())");
    $stmt->bind_param("s", $email);

    // Execute the statement
    if ($stmt->execute()) {
        // Display success notification and redirect to index.php after 2 seconds
        echo '<script>alert("Thanks! Your email has been successfully added to our newsletter."); setTimeout(function(){ window.location.href = "index.html"; }, 2000);</script>';
    } else {
        // Display error message
        echo '<script>alert("Oops! Something went wrong. Please try again later."); window.location.href = "index.php";</script>';
    }

    // Close statement
    $stmt->close();
    // Close connection
    $conn->close();
}
?>
