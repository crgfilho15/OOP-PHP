<?php

require 'Product.php';

$product = new Product();

switch ($_GET('operation')) {
    case 'list':
        echo "<h3>Products: </h3>";

        foreach ($product->list as $value) {
            echo "Id: " . $value['id'] . "<br> Description: " . $value['description'] . "<hr>";
        }

        break;
    case 'insert':
        $status = $product->insert('Test Product');

        if(!$status) {
            echo "Não foi possível executar a operação!";
            return false;
        }

        echo "Registro inserido com sucesso!";

        break;
    case 'update':
        $status = $product->update('Test Product 01', 4);

        if(!$status) {
            echo "Não foi possível executar a operação!";
            return false;
        }

        echo "Registro atualizado com sucesso!";

        break;
    case 'delete':
        $status = $product->delete(3);

        if(!$status) {
            echo "Não foi possível executar a operação!";
            return false;
        }

        echo "Registro removido com sucesso!";

        break;
    default:
        # code...
        break;
}

?>