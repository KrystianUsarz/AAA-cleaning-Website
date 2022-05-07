<?php 
    include './model/model-database-connection.php';
    include './html-header.php'
?>

<!-- body -->
<body class="main-layout all-bodys">

    <?php include 'view-nav.php'?>

    <div class="about-bg">
  <div class="container">
    <div class="row">
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="abouttitle">
         <h2>Unsere Angebote</h2>
       </div>
       </div>
    </div>
  </div>
 </div>

 <!-- container für Angebote -->
 <div class="about">
    <div class="container">
        <div class="row Angebotliste">
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                <div class="Angebotliste-preis">
                    <h1 class="title-angebote">Angebote</h1>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                <div class="Angebotliste-angebot">
                    <h1 class="title-angebote">Beschreibung</h1>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                <div class="Angebotliste-preis">
                    <h1 class="title-angebote">Preise</h1>
                </div>
            </div>

            <!-- database output data-->
        <?php $stmt = $pdo->query('SELECT * FROM `angebote`');
            foreach($stmt->fetchAll() as $Angebote) {?>

                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                <div class="Angebotliste-preis">
                    <p class="text-angebote"><?php echo($Angebote['angebotName']) ?></p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                <div class="Angebotliste-preis">
                <p class="text-angebote"><?php echo($Angebote['angebotBeschreibung']) ?></p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                <div class="Angebotliste-preis">
                    <p class="text-angebote"><?php echo($Angebote['angebotPreis']) ?> Fr.</p>
                </div>
            </div>
            <?php } ?>
            <!-- end database output data-->
            
        </div>
    </div>
 </div>

 <!-- end container -->
    
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