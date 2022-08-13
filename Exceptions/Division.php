<?php

function division(int $a, int $b) {
    if(($a === 0) || ($b === 0)) {
        throw new Exception("O usuário digitou algum valor igual a zero!" . PHP_EOL);
    }

    return $a/$b;
}

try {
    division(10,0);
} catch(Exception $e) {
    echo $e->getMessage();
    die();
}

echo "A divisão resultou em: " . division(10,0);

?>