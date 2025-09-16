<?php

$int = 250;
$double = 2.5;
$string = "This is a text chain";
$boolean = true;
echo $string, $int, $double, $boolean . "\n";

echo $string . "\n";
echo $int + $double . "\n";
echo $boolean ? "true" : "false" . "\n";

define("NAME", "Alex Beltran");
echo "\n---" . NAME . "---\n";

//ex 2
$message = "Hello World!";
echo $message . "\n";
echo strtoupper($message) . "\n";
echo strlen($message) . "\n";
echo strrev($message) . "\n";

$extra = "This is the PHP course";
echo $message . " " . $extra . "\n";