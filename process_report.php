<?php
/**
*Created by: LAURIER HABIYAREYE
* Registration Number: 222003068
*School Department: Year 2 in BIT (Business Information Technology)
*Project: FUNDRAISING PLATFORM FOR NON PROFITS ORGANIZATIONS
 
 */
require_once 'config.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $campaignID = $_POST['campaign_id'];
    $reportDate = $_POST['report_date'];
    $description = $_POST['description'];

    $query = "INSERT INTO impactreports (CampaignID, ReportDate, Description) VALUES (?, ?, ?)";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("iss", $campaignID, $reportDate, $description);
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
