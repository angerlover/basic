<?php
namespace China;
header("Content-type:text/html;charset=utf-8");
const nation = '小明';
function say() {
	echo "我叫".nation;
}
namespace USA;
const nation = '美国';
function say() {
	echo "我叫".nation;
}

// 调用
// 美国的底盘所以是美国咯
echo nation;
echo "<br>";
say();
echo "<br>";
echo \China\nation; // 利用完全限定名称


?>