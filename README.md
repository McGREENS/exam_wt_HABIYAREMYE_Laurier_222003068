# exam_wt_HABIYAREMYE_Laurier_222003068
Fundraising platform for nonprofits



# Fundraising Platform for Nonprofits

## Table of Contents
1. [Introduction](#introduction)
2. [Features](#features)
3. [Technologies Used](#technologies-used)
4. [Usage](#usage)
5. [Database Configuration](#database-configuration)
6. [Project Structure](#project-structure)
7. [Contributing](#contributing)
8. [Author](#author)
9. [License](#license)

## Introduction
The Fundraising Platform for Nonprofits is a web application designed to help nonprofit organizations manage and facilitate fundraising campaigns. The platform allows nonprofits to create campaigns, accept donations, and track the progress of their fundraising efforts.

## Features
- User registration and login system
- Campaign creation and management
- Donation processing
- Campaign progress tracking
- Administrative interface for managing users and campaigns

## Technologies Used
- **Frontend**: HTML, CSS, JavaScript and SCSS
- **Backend**: PHP
- **Database**: MySQL

## Installation
Follow these steps to set up the project on your local machine.

### Prerequisites
- PHP (version 7.4 or later)
- MySQL (version 5.7 or later)
- A web server (e.g., Apache, Nginx)
- Composer (for dependency management)


 **Configure the database:**
    - Create a MySQL database named `fundraising_platform_for_nonprofits`.
    - Update the `config.php` file with your database credentials.
    ```php
    <?php
    
    define('DB_SERVER', 'localhost');                        
    define('DB_USERNAME', 'root');                        
    define('DB_PASSWORD', '');                    
    define('DB_NAME', 'fundraising_platform_for_nonprofits');    
    define('DB_PORT', '3306');                           

    // connect to the database
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>
    ```



## Usage
- Register as a new user.
- Log in with your credentials.
- Create and manage fundraising campaigns.
- Donate to existing campaigns.

## Database Configuration
My database connection file `config.php` file is correctly set up with your MySQL database credentials. The structure of the database includes the following tables:
- `users`
- `campaigns`
- `donations`
- `events`
- `impact_reports`
- `nonprofits`

## Project Structure
fundraising_platform_for_nonprofits/
├── config.php
├── index.php
├── register.php
├── login.php
├── campaigns/
│ ├── create_campaign.php
│ ├── manage_campaigns.php
│ └── delete_campaign.php
├── donations/
│ ├── donate.php
│ └── manage_donations.php
├── events/
│ ├── create_event.php
│ └── manage_events.php
├── impact_reports/
│ ├── create_report.php
│ └── manage_reports.php
├── nonprofits/
│ ├── register_nonprofit.php
│ └── manage_nonprofits.php
├── assets/
│ ├── css/
│ └── js/
└── migrations/
└── schema.sql




## Contributing
Contributions are welcome! Please fork the repository and create a pull request with your changes.

## Author
Created by: **Laurier Habiyareye**
- **Registration Number**: 222003068
- **School Department**: Year 2 in BIT (Business Information Technology)

## License
This project is licensed under the MIT License, and Bootstrap v1.0.

