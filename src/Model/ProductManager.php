<?php
namespace App\Model;

class ProductManager
{
    protected $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }
    public function getAllProduct(){
        $sql = "SELECT * FROM Product";
        $stmt = $this->dbConnect->connect()->query($sql);
        $data = $stmt->fetchAll();
        $products = [];
        foreach ($data as $item) {
            $product = new Product($item['id'],$item['name'],$item['category'],$item['price'],$item['amount'],$item['created_date'],$item['description']);
            array_push($products,$product);
        }
        return $products;
    }
    public function createProduct($product){
        $sql = "INSERT INTO Product(name,category,price,amount,description) VALUES (?,?,?,?,?)";
        $go = $this->dbConnect->connect()->prepare($sql);
        $go->bindParam(1,$product->getName());
        $go->bindParam(2,$product->getCategory());
        $go->bindParam(3,$product->getPrice());
        $go->bindParam(4,$product->getAmount());
        $go->bindParam(5,$product->getDescription());
        $go->execute();
    }
    public function deleteProduct($id){
        $sql = "DELETE FROM Product WHERE id = $id";
        $go = $this->dbConnect->connect()->prepare($sql);
        $go->execute();
    }
    public function updateProduct($id,$product){
        $sql = "UPDATE Product SET name = ?, category = ?, price = ?, amount = ?, description = ? WHERE id = $id";
        $go = $this->dbConnect->connect()->prepare($sql);
        $go->bindParam(1,$product->getName());
        $go->bindParam(2,$product->getCategory());
        $go->bindParam(3,$product->getPrice());
        $go->bindParam(4,$product->getAmount());
        $go->bindParam(5,$product->getDescription());
        $go->execute();
    }
    public function getListProductByName($name)
    {
        $sql = "SELECT * FROM Product WHERE name LIKE '%$name%'";
        $data = $this->dbConnect->connect()->query($sql);
        $list = [];
        foreach ($data as $item) {
            $list[] = new Product($item['id'],$item['name'],$item['category'],$item['price'],$item['amount'],$item['created_date'],$item['description']);
        }
        return $list;
    }
}