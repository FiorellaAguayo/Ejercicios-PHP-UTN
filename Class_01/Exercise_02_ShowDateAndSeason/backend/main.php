<?php
    require 'functions.php';

    date_default_timezone_set('America/Buenos_Aires');
    $current_date = date('d-m-y');
    $current_time = date('H:i:s');
    $day = date('d');
    $month = date('n');
    $season = ' ';

    $season = getSeason($day, $month, $season);

    echo "The current date is: ".$current_date."<br>The current time is: ".$current_time;
    echo "<br>The season of year is: ".$season;
?>