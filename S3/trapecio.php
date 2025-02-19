<?php


$b1=$_POST['basemenor'];
$b2=$_POST["basemayor"];
$h=$_POST["altura"];
$area=(($b1*$b2)/2)*$h;
print "el area del trapecio es:".$area;
?>