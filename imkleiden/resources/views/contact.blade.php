<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Imkers Leiden Project">
    <meta name="author" content="Sander Grimmelikhuizen, Eloy Maddamin, Marciano Hardoar">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <title>imkers leiden</title>


</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>

<header>


    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Imkers Leiden</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Activiteiten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Bezittingen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Bijen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Bijenteelt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Cursussen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Leden</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Bijennest melden</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Rooster</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Tips</a>
                </li><li class="nav-item">
                    <a class="nav-link disabled" href="#">Vereniging</a>
                </li><li class="nav-item">
                    <a class="nav-link disabled" href="#">Wespen</a>
                </li><li class="nav-item">
                    <a class="nav-link disabled" href="#">Zwerm</a>
            </ul>
            <button type="button" class="btn btn-success navbar-btn btn-circle">Admin-panel</button>
        </div>
    </nav>
</header>

<br><br><br><br><br>
<section class="Material-contact-section section-padding section-dark">
    <div class="container">
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                <h1 class="section-title">Contact us!</h1>
            </div>
        </div>
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                <p>Een zwerm gezien, of wilt u contact met ons opnemen. hieronder staan onze gegevens of vul de formulier in en wij nemen zo snel mogelijk contact met u op. </p>

                <div class="find-widget">
                    Bedrijf:  <a href="https://hostriver.ro">ImkersLeiden</a>
                </div>
                <div class="find-widget">
                    Adres: <a href="#">Betaplein 18, leiden</a>
                </div>
                <div class="find-widget">
                    Telefoonnummer:  <a href="#">07043443</a>
                </div>

                <div class="find-widget">
                    Website:  <a href="https://uny.ro">www.imkersleiden.nl</a>
                </div>
                <div class="find-widget">
                    Openingstijden: <a href="#">Man t/m Zat: 09:30 AM - 16.30 PM</a>
                </div>
            </div>





            <!-- contact form -->
            <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                    <!-- Name -->
                    <div class="form-group label-floating">
                        <label class="control-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- email -->
                    <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Subject -->
                    <div class="form-group label-floating">
                        <label class="control-label">Onderwerp</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Message -->
                    <div class="form-group label-floating">
                        <label for="message" class="control-label">Bericht</label>
                        <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Form Submit -->
                    <div class="form-submit mt-5">

                        <button type="button" class="btn btn-success">Verstuur bericht</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<img src="https://www.imkersleiden.nl/wp-content/uploads/2020/02/cropped-Favicon-Imker-270x270.png" style="margin-top: -25vh; margin-left: 15vw;">

<br><br><br><br>
    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Terug naar boven</a></p>
        <p>© 2020 imk leiden Project Groep 3 · <a href="#">Privacy</a> · <a href="#">Condities</a></p>
    </footer>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg></body>
</html>

