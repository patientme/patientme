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
     <div id="navBar">
       <div class="row">
         <div class="col-md-4"></div>
         <div class="col-md-8">
           <button type="button" class="btn btn-default" id="navLogin">Log In</button>
		       <button type="button" class="btn btn-default">Sign Up</button>
         </div>
       </div>
     </div>

     <div id="mainFg" class="d-flex align-content-center">
       <table>
         <tbody>
           <tr>
             <td>
               <?php echo'<h1><img src="'.$IMAGE_DIR.'logo.png">atient.me</h1>'; ?>
               <h4>Find your care</h4>
             </td>
           </tr>
         </tbody>
       </table>
     </div>
    <div id="mainBg"></div>
    <div id="overlay"></div>
    <table id="loginFrame">
      <tbody><tr>
        <td>
          <div class="box">
              <form>
                 <p>Username:</p>
                 <input type="text"></input>
                 <p>Password:</p>
                 <input type="text">
                 <div style="margin: 0 auto; margin-top: 4rem;">
                   <button class="btn btn-default socialBox" style="display: block;background-color: #2ECC71; border-color: #2ECC71;font-size: 1.3rem;">Login</button>
                   <div class="socialBox" style="background-color: #183a6f;">
                     <i class="fa fa-facebook fa-2x" style="border-right: 1px solid #12294e;"></i>
                     <span>Login with Facebook</span>
                   </div>
                   <div class="socialBox" style="background-color: #a02c2c;">
                     <i class="fa fa-google-plus fa-2x" style="border-right: 1px solid #5f1313;"></i>
                     <span>Login with Google+</span>
                   </div>

                 </div>
              </form>
            </div>
          </td>
        </tr>
      </tbody>
    </table>

 </body>
