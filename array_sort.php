<?php
header("Content-Type:text/html;charset=utf-8");
$ages = array(1,2,56,78,56,23);
sort($ages); // 排序
for ($i=0; $i<count($ages) ; $i++) {
  # code...
  echo $ages[$i];
  echo "<br>";
}

 ?>
