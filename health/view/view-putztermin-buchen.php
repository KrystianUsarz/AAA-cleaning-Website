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

<!-- about -->
<div class="about">
  <div class="container">
    
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
        <div class="aboutimg">
          <form action="" method="POST">

          <div class="row">
            <div>
              <label for="vorname">Vorname</label>
              <input type="namespace" name="vorname" id="vorname">
            </div>
            
            <div>
              <label for="name">Name</label>
              <input type="namespace" name="name" id="name">
            </div>
          </div>
         
          </form>  
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end about -->


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
</html>