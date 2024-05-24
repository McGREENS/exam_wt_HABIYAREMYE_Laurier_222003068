<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage CAMPAIGNS</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Table Styles */
        .styled-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead th {
            background-color:rgb(31, 243, 101);
            color: #fff;
            font-weight: bold;
            text-align: left;
            padding: 12px;
        }

        .styled-table tbody td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        .styled-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .styled-table tbody tr:hover {
            background-color: #e0e0e0;
        }

        .styled-table tbody td a {
            text-decoration: none;
            color: #007bff;
            cursor: pointer;
            margin-right: 10px;
        }
    </style>
</head>
<body>
   
    <!-- Table to display user information -->
    <table class="styled-table">
        <thead>
            <tr>
                <th>CampaignID</th>
                <th>UserID</th>
                <th>Title</th>
                <th>CategoryID</th>
                <th>Goal</th>
                <th>StartDate</th>
                <th>EndDate</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
/**
*Created by: LAURIER HABIYAREYE
* Registration Number: 222003068
*School Department: Year 2 in BIT (Business Information Technology)
*Project: FUNDRAISING PLATFORM FOR NON PROFITS ORGANIZATIONS
 
 */
            // Include database connection file
            require_once "config.php";

            // Retrieve all users from the database
            $sql = "SELECT * FROM campaigns";
            $result = $conn->query($sql);

            // Check if users exist
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["CampaignID"] . "</td>";
                    echo "<td>" . $row["UserID"] . "</td>";
                    echo "<td>" . $row["Title"] . "</td>";
                    echo "<td>" . $row["CategoryID"] . "</td>";
                    echo "<td>" . $row["Goal"] . "</td>";
                    echo "<td>" . $row["StartDate"] . "</td>";
                    echo "<td>" . $row["EndDate"] . "</td>";
                    echo "<td>";
                    // Add action buttons (Edit and Delete)
                    echo "<a href='delete_campaigns.php?id=" . $row["CampaignID"] . "' onclick='return confirm(\"Are you sure you want to delete this Campaign?\")'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No users found.</td></tr>";
            }

            // Close database connection
            
            ?>
        </tbody>
    </table>
</body>
</html>
