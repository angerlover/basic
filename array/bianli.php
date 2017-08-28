<?php
// 遍历数组


$arr = array('cq','dd',0,'mei');

echo next($arr);
if (next($arr) === false) {
	echo('没了');
}
