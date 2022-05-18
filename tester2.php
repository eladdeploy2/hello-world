<?php

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload

use Ergebnis\Json\Printer\Printer;

$printer = new Printer();
$json = json_decode('{"name":"Andreas Möller","emoji":"🤓","urls":["https://localheinz.com","https://github.com/localheinz","https://twitter.com/localheinz"]}')

// $printer->print(
//     $json,
//     '  '
// );