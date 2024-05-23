<?php
/**
*Created by: LAURIER HABIYAREYE
* Registration Number: 222003068
*School Department: Year 2 in BIT (Business Information Technology)
*Project: FUNDRAISING PLATFORM FOR NON PROFITS ORGANIZATIONS
 
 */
// Include database connection file
require_once "config.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$userType = $_POST['userType'];
$password = $_POST['password'];


// Insert data into database
$sql = "INSERT INTO users (Username, Email,Password, UserType)
        VALUES ('$username', '$email', '$password', '$userType')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Hello $username, your registration was successfully submitted');</script>";
    echo "<script>window.location.href = 'login.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
/*
    
 <!-- Laurier HABIYAREMYE        REG_NO:  222003068   -->
 <!-- Fundraising Platform For Nonprofits  to fit the better appearence was summarized to be FPNP -->


*/
?>
