<?php
require_once 'config.php'; // Ensure this file contains your database connection setup

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $campaignID = $_POST['campaign_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $donationDate = date('Y-m-d H:i:s');

    $query = "INSERT INTO donations (CampaignID, Name, Email, Amount, DonationDate) VALUES (?, ?, ?, ?, ?)";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("issds", $campaignID, $name, $email, $amount, $donationDate);
        if ($stmt->execute()) {
            header('Location: donor_dashboard.html');
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Error: " . $conn->error;
    }
    $stmt->close();
}
$conn->close();
?>
