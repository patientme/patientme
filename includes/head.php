<?php

//This file contains all head variables and functions, that get loaded globablly in <head>
//Such data included in $GLOBAL_HEAD are global stylesheet references, global javascripts
//(Like Bootstrap and JQuery), and favicon

include("directories.php");

//Variables

$GLOBAL_HEAD =
'<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <link rel="stylesheet" href="'.$STYLES_DIR.'globalStyle.min.css" type="text/css">
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" href="favicon.ico">';

//Functions

//Returns the CSS location for the given filename string $file
 function getCSS($file){
   return $GLOBALS['STYLES_DIR'].basename($file, '.php').'.min.css';
 }

 //Returns the CSS location for the given filename string $file
function getJS($file){
   return $GLOBALS['JS_DIR'].basename($file, '.php').'.js';
 }
 ?>
