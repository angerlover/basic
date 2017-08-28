<?php
header("Content-Type:text/html;charset=utf-8");
// 超级全局变量
$x = 1;
$y = 2;
echo $GLOBALS["x"];
function addtion() {
  $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];

}
addtion();
echo $GLOBALS["z"];
echo "<br>";
// php_server
echo $_SERVER["PHP_SELF"],PHP_EOL;
echo PHP_EOL;
echo $_SERVER["SERVER_NAME"],PHP_EOL;
echo $_SERVER["HTTP_HOST"];
echo $_SERVER["REMOTE_ADDR"];
 ?>
