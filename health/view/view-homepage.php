<?php  include './model/model-database-connection.php' ?>

<?php include './html-header.php'?>

<!-- body -->

<body class="main-layout">

    <?php include 'view-nav.php'?>

    <!-- über uns einblich auf der Homepage -->
    <?php $stmt = $pdo->query('SELECT * FROM `homepage-text`');
    foreach($stmt->fetchAll() as $vorschauUberUns) {?>
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="aboutheading">
                        <h2><?php echo($vorschauUberUns['titel']) ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                        <div class="aboutimg">
                            <!-- <figure><img src="images/" alt="img" /></figure> -->  <!-- bild beim text-->
                            <p><?php echo($vorschauUberUns['Context']) ?></p>
                            <a href='<?php  $vorschauUberUns['pfad-seite'] ?>'>read more</a> <!-- mehr lesen Button link zur seite über uns-->
                        </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <!-- end input über uns -->

    <!-- buchungsformular -->

    <form class="Contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="aboutheading">
                        <h2>Termin buchen</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Nachname" type="text"> <!-- inputfeld name -->
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Vorname" type="text"> <!-- inputfeld telnummer -->
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Email" type="email"> <!-- inputfeld email -->
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Telefonummer" type="phonenumber"> <!-- inputfeld telefonnummer -->
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Strasse" type="text"> <!-- inputfeld strasse -->
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="PLZ" type="Text"> <!-- inputfeld plz -->
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Putzstunden" type="halfnumber"> <!-- inputfeld putzstunden -->
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                                <textarea class="textarea" placeholder="Bemerkung"></textarea> <!-- inputfeld text -->
                            </div>
                        </div>
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