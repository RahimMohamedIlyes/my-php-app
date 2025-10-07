<?php

require '/var/www/html/vendor/autoload.php';

use App\Hello;

$hello = new Hello("Ilyes");

echo $hello->sayHello(). br();
echo $hello->carbonTest();