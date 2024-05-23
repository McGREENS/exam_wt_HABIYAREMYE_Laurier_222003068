<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Campaign</title>
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
         body{
            background-color: #ff6529;
        }
        .container1 {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container1 h2 {
            font-size: 40px;
            color: #f56328;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .container1 label {
            display: block;
            font-size: 18px;
            color: #f68a33;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #074844;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .container1 button {
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

        button:hover {
            background-color: #cd0033;
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
                    <a href="user_data.php" class="nav-item nav-link active">PLOFILE</a>
                    <a href="user_update.php" class="nav-item nav-link">UPDATE</a>
                    <a href="nonprofit_registration.html" class="nav-item nav-link">ADD ORGANIZATION</a>
                    <a href="campaign_form.php" class="nav-item nav-link">CAMPAIGN</a>
                    <a href="events.html" class="nav-item nav-link">EVENT</a>
                    <a href="comment.html" class="nav-item nav-link">COMMENT</a>
                    <a href="impactreports.html" class="nav-item nav-link">REPORT</a>
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

    <!-- Page Header -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">ADD A CAMPAIGN</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item" aria-current="page">CAMPAIGN PAGE</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header -->



<div class="container1">
        <h2>Create New Campaign</h2>
        <form action="create_campaign.php" method="POST">
            <div class="form-group">
                <label for="userID">User ID</label>
                <input type="text" id="userID" name="userID" required>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="categoryID">Category</label>
                <select id="categoryID" name="categoryID" required>
                    <?php
                    // Include database connection file
                    require_once "config.php";
                    $result = $conn->query("SELECT CategoryID, Name FROM categories");
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='{$row['CategoryID']}'>{$row['Name']}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="goal">Goal</label>
                <input type="text" id="goal" name="goal" required>
            </div>
            <div class="form-group">
                <label for="startdate">Start Date</label>
                <input type="date" id="startdate" name="startdate" required>
            </div>
            <div class="form-group">
                <label for="enddate">End Date</label>
                <input type="date" id="enddate" name="enddate" required>
            </div>
            <button type="submit">Create Campaign</button>
        </form>
    </div>
    <!-- Campaign Form End -->

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