<?php
/*
    
 <!-- Laurier HABIYAREMYE        REG_NO:  222003068   -->
 <!-- Fundraising Platform For Nonprofits  to fit the better appearence was summarized to be FPNP -->


*/

require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $comment = htmlspecialchars(trim($_POST['comment']));

    if (!empty($name) && !empty($comment)) {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO comments (name, comment) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $comment);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect back to the comment page after successful insertion
            header("Location: comment.html");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Please fill out both fields.";
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
?>
