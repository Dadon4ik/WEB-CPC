<?php
$arr = ['a', 'b', 'c'];
echo var_dump($arr);
echo "<br>";

//
echo $arr[0] . $arr[1] . $arr[2];
echo "<br>";

//
$arr = ['a', 'b', 'c', 'd'];
echo $arr[0] . "+" . $arr[1] . " " . $arr[2] . "+" . $arr[3] . ", " . $arr[0] . "-" . $arr[3] . " " . $arr[0] ."-" . $arr[3];
echo "<br>";

//
$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result;
echo "<br>";

//
$arr2[] = 1;
$arr2[] = 2;
$arr2[] = 3;
$arr2[] = 4;
$arr2[] = 5;
