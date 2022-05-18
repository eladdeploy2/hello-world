<?php

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload

// my local package
use HelloWorld2\SayHello;
echo SayHello::world();


// external 
// use HelloWorld\SayHello;
// echo SayHello::world();