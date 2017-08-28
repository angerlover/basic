<?php
	header("Content-type:text/html;charset=utf-8");
	// 最普通的函数
	function writeName() {
		echo "my name is pepe";
	}
	echo "下面介绍一下我的名字";
	echo "<br>";
	writeName();
	echo "<br>";
	// 带参数的函数
	function inputName($name) {
		echo "我的名字叫做$name<br>";
	}
	inputName("你大爷");
	// 带返回值的函数
	function add($a,$b) {
		return $a + $b;
	}
	echo "3+2=",add(3,2);
	echo "<br>";
	echo "hafah",5;
?>