<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Rute-8 |</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="asset/rt/public/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/rt/public/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/rt/public/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="asset/rt/public/assets/img/favicons/rute8.png">
    <link rel="manifest" href="asset/rt/public/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="asset/rt/public/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="asset/rt/public/assets/css/theme.css" rel="stylesheet" />

</head>


<body>
    <!-- Start Header/Navigation -->
    <?php include 'inc/nav.php' ?>
    <!-- End Header/Navigation -->

    <!-- Start Home -->
    <?php
    if (isset($_GET['pg'])) {
        if (file_exists('content/' . $_GET['pg'] . '.php')) {
            include 'content/' . $_GET['pg'] . '.php';
        }
    } else {
        include 'content/home.php';
    }
    ?>
    <!-- End Home -->

    <!-- Start Footer Section -->
    <?php include 'inc/footer.php' ?>
    <!-- End Footer Section -->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="asset/rt/public/vendors/@popperjs/popper.min.js"></script>
    <script src="asset/rt/public/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="asset/rt/public/vendors/is/is.min.js"></script>
    <!-- <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script> -->
    <script src="asset/rt/public/vendors/fontawesome/all.min.js"></script>
    <script src="asset/rt/public/assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
</body>

</html>