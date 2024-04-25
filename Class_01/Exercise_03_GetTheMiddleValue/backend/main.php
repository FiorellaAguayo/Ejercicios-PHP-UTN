<?php
   require 'functions.php';

   $a = 10;
   $b = 89;
   $c = 55;
   $middleNumber = null;

   showValues($a, $b, $c);
   $middleNumber = getMiddleNumber($a, $b, $c);

   if ($middleNumber !== null) 
   {
        echo "The middle number is $middleNumber";
   }
   else 
   {
        echo "There is no middle number";
   }