<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>请求</title>
  </head>
  <body>
    <form  action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
      姓名:<input type="text" name="name" value="请输入你的姓名">
      <br>
      <input type="submit">
    </form>
    <?php
        $name = $_REQUEST["name"];
        echo "你输入的名字是：$name";



     ?>

  </body>
</html>
