<?php

declare(strict_types=1);

class Venda {
    private string $data;
    private string $produto;
    private int $quantidade;
    private float $valorTotal;

    public function __construct(string $data, string $produto, int $quantidade, float $valorTotal) {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function exibirDadosVenda(): string {
        return "No dia " . $this->data . " foi vendido " . $this->quantidade . " produto(s) totalizando R$" . $this->valorTotal . ".";
    }
}

$venda1 = new Venda("12/08/2022" , "Curso PHP" , 5 , 1000);

    echo $venda1->exibirDadosVenda();

?>