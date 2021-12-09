<!DOCTYPE html>
<html lang="en">

<?php include './html-header.php'?>

<!-- body -->

<body class="main-layout">

    <?php include 'view-nav.php'?>

    <!-- über uns einblich auf der Homepage -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="aboutheading">
                        <h2>Über uns</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="aboutimg">
                        <!-- <figure><img src="images/" alt="img" /></figure> -->  <!-- bild beim text-->
                        <p>
                            Wir sind eine kleine Firma welche es seit 2019 gibt. Wir sind sehr zuverlässig und flexibel. Wenn sie mal einen Termin verschieben möchten können sie uns anrufen und wir finden zusammen eine lösung.
                            Auch wenn wir mal nicht zum Putztermin erscheinen können geben wir Ihnen so früh wie möglich bescheid. Unser Ziel ist es unsere Kunden mit unserer Dienstleistung zu erfreuen und Zufriedenzustellen.
                        </p>
                        <a href="index.php?page=uberuns">read more</a> <!-- mehr lesen Button link zur seite über uns-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end input über uns -->

    <!-- buchungsformular -->

    <form class="Contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage3">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form>
                        <div class="row">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Your name" type="Your name"> <!-- inputfeld name -->
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Phone" type="phone"> <!-- inputfeld telnummer -->
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Email" type="email"> <!-- inputfeld email -->
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                                <textarea class="textarea" placeholder="Message"></textarea> <!-- inputfeld text -->
                            </div>
                        </div>
                    </form>
                </div>

                <button class="send-btn">Make an Appointment</button>
            </div>
        </div>
    </form>
    <!-- end buchungsformular-->

    
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>

    <?php include 'view-footer.php' ?>

    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>