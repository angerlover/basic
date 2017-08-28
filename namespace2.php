<?php
namespace china\beijing\haidian;
header("Content-type:text/html;charset=UTF-8");
const name = "china";

namespace chongqing\nanan;
const name = "chongqing";
echo "<br>";

echo name; // 重庆没毛病
echo "<br>";
use china\beijing\haidian;  //不会改变当前的命名空间 as haidian
//echo name;
echo haidian\name; // 神奇！只能使用一层的use下的结构(实际我认为是12行as的缘故)
echo "<br>";
echo __NAMESPACE__;
