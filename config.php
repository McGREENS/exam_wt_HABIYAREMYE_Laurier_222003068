<?php

/**
*Created by: LAURIER HABIYAREYE
* Registration Number: 222003068
*School Department: Year 2 in BIT (Business Information Technology)
*Project: FUNDRAISING PLATFORM FOR NON PROFITS ORGANIZATIONS
 
 */
// Database configuration
define('DB_SERVER', 'localhost');                        // Dabase location
define('DB_USERNAME', 'root');                        // User with privileges
define('DB_PASSWORD', '');                    // Pasword
define('DB_NAME', 'fundraising_platform_for_nonprofits');    // Database name 
define('DB_PORT', '3306');                           // Port used by mysql

// connect to the database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
