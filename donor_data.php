
<?php
/*
    
 <!-- Laurier HABIYAREMYE        REG_NO:  222003068   -->
 <!-- AMBULANCE BOOKING SYSTEM  to fit the better appearence was summarized to be ABS Lines -->


*/
session_start();
// Include database connection file
require_once "config.php";

// Check if email is set in session
if (!isset($_SESSION["email"])) {
    // Redirect user to login page or handle the error
    header("Location: login.php");
    exit();
}



$email = $_SESSION["email"];
$sql = "SELECT Username, Email, Password, UserID, UserType  FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$userData = $result->fetch_assoc();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>USER DETAILS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- icon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
}
.container1 p strong{
    color:#ff6529;
}
.container1 p{
    color:black;
}

        h1 {
            font-size: 36px;
            color: #000080;
            text-align: center;
            margin-bottom: 20px;
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
                    <a href="donor_data.php" class="nav-item nav-link active">PLOFILE</a>
                    <a href="donor_update.php" class="nav-item nav-link">UPDATE</a>
                    <a href="donate.html" class="nav-item nav-link">DONATE</a>
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
            <h1 class="display-2 text-white mb-3 animated slideInDown">DASHBOARD  PAGE</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item" aria-current="page">FEEL THE DASHBOARD</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header  -->
  
    <div class="container1">
    <h1>User Details</h1>
    <p><strong>UserID        :    </strong> <?php echo $userData["UserID"]; ?></p>
    <p><strong>User Name          :    </strong> <?php echo $userData["Username"]; ?></p>
    <p><strong>Email         :    </strong> <?php echo $userData["Email"]; ?></p>
    <p><strong>PASSWORD      :    </strong> <?php echo $userData["Password"]; ?></p>
    <p><strong>Role     :    </strong> <?php echo $userData["UserType"]; ?></p>
</div class="container1">

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