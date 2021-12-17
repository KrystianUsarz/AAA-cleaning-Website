<?php 
    include './html-header.php';
?>

<!-- body -->

<body class="main-layout">

    <?php include 'view-nav.php'?>

    <form class="Contact" action="" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="aboutheading">
                        <h2>Adminbereich</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="row login-admin">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input name="username" id="username" class="form-control" placeholder="Benutzername" type="text"> 
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input name="password" id="password" class="form-control" placeholder="Passwort" type="text"> 
                            </div>
                        </div>
                </div>
                <button class="send-btn">Einloggen</button>
            </div>
        </div>
    </form>


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