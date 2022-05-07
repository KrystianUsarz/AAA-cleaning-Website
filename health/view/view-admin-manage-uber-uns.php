<?php 
    include './model/model-admin-manage-uber-uns.php';
    include './html-header.php';
    include 'view-admin-nav.php';
?>

<body id="manage-Angebote" class="main-layout all-bodys">

    <form class="Contact" action="index.php?page=manageuberuns" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="aboutheading">
                        <h2>Über Uns Verwalten</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <input name="uberunstitel" id="uberunstitel" class="form-control" placeholder="Titel" type="text"> <!-- inputfeld titel -->
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <textarea name="uberunstext" id="uberunstext" class="textarea" placeholder="Text"></textarea> <!-- inputfeld text -->
                        </div>
                    </div>
                </div>
                <button class="send-btn">Text hinzufügen</button>
            </div>
        </div>
    </form>

    <form class="Contact" action="index.php?page=manageuberuns" method="POST">
        <div class="container">
            <div class="about">
                <div class="container">
                    <div class="row Angebotliste">

                        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                            <div class="Angebotliste-preis">
                                <h1 class="title-angebote">Titel</h1>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                            <div class="Angebotliste-angebot">
                                <h1 class="title-angebote">Text</h1>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                            <div class="Angebotliste-Optionen">
                                <h1 class="title-angebote">Optionen</h1>
                            </div>
                        </div>

                        <!-- database output data-->
                        <?php $stmt = $pdo->query('SELECT * FROM `uber_uns`');
                        foreach($stmt->fetchAll() as $UberUns) {?>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                <div class="Angebotliste-preis">
                                    <p class="text-angebote"><?php echo($UberUns['uberunsTitel']) ?></p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                <div class="Angebotliste-preis">
                                <p class="text-angebote"><?php echo($UberUns['uberunsText']) ?></p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                <input type='hidden' name='deleteuberuns' id='deleteuberuns' value='<?php echo($UberUns['ID']) ?>'>
                                <button class="txt-angebote delete-btn">löschen</button>
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

