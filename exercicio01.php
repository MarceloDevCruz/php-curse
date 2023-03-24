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
  $mInput = (int) $_POST['mInput'];
  $nInput = (int) $_POST['nInput'];


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