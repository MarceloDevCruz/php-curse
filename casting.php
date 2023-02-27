<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  $numInt = 10;
  $numFloat = (float) $numInt;

  $numInt2 = 40;
  $numString = (string) $numInt2;

  // true = 1, false = void
  
  echo '' . gettype($numFloat) . '<br/>';
  echo '' . gettype($numInt) . '<br/>';

  echo '' . gettype(
    $numInt2
  ) . '<br/>';
  echo gettype($numString);

  ?>
</body>

</html>