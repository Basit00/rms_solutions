<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendors/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/main.css" type="text/css" media="all" />
    <title>Home | RMS Solutions</title>

    <style>
    body {
        background: #f8f9fa;
    }
    .logo {
        width: 3vw;
    }

    .navbar-custom {
        background-color: #ffffff !important;
        color: rgba(255, 255, 255, 1);
    }

    @media only screen and (max-width: 768px) {

        .logo {
            width: 7vw;
        }
    }

    .carousel-item {
        height: 100vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    </style>
</head>

<body class="custom-font">
    <?php include('../includes/navbar.php');?>
    <header>
        <div id="slides" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('../images/slide-1.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4">First Slide</h2>
                        <p class="lead">This is a description for the first slide.</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('../images/slide-2.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4">Second Slide</h2>
                        <p class="lead">This is a description for the second slide.</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('../images/slide-3.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4">Third Slide</h2>
                        <p class="lead">This is a description for the third slide.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <section class="py-5">
        <div class="container">
            <h1 class="display-4">Full Page Image Slider</h1>
            <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The
                images in this snippet are from <a href="https://unsplash.com">Unsplash</a>, taken by <a
                    href="https://unsplash.com/@joannakosinska">Joanna Kosinska</a>!</p>
        </div>
    </section>
    <?php include('../includes/footer.php');?>
    <script src="../vendors/jquery/jquery-3.4.1.min.js"></script>
    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <script src="../vendors/fontawesome/js/all.js"></script>
</body>

</html>