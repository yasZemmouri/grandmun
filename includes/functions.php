<?php
//Function to generate Title. to be included before $title initialization and after $h1 or $h2 initialization.
function generateTitle($h1, $h2){
    if($h1 && $h2) return "$h1. $h2";
    else if($h1) return $h1;
    else return ucfirst(basename($_SERVER['REQUEST_URI']));
}  
?>