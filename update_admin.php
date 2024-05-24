<?php
/**
*Created by: LAURIER HABIYAREYE
* Registration Number: 222003068
*School Department: Year 2 in BIT (Business Information Technology)
*Project: FUNDRAISING PLATFORM FOR NON PROFITS ORGANIZATIONS
 
 */
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $column = filter_var($_POST['column'], FILTER_SANITIZE_STRING);
    $value = filter_var($_POST['value'], FILTER_SANITIZE_STRING);

    try {
        $sql = "UPDATE admin SET $column = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        
        if ($stmt === false) {
            throw new Exception("Failed to prepare SQL statement.");
        }

        $stmt->bind_param('ss', $value, $email);

        $stmt->execute();

        $rowsAffected = $stmt->affected_rows;
        if ($rowsAffected > 0) {
            echo "<script>alert('User data updated successfully!'); window.location.href = 'admin_home.php';</script>";
        } else {
            echo "<script>alert('No changes were made.'); window.location.href = 'admin_home.php';</script>";
        }

        $stmt->close();
    } catch (Exception $e) {
        echo "Error updating user data: " . $e->getMessage();
        error_log("Update user data error: " . $e->getMessage());
    }
    
    $conn->close();
}
?>
