<?php
$n1 = 5; 
$n2 = 10; 
$n3 = 15;
 
$max = ($n1 > $n2) ? ($n1 > $n3 ? $n1 : $n3) :($n2 > $n3 ? $n2 : $n3);
echo "maximum number from ". $n1 . ", ". $n2 . " and " . $n3. " is " .$max;
?>