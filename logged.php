<?php
//Homepage php file
include("includes/head.php"); //implicitly imports includes/directories.php
 ?>

 <!DOCTYPE HTML>
 <head>
  <?php echo $GLOBAL_HEAD; //in includes/head.php
  echo '<link rel="stylesheet" type="text/css" href="'.getCSS(__FILE__).'">';
  echo '
  <script type="text/javascript" src="'.$JS_DIR.'doctor.js"></script>
  <script type="text/javascript" src="'.$JS_DIR.'dentist.js"></script>
  <script type="text/javascript" src="'.$JS_DIR.'optometrist.js"></script>
  <script type="text/javascript" src="'.getJS(__FILE__).'"></script>
  <script type="text/javascript">
  function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: "en", includedLanguages: "ar,de,en,es,fr,hi,ja,pa,ru,so,sw,ur,zh-CN",
     layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, "google_translate_element");
  }
  </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>';
 ?>
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
     <div class="bar container sideBar">
        <div class="row"><div class="col-12">Profile</div></div>
        <div class="row"><div class="col-12">Schedule</div></div>
        <div class="row"><div class="col-12">Cancellations</div></div>
        <div class="row"><div class="col-12">Account Settings</div></div>
        <div id="google_translate_element"></div>
        <p> Powered by Google Translate</p>
      </div>
     <div class="mainView">
       <div class="banner">
        <h1>Hello Moustafa!</h1>
        <h3>Your next appointment is just one click away</h3>
      </div>
      <div class="container options">
        <div class="row">
         	<div class="col-xs-3 text-center">
              <span class="fa-stack fa-lg" con="doctors">
                  <i class="fa fa-stack-2x fa-circle-o"></i>
                  <i class="fa fa-stack-1x fa-medkit"></i>
              </span>
          </div>
    		<div class="col-xs-3 text-center">
          <?php echo '<img id="tooth" src="'.$IMAGE_DIR.'tooth.png" con="dentists"></img>'; ?>
        </div>
    		<div class="col-xs-3 text-center">
          <span class="fa-stack fa-lg" con="optometrists">
              <i class="fa fa-stack-2x fa-circle-o"></i>
              <i class="fa fa-stack-1x fa-eye"></i>
          </span>
        </div>
    		<div class="col-xs-3 text-center">
          <span class="fa-stack fa-lg" con="blood">
              <i class="fa fa-stack-2x fa-circle-o"></i>
              <i class="fa fa-stack-1x fa-tint"></i>
          </span>
        </div>
        </div>
      </div>
      <table id="doctors" class="results">
        <tbody>
        </tbody>
      </table>
      <table id="dentists" class="results">
        <tbody>
        </tbody>
      </table>
      <table id="optometrists" class="results">
        <tbody>
        </tbody>
      </table>
      <iframe id="map" class="results" width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJ9cmwy4-jDEsRZ47I9GyFuiw&destination=100%20Elizabeth%20Avenue%2C%20St.%20John's%2C%20NL%2C%20Canada&key=AIzaSyCc95lWK_JULbYTXAJcbZ_SmQkcZQ_ClBI" allowfullscreen></iframe>
      <table id="calendar" class="results">
         <tbody>
           <tr>
             <td>
               <img src="assets/images/calendar_1024.png"></img>
             </td>
           </tr>
         </tbody>
      </table>
     </div>
     <div class="bar bottomBar container">
      <div class="row">
        <div class="col-xs-4">
          <i class="fa fa-calendar fa-3x" con="calendar"></i>
        </div>
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
          <i class="fa fa-map-marker fa-3x" con="map"></i>
        </div>
      </div>
  </div>

 </body>
