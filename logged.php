<?php
//Homepage php file
include("includes/head.php"); //implicitly imports includes/directories.php
 ?>

 <!DOCTYPE HTML>
 <head>
  <?php echo $GLOBAL_HEAD; //in includes/head.php
  echo '<link rel="stylesheet" type="text/css" href="'.getCSS(__FILE__).'">';
  echo '<script type="text/javascript" src="'.getJS(__FILE__).'"></script>'; ?>
 </head>
   <body>
       <div class="bar topBar container">
         <div class="row">
           <div class="col-xs-3">
             <?php echo '<img id="profilePic" src="'.$IMAGE_DIR.'dp.jpg"></img>'; ?>
           </div>
           <div class="col-xs-6">
                <form>
                  <i class="fa fa-search"></i>
                  <input type="text" placeholder="Search for a doctor..."></input>
                </form>
           </div>
           <div class="col-xs-3">
             <i class="menuIcon fa fa-bars fa-3x"></i>
           </div>
       </div>
     </div>
     <div class="mainView">
     </div>
     <div class="bar bottomBar container">
      <div class="row">
        <div class="col-xs-4">
          <i class="fa fa-calendar fa-3x"></i>
        </div>
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
          <i class="fa fa-map-marker fa-3x"></i>
        </div>
      </div>
  </div>

 </body>
