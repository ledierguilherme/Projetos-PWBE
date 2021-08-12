<?php

$origem = $_POST["origem"];
$destino = $_POST["destino"];
$distacia = $_POST["distancia"] * 6;
$pedagio = $_POST["pedagio"] * 9.40;
$frete = ($distacia + $pedagio);

echo "A viagem de {$origem} à {$destino} irá custar o valor 
total de R$ $frete reais";
