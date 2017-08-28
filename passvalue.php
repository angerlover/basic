<?php
//研究php中变量传值的问题
$v1 = 1;
$v2 = $v1;
$v1 = 5;
echo $v2;
echo "<br>";

$v3 = 4;
$v4 = &$v3;
$v3 = 11;
echo $v4; //跟随$v3的值改变
echo "<br>";

$name = "abc";
$abc = 45;
echo $$name;