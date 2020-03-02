<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendors/bootstrap-4.4.1-dist/css/bootstrap.min.css">
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
    <!-- Page Content -->
    <section class="pt-5">
        <div class="container pt-5">
            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to
                contact us directly. Our team will come back to you within
                a matter of hours to help you.</p>

            <div class="row">
                <!--Grid column-->
                <div class="col-md-12 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="name" class="">Your name</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="email" class="">Your email</label>
                                    <input type="text" id="email" name="email" class="form-control">
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="subject" class="">Subject</label>
                                    <input type="text" id="subject" name="subject" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <label for="message">Your message</label>
                                    <textarea type="text" id="message" name="message" rows="2"
                                        class="form-control md-textarea"></textarea>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>
                    <div class="text-center text-md-left pt-2">
                        <a class="btn btn-primary" href='#' onclick="validateForm();">Send</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->
            </div>
        </div>
    </section>
    <?php include('../includes/footer.php');?>
    <script src="../vendors/jquery/jquery-3.4.1.min.js"></script>
    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <script>
    function validateForm() {
        $('#status').HTML = "Sending...";
        formData = {
            'name': $('input[name=name]').val(),
            'email': $('input[name=email]').val(),
            'subject': $('input[name=subject]').val(),
            'message': $('textarea[name=message]').val()
        };


        $.ajax({
            url: "mail.php",
            type: "POST",
            data: formData,
            success: function(data, textStatus, jqXHR) {

                $('#status').text(data.message);
                if (data.code) //If mail was sent successfully, reset the form.
                    $('#contact-form').closest('form').find("input[type=text], textarea").val("");
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $('#status').text(jqXHR);
            }
        });
    }
    </script>
</body>

</html>