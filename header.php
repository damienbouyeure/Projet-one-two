
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-inner">
    <div class="col-sm-12 col-md-12" >&nbsp</div>
    <div class="col-sm-2 col-md-2">
    <a class="brand" href="accueil.php" ><img width="40%" alt="Logo" src="logoOverCraft.png"  class="pull-left img-responsive"></a>
  </div>

    <div class="col-sm-8 col-md-8">
    <div align="center">
    <img src="banniere.png" width="60%" class="img-responsive">
    </div></div>
    <div class="col-sm-2 col-md-2">
      <?php 
      if(isset($_SESSION['Identifiant'])) {
      ?>
  
    <div class="well pull-right ">

      <?php 
      $Identifiant=$_SESSION['Identifiant'];
      echo "Bonjour ".$Identifiant;

      ?>
    </div></div>
    <?php } ?>
  </div>
</div>


	  </div>
</nav>