<?php

// 1 sort Array
require_once('sortArray.php');

$arr1 = Array(11, -2, 4, 35, 0, 8, -9);

$sortArr1 = new sortArray($arr1);
print_r($sortArr1->sort_array());
echo '<br/>';

// 2 diffrence between Dates

require_once('diffDate.php');

 $d1 = "1981-11-03";
 $d2 = "2013-09-04";

$diffDate1 = new DiffDate($d1 , $d2);
echo($diffDate1->date_result());
echo '<br/>';

// 3 calculater

require_once('calculater.php');

$x = 10;
$y = 5;

$calc1 = new Calculater($x, $y);
echo $calc1->add() ;
echo '<br/>';
echo($calc1->sub());
echo '<br/>';
print($calc1->multi());
echo '<br/>';
print($calc1->div());

?>