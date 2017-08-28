<?php
header("Content-Type:text/html;charset=utf-8");
$names = array('nicky','哈哈','mark');
echo "$names[1]";
echo "<br>";
echo "数组的长度是",count($names),PHP_EOL;

// 遍历数组
for ($i=0; $i < count($names); $i++) {
  # code...
  echo "$names[$i]";
  echo "<br>";
}
// 关联数组
$age = array("peter"=>45,"nicky"=>55);
echo "haha".$age["peter"];
// 遍历关联数组
foreach ($age as $key => $value) {
  # code...
  echo "key=".$key.",value=".$value;
  echo "<br>";
}
?>
