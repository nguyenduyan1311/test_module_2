<?php
namespace App\Controller;
use App\Model\Product;
use App\Model\ProductManager;

class ProductController
{
    protected $productManager;

    public function __construct()
    {
        $this->productManager = new ProductManager();
    }
    public function viewListProduct(){
        $products = null;
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $products = $this->productManager->getAllProduct();
        } else {
            $products = $this->productManager->getListProductByName($_POST['search']);
        }
        include "src/View/listProduct.php";
    }
    public function addProduct(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            include_once 'src/View/add-product.php';
        } else {
            $name = $_POST['product-name'];
            $category = $_POST['product-category'];
            $price = $_POST['product-price'];
            $amount = $_POST['product-amount'];
            $desc = $_POST['product-desc'];

            $product = new Product(null,$name,$category,$price,$amount,null,$desc);
            $this->productManager->createProduct($product);
            header("Location: index.php");
        }
    }
    public function deleteProduct(){
        $id = $_GET['id'];
        $this->productManager->deleteProduct($id);
        header("Location: index.php");
    }
    public function updateProduct(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            include_once 'src/View/edit-product.php';
        } else {
            $id = $_GET['id'];
            $name = $_POST['product-name'];
            $category = $_POST['product-category'];
            $price = $_POST['product-price'];
            $amount = $_POST['product-amount'];
            $desc = $_POST['product-desc'];

            $product = new Product(null,$name,$category,$price,$amount,null,$desc);
            $this->productManager->updateProduct($id,$product);
            header("Location: index.php");
        }
    }
}