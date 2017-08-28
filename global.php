<?php 

// 全局变量
function f1() {
	global $name; // 全局变量
	$name = 'nicky';
}

f1(); //调用之后才能使用
echo $name;