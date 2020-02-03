<?php

$computter1 = 'Vul een getal in'.PHP_EOL;
$computter2 = 'Dit is een even getal'.PHP_EOL;
$computter3 = 'Dit is een oneven getal'.PHP_EOL;

echo $computter1;

$getal = readline("");


if(($getal % 2) == 1)
    echo $computter3;

else     
    echo $computter2;


