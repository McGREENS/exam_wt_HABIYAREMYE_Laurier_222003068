<?php

/**
*Created by: LAURIER HABIYAREYE
* Registration Number: 222003068
*School Department: Year 2 in BIT (Business Information Technology)
*Project: FUNDRAISING PLATFORM FOR NON PROFITS ORGANIZATIONS
 
 */
require_once 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $website = $_POST['website'];

    $sql = "INSERT INTO nonprofits (UserID, Name, Description, Website) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isss", $user_id, $name, $description, $website);

    $response = [];
    if ($stmt->execute()) {
        $response['success'] = true;
    } else {
        $response['success'] = false;
        $response['message'] = $stmt->error;
    }

    $stmt->close();
    $conn->close();

    echo json_encode($response);
}
?>
