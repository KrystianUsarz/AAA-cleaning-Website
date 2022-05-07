<?php 
    include './model/model-admin-manage-angebote.php';
    include './html-header.php';
    include 'view-admin-nav.php';
?>

<body id="manage-Angebote">

    <form class="Contact" action="index.php?page=manageangebote" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="aboutheading">
                        <h2>Angebote Verwalten</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <input name="angebot" id="angebot" class="form-control" placeholder="Angebot" type="text"> <!-- inputfeld angebot -->
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <input name="beschreibung" id="beschreibung" class="form-control" placeholder="Beschreibung" type="text"> <!-- inputfeld beschreibung -->
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <input name="preis" id="preis" class="form-control" placeholder="Preis" type="halfnumber"> <!-- inputfeld preis -->
                        </div>
                    </div>
                </div>
                <button class="send-btn">Angebot hinzufügen</button>
            </div>
        </div>
    </form>

    <form class="Contact" action="index.php?page=manageangebote" method="POST">
        <div class="container">
            <div class="about">
                <div class="container">
                    <div class="row Angebotliste">
                        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
                            <div class="Angebotliste-preis">
                                <h1 class="title-angebote">Angebote</h1>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
                            <div class="Angebotliste-angebot">
                                <h1 class="title-angebote">Beschreibung</h1>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
                            <div class="Angebotliste-preis">
                                <h1 class="title-angebote">Preise</h1>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
                            <div class="Angebotliste-Optionen">
                                <h1 class="title-angebote">Optionen</h1>
                            </div>
                        </div>

                        <!-- database output data-->
                        <?php $stmt = $pdo->query('SELECT * FROM `angebote`');
                        foreach($stmt->fetchAll() as $Angebote) {?>
                            <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
                                <div class="Angebotliste-preis">
                                    <p class="text-angebote"><?php echo($Angebote['angebotName']) ?></p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
                                <div class="Angebotliste-preis">
                                <p class="text-angebote"><?php echo($Angebote['angebotBeschreibung']) ?></p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
                                <div class="Angebotliste-preis">
                                    <p class="text-angebote"><?php echo($Angebote['angebotPreis']) ?> Fr.</p>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
                                <input type='hidden' name='delete' id='delete' value='<?php echo($Angebote['ID']) ?>'>
                                <button class="delete-btn">löschen</button>
                            </div>
                            
                        <?php } ?>
                        <!-- end database output data-->
                        
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
                    
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

</html>

