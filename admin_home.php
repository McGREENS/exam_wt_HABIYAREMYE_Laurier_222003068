
<?php
/**
*Created by: LAURIER HABIYAREYE
* Registration Number: 222003068
*School Department: Year 2 in BIT (Business Information Technology)
*Project: FUNDRAISING PLATFORM FOR NON PROFITS ORGANIZATIONS
 
 */
// Include database connection file
require_once "config.php";

// Fetch total number of users from the database
$sql_users = "SELECT COUNT(*) AS total_users FROM users";
$result_users = $conn->query($sql_users);
$total_users = $result_users->fetch_assoc()['total_users'];

// Fetch total number of courses from the database
$sql_campaigns = "SELECT COUNT(DISTINCT CampaignID) AS total_campaigns FROM campaigns";

$result_campaigns = $conn->query($sql_campaigns);
$total_campaigns = $result_campaigns->fetch_assoc()['total_campaigns'];

// Fetch total number of events from the database
$sql_events = "SELECT COUNT(DISTINCT EventID) AS total_events FROM events";

$result_events = $conn->query($sql_events);
$total_events = $result_events->fetch_assoc()['total_events'];

// Fetch total number of donations from the database
$sql_donations = "SELECT COUNT(DISTINCT DonationID) AS total_donations FROM donations";

$result_donations = $conn->query($sql_donations);
$total_donations = $result_donations->fetch_assoc()['total_donations'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fundraising Platform For Nonprofits</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ff6529;
            margin: 0;
            padding: 0;
        }

        .container1 {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .container1 h1 {
            font-size: 45px;
            color: #a53c12;
            margin-bottom: 30px;
        }

       .container1 label {
            display: block;
            font-size: 18px;
            color: #f68a33;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #074844;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        .container1 input[type="submit"] {
            background-color: #de5414;
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            margin-top: 20px;
        }

        .container1 input[type="submit"]:hover {
            background-color: #cd0059;
        }
        .container1 p {
            text-align: center;
            margin-top: 20px;
        }

        .container1  p a {
            color: #f56328;
            text-decoration: none;
        }

        .container1 p a:hover {
            text-decoration: underline;
        }

        .sidebar {
            width: 250px;
            float: left;
            background-color: #333;
            padding: 20px;
            box-sizing: border-box;
        }

        .sidebar h2 {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 40px;
            color: #f56328;
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar li {
            background-color: rgb(43, 20, 20);
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            text-align: center;
        }

        .sidebar a {
            text-decoration: none;
            color: #f56328;
            font-size: 18px;
            transition: all 0.3s ease;
            display: block;
        }

        .sidebar a:hover {
            background-color: #ff7e61;
        }

        .content {
            margin-left: 270px;
            padding: 20px;
        }

        .content h2 {
            color: green;
            margin-bottom: 20px;
        }

        #section h2 {
            color: red;
        }

        section {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        section:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        h2 {
           text-align: center;
           font-size: 30px;
           font-family: "Arial", sans-serif; 
           font-style: bold;
           color: red; 
        }

        #overview h2 {
            text-align: center;
            font-size: 30px;
            font-family: "Arial", sans-serif;
            color: green;
        }

        #overview {
            background-color: #f9f9f9;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #overview h2 {
            text-align: center;
            font-size: 40px;
            color: #333;
            margin-bottom: 20px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        #overview p {
            text-align: center;
            font-size: 18px;
            color: black;
            margin-bottom: 10px;
        }

        #overview ul {
            list-style-type: none;
            padding: 28;
        }

        #overview li {
            
            font-size: 30px;
            color: green;
            margin-bottom: 5px;
        }

       
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>RN1, HUYE, RWANDA</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@fpnp.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-white-50 ms-3" href="https://web.facebook.com/laurier.mcgreens"><i class="fab fa-facebook-f"></i></a>
                <a class="text-white-50 ms-3" href="https://twitter.com/Dj_Greens250"><i class="fab fa-twitter"></i></a>
                <a class="text-white-50 ms-3" href="https://instagram.com/Dj_Greens250"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">Fundraising<span class="text-white">PNP</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="admin_view_details.php" class="nav-item nav-link active">PROFILE</a>
                    <a href="admin_update_data.html" class="nav-item nav-link">UPDATE</a>
                    <a href="admin_home.php" class="nav-item nav-link">DATABASE</a>
                    
                    
                    
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="logout.php">
                        LOGOUT
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

            <!-- Page Header  -->
            <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container text-center py-5 mt-4">
                    <h1 class="display-2 text-white mb-3 animated slideInDown">ADMINISTRATION PANEL</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item" aria-current="page">DASHBOARD</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header  -->

    <!-- Sidebar navigation menu -->
    <div class="sidebar">
        <h2>ADMIN PANEL</h2>
        <ul>
            <li><a href="#overview">Dashboard Overview</a></li>
            <li><a href="#manage-users">Manage Users</a></li>
            <li><a href="#manage-campaigns">Manage Campaigns</a></li>
            <li><a href="#manage-events">Manage Events</a></li>
            <li><a href="#view-donation">Manage Donations</a></li>
            <li><a href="#admin_view_details.php">Admin Details</a></li>
            <li><a href="admin_update_data.html">Settings & Preferences</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <!-- Sidebar navigation menu -->



        <!-- Main content area -->
        <div class="content">
            <!-- Dashboard Overview -->
            <section id="overview">
                <h2>DASHBOARD OVERIEW</h2>
                <p>Welcome to the Dashboard Overview section. Here, you can find a summary of key metrics and statistics:</p>
                <ul>
                    <li>NUMBER OF ALL USERS: <b><?php echo $total_users; ?></li></b> 
                    <li>NUMBER OF ACTIVE CAMPAIGNS: <b><?php echo $total_campaigns; ?></li></b>
                    <li>NUMBER OF EVENTS : <b><?php echo $total_events; ?></li></b>
                    <li> NUMBER OF DONATIONS: <b><?php echo $total_donations; ?></li></b>
                </ul>
            </section>
            
            <!-- Manage Users -->
            <section id="manage-users">
                <h2>MANAGE USERS</h2>
                <?php include "manage_users.php"; ?>
                <!-- Add user management functionality here -->
            </section>
    
            <!-- Manage  -->
            <section id="manage-campaigns">
                <h2>MANAGE CAMPAIGNS</h2>
                <?php include "manage_campaigns.php"; ?>
                <!-- Add course management functionality here -->
            </section>
    
            <!-- Manage  -->
            <section id="manage-events">
                <h2>MANAGE EVENTS</h2>
                <?php include "manage_events.php"; ?>
                <!-- Add enrollment management functionality here -->
            </section>
    
            <!-- View  -->
            <section id="view-donations">
                <h2>VIEW DONATIONS</h2>
                <?php include "manage_donations.php"; ?>
                <!-- Add transaction viewing functionality here -->
            </section>
    
            
    
            
        </div>
    




    
  

