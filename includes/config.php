<?php

//URLs & Dependencies variables
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

    // $deadline = strtotime("2023-10-14 08:00:00");
    $now = time();
    include '../forms/formProcessor.php';
    // echo "date form deadline: " . $deadline;
    // echo '<br>' . $now;
    $deadline = strtotime($deadline . " 08:00:00");
    // echo '<br>' . "number form deadline: " . $deadline;
    $showApplicationLink = isApplicationOpen($deadline, $now);
    
?>