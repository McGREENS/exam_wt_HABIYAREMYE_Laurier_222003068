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


$name = $_POST['name'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$role = $_POST['role'];
$password = $_POST['password'];


$sql = "INSERT INTO admin (Name, PhoneNumber, Email, Role, Password)
        VALUES ('$name', '$phonenumber', '$email', '$role', '$password')";

if ($conn->query($sql) === TRUE) {
   
    echo "<script>alert('Hello $name, your registration was successfully submitted');</script>";

    echo "<script>window.location.href = 'admin_login.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
    