<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h1 class="fw-bold text-primary mb-4"  style=" margin-left: -40px;">Fundraising<span class="text-white">PNP</span></h1>
                <p>At our core, we believe in the transformative power of humanity. Every action, every gesture of kindness, brings us closer to a brighter tomorrow.</p>
                <div class="d-flex pt-2">
                    <a class="text-white-50 ms-3" href="https://web.facebook.com/laurier.mcgreens"><i class="fab fa-facebook-f"></i></a>
                    <a class="text-white-50 ms-3" href="https://twitter.com/Dj_Greens250"><i class="fab fa-twitter"></i></a>
                    <a class="text-white-50 ms-3" href="https://instagram.com/Dj_Greens250"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Address</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>RN1, HUYE, RWANDA</p>
                <p><i class="fa fa-phone-alt me-3"></i>+250 780 000 000</p>
                <p><i class="fa fa-envelope me-3"></i>info@fpnp.com</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="about.html">About Us</a>
                <a class="btn btn-link" href="contact.html">Contact Us</a>
                <a class="btn btn-link" href="service.html">Our Services</a>
                <a class="btn btn-link" href="#">Terms & Condition</a>
                <a class="btn btn-link" href="contact.html">Support</a>
            </div>
            <div class="col-lg-3 col-md-6">
               <h5 class="text-light mb-4">Newsletter</h5>
               <p>For a time you need to receive our news in emails, <br>Please enter your email</p>
               <div class="position-relative mx-auto" style="max-width: 400px;">
               <form method="POST" action="newsletter_signup.php">
              <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="email" name="email" placeholder="Your email" required>
            <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
        </form>
    </div>
</div>

        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="index.html">Fundraising Platform For Nonprofits</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                   
                    Designed By <a href="https://instagram.com/Dj_Greens250">Laurier HABIYAREMYE</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/parallax/parallax.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>
