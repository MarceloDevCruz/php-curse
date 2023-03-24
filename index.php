<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 1</title>

  <style>
    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }

    body {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 16px;
    }

    .form {
      display: flex;
      width: 50vw;
      height: 20em;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: .5em;
    }

    .form__input {
      margin: 2em;
      padding: 1.5em;
      width: 100%;
      border: none;
      border: 1px solid #010201;
      border-radius: 5px;
    }

    label {
      width: 100%;
    }

    .btn {
      margin: 1em 0;
      text-transform: uppercase;
      text-decoration: none;
      width: 24em;
      height: 3.5em;
      padding: 1em;
      display: inline-block;
      border-radius: 5px;
      transition: all .2s;
      position: relative;
      font-size: .7rem;
      border: none;
      cursor: pointer;
      color: white;
      background-image: linear-gradient(to left,
          grey, #010201);
    }
  </style>
</head>

<body>

  <form class="form" action="" method="POST">
    <label>
      <p>M números:</p>
      <input class="form__input" type="text" name="mInput" placeholder="Digite quantos números terá seu array"
        required />
    </label>
    <label>
      <p>N primos:</p>
      <input class="form__input" type="text" name="nInput" placeholder="Digite a quantidade de números primos"
        required />
    </label>
    <input class="btn" type="submit" value="Enviar" name="enviar" />
  </form>

  <?php

  $mInput = $nInput = $primeCout = 0;
  $numArray = $primeArray = [];

  function randomNumber()
  {
    return rand(1, 1000);
  }

  function isNumeric($m, $n)
  {
    if (empty($m) || strstr($m, " ") || empty($n) || strstr($n, " ")) {
      echo "Campo m ou n não pode ficar vazio!";
      return false;
    }

    if (!is_numeric($m) || !is_numeric($n)) {
      echo "Campo m ou n precisa ser um número inteiro!";
      return false;
    }

    if (is_float($m) || is_float($n)) {
      echo "Campo m ou n precisa não pode ser float";
      return false;
    }

    return true;
  }

  function nIsBiggerThanM($m, $n)
  {
    if ($n >= $m) {
      echo "Digite um número 'M' maior que um primo 'N'";
      return false;
    }
    return true;
  }

  function isNegativeNumber($m, $n)
  {
    $m && $n >= 1 ? $boolCondition = true : $boolCondition = false;
    if ($boolCondition === false) {
      echo 'M números e N primos devem ser maiores ou iguais a "1"';
    }
    return $boolCondition;
  }

  function mMaxRange($m)
  {
    $boolCondition = $m > 100 ? false : true;
    if ($boolCondition) {
      return $boolCondition;
    }

    echo 'Digite M números no range de 1 até 100';
    return $boolCondition;
  }

  function isPrimeNumber($num)
  {
    if ($num < 2) {
      return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
      if ($num % $i == 0) {
        return false;
      }
    }
    return true;
  }

  function showMessage($numArray, $slicedPrimeArray)
  {

    echo "M números: ";
    foreach ($numArray as $num) {
      echo $num . ", ";
    }
    echo '<br/> <br/>';

    echo 'Primos: ';
    foreach ($slicedPrimeArray as $num) {
      echo $num . ", ";
    }
    echo '<br/> <br/>';
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mInput = $_POST['mInput'];
    $nInput = $_POST['nInput'];

    if (isNumeric($mInput, $nInput) && nIsBiggerThanM($mInput, $nInput) && isNegativeNumber($mInput, $nInput) && mMaxrange($mInput)) {
      for ($i = 0; $i < $mInput; $i++) {
        array_push($numArray, randomNumber());
      }

      array_push(
        $primeArray,
        array_filter(
          $numArray,
          function ($num) {
            if (isPrimeNumber($num)) {
              return $num;
            }
          }
        )
      );

      $slicedPrimeArray = array_slice($primeArray[0], 0, $nInput);

      showMessage($numArray, $slicedPrimeArray);

    }
  }

  ?>

</body>

</html>