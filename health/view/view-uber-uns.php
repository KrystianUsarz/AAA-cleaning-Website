<?php 
  include './model/model-database-connection.php';
  include './html-header.php';
?>

<!-- body -->
<body class="main-layout">

  <?php include 'view-nav.php'?>

<div class="about-bg">
  <div class="container">
    <div class="row">
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="abouttitle">
         <h2>Über Uns</h2>
       </div>
       </div>
    </div>
  </div>
</div>

<!-- about -->
<div class="about">
  <div class="container">
  <?php $reverseOutput = 0; ?>
  <?php $stmt = $pdo->query('SELECT * FROM `uber_uns`');
    foreach($stmt->fetchAll() as $Text) {
      $reverseOutput ++;
    
      if($reverseOutput % 2 === 0)
      { ?>
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
              <div class="aboutimg">
                <figure><img src="./images/freundlichkeit.png" alt="img"/></figure>
                
                
              </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="aboutimg">
                  
                  <p><?php echo($Text['text']) ?></p>
                
                </div>
            </div>
        </div>
      <?php } 
      else
      {?>
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
              <div class="aboutimg">
                
                <p><?php echo($Text['text']) ?></p>
              
              </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="aboutimg">
              <figure><img src="./images/freundlichkeit.png" alt="img"/></figure>
              
              
            </div>
          </div>
        </div>
      <?php }
       } ?>
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