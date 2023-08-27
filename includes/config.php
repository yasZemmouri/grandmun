<?php

// ======= URLs & Dependencies variables ========
//Favicons & Icons
$faviconUrl="../assets/img/favicon-32-2.ico";
$appleTouchIconUrl = "../assets/img/favicon-160.png";
$bootstrapIconsUrl = "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css";
//CSS 
$bootstrapCSS="../assets/vendor/bootstrap/css/bootstrap.min.css";
$mainCSS = "../assets/css/mycss.css";
//JS
$bootstrapJS = "../assets/vendor/bootstrap/js/bootstrap.min.js";
$mainJS= "../assets/js/main.js"; 
// countdown2 dependencies
$jqueryUrl = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js";
$tweenMaxUrl = "../assets/vendor/TweenMax.min.js";
$timelineMaxUrl = "../assets/vendor/TimelineMax.min.js";

// ======= Deadline related variables ======= 
$now = time();
include '../forms/formProcessor.php';
include_once '../includes/functions.php';
//$deadline is imported from formProcessor.php.
$deadline = strtotime($deadline . " 08:00:00");
// Check deadline to know if Application is Open
$applicationOpen = isApplicationOpen($deadline, $now);

//To extract current file name to assign active class to the link of the current page
//a superglobal variable that contains the virtual path of current script file.
$script_name= $_SERVER['SCRIPT_NAME'];
    
?>