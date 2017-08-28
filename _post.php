<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>post</title>
  </head>
  <body>
    <form  action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
      姓名:<input type="text" name="name">
      <input type="submit" name="" value="提交">
    </form>
      <?php
        $name = $_POST["name"];
        echo "$name";
       ?>
       

  </body>
</html>
