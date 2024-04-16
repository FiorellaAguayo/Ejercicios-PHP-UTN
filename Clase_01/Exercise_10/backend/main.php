<?php
require 'functions.php';

$pen1 = createPen('blue', 'Bic', 'fine', 1800);
$pen2 = createPen('red', 'Roller', 'thick ', 2000);
$pen3 = createPen('yellow', 'Pelikan', 'fine', 1200);

$associativeArrays = array('pen1' => $pen1, 'pen2' => $pen2, 'pen3' => $pen3);
$IndexedArrays = array($pen1, $pen2, $pen3);

printAssociativeArrays($associativeArrays);
printIndexedArrays($IndexedArrays);