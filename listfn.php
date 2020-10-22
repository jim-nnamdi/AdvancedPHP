<?php

$start = array("jim", "developer", "germany");

list($name, $occupation, $country) = $start;

echo $name . " lives in " . $country . " and is a " . $occupation;

// using list with array indices 

$second_start = array("jim", "developer", "germany");

list($a[0], $a[1], $a[2]) = $second_start;

print_r($a);
