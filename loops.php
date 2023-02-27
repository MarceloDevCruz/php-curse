<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops</title>
</head>

<body>
  <?php

  $num1 = 0;
  $num2 = 0;

  $array1 = ['Banana', 'Maça', 'Laranja', 'Manga', 'Goiaba'];

  while ($num1 <= 10) {
    echo '' . $num1++ . ' <br/>';
  }

  do {
    echo '' . $num2++ . ' <br/>';
  } while ($num2 <= 10);

  for ($i = 0; $i <= 10; $i++) {
    echo '' . $i . ' <br/>';
  }

  foreach ($array1 as $index => $item) {
    echo '' . $index . ': ' . $item . '<br/>';
  }


  ?>
</body>

</html>