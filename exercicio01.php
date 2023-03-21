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
      overflow: auto;
      background-image: linear-gradient(to left,
          grey, #010201);
    }

    body {
      background-color: #010201;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 16px;
      color: white;
      border-radius: 10px;
      padding: 1em;
    }

    .form {
      display: flex;
      width: 50vw;
      height: 20em;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background-color: white;
      padding: .5em;
    }

    .form__input {
      margin: 2em;
      padding: 1.5em;
      width: 80%;
      border: none;
      border: 1px solid #010201;
      border-radius: 5px;
      color: #ededed;
    }

    label {
      width: 80%;
    }

    label p {
      color: #fefefe;
    }

    .btn {
      margin-top: 1em;
      text-transform: uppercase;
      text-decoration: none;
      width: 20em;
      height: 3em;
      padding: 1em;
      display: inline-block;
      border-radius: 1.5em;
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
      <input class="form__input" type="number" name="mInput" placeholder="Digite quantos números terá seu array"
        required />
    </label>
    <label>
      <p>N primos:</p>
      <input class="form__input" type="number" name="nInput" placeholder="Digite a quantidade de números primos"
        required />
    </label>
    <input class="btn" type="submit" value="Enviar" name="enviar" />
  </form>

  <?php

  $mInput = $nInput = 0;
  $numArray = [];
  $primeCont = 0;
  $primeArray = [];

  function randomNumber()
  {
    return rand(1, 1000);
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
    print_r($numArray);
    echo '<br/><br/>';
    echo 'Primos: ';
    print_r($slicedPrimeArray);
    echo '<br/>';
  }

  /* if (isset($_POST['enviar'])) {
  $mInput = (int) $_POST['mInput'];
  $nInput = (int) $_POST['nInput'];
  } */

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mInput = (int) $_POST['mInput'];
    $nInput = (int) $_POST['nInput'];

    if (nIsBiggerThanM($mInput, $nInput) && isNegativeNumber($mInput, $nInput) && mMaxrange($mInput)) {
      for ($i = 0; $i < $mInput; $i++) {
        array_push($numArray, randomNumber());
      }

      array_push(
        $primeArray,
        array_filter(
          $numArray,
          function ($num) {
            if (isPrimeNumber($num) === true) {
              return $num;
            }
          }
        )
      );

      $slicedPrimeArray = array_slice($primeArray[0], 0, $nInput);

      showMessage($numArray, $slicedPrimeArray);

    }
  } else {
    null;
  }

  ?>

</body>

</html>