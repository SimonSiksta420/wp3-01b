<?php
require_once('functions.php');
?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
<?php

  $auto[0]['SPZ'] = "Bmw";
  $auto[0]['YEAR'] = 1985;
  $auto[1]['SPZ'] = "Youngster";
  $auto[1]['YEAR'] = 2017;
  $auto[2]['SPZ'] = "Medieval";
  $auto[2]['YEAR'] = 1745;
  $auto[3]['SPZ'] = "Cocainer";
  $auto[3]['YEAR'] = 1989;
  $auto[4]['SPZ'] = "ŽIGULIK";
  $auto[4]['YEAR'] = 1969;

  for($i=0; $i < count($auto); $i++) { ?>
   SPZ: <?= $auto[$i]['SPZ'] ?> <br>:
   <?php getCarDescription($auto[$i]['YEAR'])?><br>
  <?php } 
  ?>
    

  </body>
</html>