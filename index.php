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
               <?php echo'<h1><img src="'.$IMAGE_DIR.'logo.png">atientMe</h1>'; ?>
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
                 <input type="password">
                 <div style="margin: 0 auto; margin-top: 4rem;">
                   <div class="btn btn-default socialBox" style="display: block;background-color: #2ECC71; border-color: #2ECC71;font-size: 1.3rem;">Login</div>

                   <div class="socialBox container" style="background-color: #183a6f;">
                     <div class="row">
                       <div class="col-xs-2" style="border-right: 1px solid #12294e; height: 2rem;">
                         <i class="fa fa-facebook fa-2x"></i>
                       </div>
                       <div class="col-xs-9">
                         <span>Login with Facebook</span>
                       </div>
                     </div>
                   </div>

                   <div class="socialBox container" style="background-color: #a02c2c;">
                     <div class="row">
                       <div class="col-xs-2" style="border-right: 1px solid #5f1313; height: 2rem;">
                         <i class="fa fa-google" style="font-size: 1.9rem;"></i>
                       </div>
                       <div class="col-xs-9">
                         <span>Login with Google+</span>
                       </div>
                     </div>
                   </div>

                 </div>
              </form>
            </div>
          </td>
        </tr>
      </tbody>
    </table>

 </body>
