<?php 
    include './html-header.php';
    include 'view-admin-nav.php';
?>

<body id="manage-Homepage" class="main-layout all-bodys">

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
                    </div>
                </div>
            </div>
        </div>
    </form>
    
</body>

</html>

