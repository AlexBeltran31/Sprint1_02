<?php

$int = 250;
$double = 2.5;
$string = "This is a text chain";
$boolean = true;
echo $string, $int, $double, $boolean . "\n";

echo $string . "\n";
echo $int + $double . "\n";
echo $boolean ? "true" : "false" . "\n";

const NAME = "Alex Beltran";
echo "\n---" . NAME . "---\n";

//ex 2
$message = "Hello World!";
echo $message . "\n";
echo strtoupper($message) . "\n";
echo strlen($message) . "\n";
echo strrev($message) . "\n";

$extra = "This is the PHP course";
echo $message . " " . $extra . "\n";

//ex 3
// a)
$x = 31;
$y = 24;
$n = 5.5;
$m = 12.9;

echo $x + $y . "\n";
echo $x - $y . "\n";
echo $x * $y . "\n";
echo $x % $y . "\n";

echo $n + $m . "\n";
echo $n - $m . "\n";
echo $n * $m . "\n";
echo $n % $m . "\n";

echo "El doble de $x es " . ($x * 2) . "\n";
echo "El doble de $y es " . ($y * 2) . "\n";
echo "El doble de $n es " . ($n * 2) . "\n";
echo "El doble de $m es " . ($m * 2) . "\n";

echo "La suma de todas las variabes es " . ($x + $y + $n + $m) . "\n";
echo "El producto de todas las variables es " . ($x * $y * $n * $m) . "\n";