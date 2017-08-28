<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>计算</title>
  </head>
  <body>
    <?php
        $s1 = 2;
        $s2 = 4;
        echo $s1+$s2;
        echo "<br>";
        echo $s2/$s1;
        echo "<br>";
        // 地板除 intdiv php7支持

        // 所谓的++
        echo ++$s1; //3
        echo "<br>";
        echo $s1++; //3

        // 数组运算符
        $a1 = array('a' => 'h','b' =>'e' );
        $a2 = array('c' => 'l','d' => 'l' );
        $z1 = $a1 + $a2;
        // echo "$z1",PHP_EOL; 不能直接输出数组吧？

        // 三元运算符
        $test = "菜鸟教程",PHP_EOL;
        $name = isset($test)?$test:"没事";
        echo $name;

        // 所谓的5.3版本的写法
        //$username = $test1?:"nobody";
        // echo $username;
     ?>

  </body>
</html>
