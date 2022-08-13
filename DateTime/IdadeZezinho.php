<?php

date_default_timezone_set("Portugal");

$dataAtual = new DateTime();
$niverZezinho = new DateTime('1974-09-29 12:00:00');

$idadeZezinho = $dataAtual->diff($niverZezinho);

echo "Hoje é dia " . $dataAtual->format("d/m/Y H:i:s") . PHP_EOL;
echo "O Zezinho nasceu no dia " . $niverZezinho->format("d/m/Y H:i:s") . PHP_EOL;
echo "Logo, o Zezinho tem " . $idadeZezinho->y . " aninhos, " . $idadeZezinho->m . " meses, " . $idadeZezinho->d . " dias, " . $idadeZezinho->h . " horas, " . $idadeZezinho->i . " minutos e " . $idadeZezinho->s . " segundos de vida.";

?>