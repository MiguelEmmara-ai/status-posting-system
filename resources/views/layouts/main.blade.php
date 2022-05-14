<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- ICO -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/styles.min.css">

    <title>Status Posting System - Assignment 01</title>
</head>

<body>

    <div>
        @yield('container')
    </div>

    <footer class="footer-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="poststatusform.php">Post A New Status</a></li>
                        <li><a href="searchstatusform.php">Search A Status</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="about.php"><strong>About This Assignment</strong><br></a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>COMP721 Web Development<br>Assignment 1<br></h3>
                    <p>The aim of this assignment is to create a diary system for a social networking site. This system
                        will allow users to post their status and save it to a database table. These posted status
                        details can also be retrieved using text matching
                        and all matched status reports can be viewed in the order they are posted.<br></p>
                </div>
                <div class="col item social">
                    <a href="https://github.com/MiguelEmmara-ai" target="_blank"><i
                            class="icon ion-social-github"></i></a>
                </div>
            </div>
            <p class="copyright">Muhamad Miguel Emmara © 2022</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
