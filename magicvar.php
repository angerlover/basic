<?php
header("Content-type:text/html;charset=utf-8");
// 预定义常量
echo "这是第",__LINE__,"行";
echo "<br>";
// 文件
echo "文件的完整名字是",__FILE__;
echo "<br>";
// 路径
echo "文件的路径是 ",__DIR__;
echo "<br>";
// 函数名
function test() {
echo "函数的名字是",__FUNCTION__;
}
test();
echo "<br>";

// CLASS常量
class test {
	function _print() {
		echo "类名".__CLASS__;
		echo "<br>";
		echo "函数的名字是".__FUNCTION__;
		
	}
}
$t = new test();
$t -> _print();
?>
