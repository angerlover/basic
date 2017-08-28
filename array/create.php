<?php
// 练习创建数组


// 正式创建数组的方式
$arr1 = array(0=>'h',1=>'r',2=>'f');
// var_dump($arr1);

// $arr2[] = 'hello';
// var_dump($arr2);

$china['chongqing'] = 'nice';
// var_dump($china);

// list函数(list() 仅能用于数字索引的数组，并假定数字索引从 0 开始。 )
// list($one,$two,$three) = $arr1;
// var_dump($one);

// $arr5 = range(1,20,2);
// $arr5[] = 100;
// var_dump($arr5);
// $china[] = 'xixi';
// print_r($china);
array_unshift($china,'sichuan');
var_dump($china);


// var_dump(in_array('chongqing',$china));