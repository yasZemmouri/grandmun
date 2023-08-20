<?php
    // $deadline = strtotime("2023-10-14 08:00:00");
    $now = time();
    include '../forms/formProcessor.php';
    // echo "date form deadline: " . $deadline;
    // echo '<br>' . $now;
    $deadline = strtotime($deadline . " 08:00:00");
    // echo '<br>' . "number form deadline: " . $deadline;
    
?>