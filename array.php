<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array</title>
</head>

<body>
  <?php

  function brakeLine()
  {
    echo '<br/>';
  }

  $array1 = ['Banana', 'Uva', 'Maça', 'Melão'];
  $array2 = ['Laranja', 'Maracuja', 'Abacate'];
  $array3 = array('Melancia', 'Manga');

  echo '<pre>';
  print_r($array1);
  echo '</pre>';

  echo (in_array('Maça', $array1)) ? 'Verdadeiro' : 'Falso'; //retorna 1 ou vazio
  brakeLine();
  echo (array_search('Maça', $array1)); //retorna o indice
  
  brakeLine();
  brakeLine();

  echo is_array($array1) ? 'É array' : 'Não é Array';
  brakeLine();

  print_r(array_keys($array1));
  brakeLine();

  sort($array1);
  brakeLine();

  print_r($array1);
  brakeLine();

  asort($array1);
  brakeLine();

  print_r($array1);
  brakeLine();

  echo count($array1);
  brakeLine();

  $newArray = array_merge($array1, $array2, $array3);

  sort($newArray);

  echo '<pre>';
  print_r($newArray);
  echo '</pre>';

  $date = '27/02/2023';

  $newDate = explode('/', $date);

  echo '<pre>';
  print_r($newDate);
  echo '</pre>';

  ?>
</body>

</html>