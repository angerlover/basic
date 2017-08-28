<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>foreach练习</title>
  </head>
  <body>
    <?php
        $names = array('nicky'=>'hello','kiss'=>'xixi');
        foreach ($names as $key => $value) {
          # code...
          echo "$key"." "."$value";
          echo PHP_EOL;
        }


     ?>

  </body>
</html>
