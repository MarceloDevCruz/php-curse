<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condicionais</title>
</head>

<body>
  <?php

  $var = false;
  $num = 'teste';

  // AND &&
  // OR ||
  // XOR
  
  if (1 === 2 xor 3 === 3)
    echo 'Verdadeiro';
  else
    echo 'Falso';

  switch ($num) {

    case 1:
      echo 'caso 1';
      break;
    case 'teste':
      echo 'caso 2';
      break;
    case 3:
      echo 'caso 3';
      break;
    default:
      echo 'default value';
      break;
  }
  ?>






</body>

</html>