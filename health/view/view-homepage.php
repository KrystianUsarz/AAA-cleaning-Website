<?php  include './model/model-database-connection.php' ?>

<?php include './html-header.php'?>

<!-- body -->

<body class="main-layout">

    <?php include 'view-nav.php'?>

    <!-- über uns einblich auf der Homepage -->
    <?php $stmt = $pdo->query('SELECT * FROM `homepage_text`');
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
                                <p><?php echo($vorschauUberUns['text']) ?></p>
                                <a href='<?php  echo($vorschauUberUns['pfad_seite']) ?>'>read more</a> <!-- mehr lesen Button link zur seite über uns-->
                            </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
    <!-- end input über uns -->

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