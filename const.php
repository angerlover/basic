<?php
const XIXI = 'china'; //只能在顶部写const
echo "<META charset=UTF-8>";
//讨论常量
echo XIXI;
echo "<br>";
function test() {
    //这里不能用const
}

//使用常量
echo "常量NAME的值是".constant('XIXI');