<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variáveis</title>
</head>

<body>
  <?php
  /*$string, $int, $float, $boolean, $array */

  $nome = 'Marcelo';
  $idade = 25;
  $cadastro = true; // true = 1, false = void;
  $altura = 1.75;
  $notas = array(8, 9, 10, 7.9);
  $notas2 = [7, 6.8, 9, 10];

  define('BD_PASSWORD', ' senhaqualquer'); // constante
  ?>

  <ul>
    <li>
      <?php echo 'Nome: ' . $nome . '' //concatenação com '.$variavel.' ?>
    </li>
    <li>
      <?php echo "Idade: $idade" //concatenação com "$variavel"?>
    </li>
    <li>Cadastrado:
      <?php echo $cadastro ?>
    </li>
    <li>Altura:
      <?php echo $altura ?>
    </li>
    <li>Notas:
      <?php var_dump($notas2) ?>
    </li>
  </ul>

  <?php echo BD_PASSWORD ?>

</body>

</html>