<?php include './model/model-putztermin-buchen.php'?>

<!DOCTYPE html>
<html lang="en">
  
<?php include './html-header.php'?>

    <!-- body -->
    <body class="main-layout">

        <?php include 'view-nav.php'?>

        <div class="about-bg">
        <div class="container">
            <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="abouttitle">
                <h2>Putztermin buchen</h2>
            </div>
            </div>
            </div>
        </div>
        </div>

        <?php $Errorcounter = '#' ?>
        <!-- Fehler aus Formular anzeigen -->
        <?php if (count($errors) > 0) { ?>
            <div class="error-box">
                <ul>
                    <?php foreach ($errors as $error) { ?>
                        <li><?= "$Errorcounter  $error" ?></li>
                    <?php } ?>
                </ul>
            </div>
    <?php } ?>

        <!-- buchungsformular -->
        <form class="Contact" action="index.php?page=putzterminbuchen" method="POST">
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
                                    <input name="nachname" id="nachname" class="form-control" placeholder="Nachname" type="text"> <!-- inputfeld name -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input name="vorname" id="vorname" class="form-control" placeholder="Vorname" type="text"> <!-- inputfeld telnummer -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input name="email" id="email" class="form-control" placeholder="Email" type="email"> <!-- inputfeld email -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input name="telefonummer" id="telefonummer" class="form-control" placeholder="Telefonummer" type="phonenumber"> <!-- inputfeld telefonnummer -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input name="strasse" id="strasse"class="form-control" placeholder="Strasse" type="text"> <!-- inputfeld strasse -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input name="plz" id="plz" class="form-control" placeholder="PLZ" type="Text"> <!-- inputfeld plz -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input name="ort" id="ort" class="form-control" placeholder="Ort" type="Text"> <!-- inputfeld plz -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input name="putzstunden" id="putzstunden" class="form-control" placeholder="Putzstunden" type="halfnumber"> <!-- inputfeld putzstunden -->
                                </div>

                                <?php  
                                    $value = 0;
                                    
                                    $stmt = $pdo->query('SELECT * FROM `termin_buchen`');
                                    foreach($stmt->fetchAll() as $Kunde){
                                        $value = $Kunde['KundeID'];
                                    }

                                    echo("<input type='hidden' name='kundenID' id='kundenID' value='$value'>");
                                ?>    
                            
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                    <h3>Best passende Halbtage für einen Putztermin</h3>
  
                                    <div class="checkbox">
                                        <ol name="favoriten" id="favoriten">                
                                            <li><label class="checkbox-label"><input type="checkbox" value="1" name="halbtage[]">  Mittwoch Morgen</label></li>
                                            <li><label class="checkbox-label"><input type="checkbox" value="2" name="halbtage[]">  Mittwoch Namittag</label></li>
                                            <li><label class="checkbox-label"><input type="checkbox" value="3" name="halbtage[]">  Donerstag Morgen</label></li>
                                            <li><label class="checkbox-label"><input type="checkbox" value="4" name="halbtage[]">  Donerstag Namittag</label></li>
                                            <li><label class="checkbox-label"><input type="checkbox" value="5" name="halbtage[]">  Freitag Morgen</label></li>
                                            <li><label class="checkbox-label"><input type="checkbox" value="6" name="halbtage[]">  Freitag Namittag</label></li>
                                        </ol>
                                    </div>
                                </div>

                                
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea name="bemerkungen" id="bemerkungen" class="textarea" placeholder="Bemerkung"></textarea> <!-- inputfeld text -->
                                </div>
                            </div>
                        </div>
                    <button class="send-btn">Absenden</button>
                </div>
            </div>
        </form>
        <!-- end buchungsformular-->


        <?php include 'view-footer.php'?>

        <!-- Javascript files--> 
        <script src="js/jquery.min.js"></script> 
        <script src="js/popper.min.js"></script> 
        <script src="js/bootstrap.bundle.min.js"></script> 
        <script src="js/jquery-3.0.0.min.js"></script> 
        <script src="js/plugin.js"></script> 

        <!-- sidebar --> 
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
        <script src="js/custom.js"></script>
    </body>