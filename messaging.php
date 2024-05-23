<?php
// Include database connection file
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO messages (Name, Email, Subject, Message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Execute the statement
    if ($stmt->execute()) {
        // Display success notification and redirect to index.php after 2 seconds
        echo '<script>alert("Thanks, ' . $name . '! Your message was successfully sent to the Team."); setTimeout(function(){ window.location.href = "index.html"; }, 2000);</script>';
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
