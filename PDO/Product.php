<?php

declare(strict_types=1);

class Product {
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO('mysql: host=mysql; dbname=products', 'root', '12345');
        } catch(Exception $e) {
            echo $e->getMessage();
            die();
        }
    }
    
    public function list(): array {
        $sql = "select * from products";

        $products = [];

        foreach($this->pdo->query($sql) as $key => $value) {
            array_push($products, $value);
        }

        return $products;
    }

    public function insert(string $description): int {
        $sql = "insert into products(description) values(?)";

        $prepare = $this->pdo->prepare($sql);

        $prepare->bindParam(1, $description);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function update(string $description, int $id): int {
        $sql = "update products set description = ? where id = ?";

        $prepare = $this->pdo->prepare($sql);

        $prepare->bindParam(1, $description);
        $prepare->bindParam(2, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function delete(int $id): int {
        $sql = "delete from products where id = ?";

        $prepare = $this->pdo->prepare($sql);

        $prepare->bindParam(1, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }
}

?>