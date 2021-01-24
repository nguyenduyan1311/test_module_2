<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Controller\ProductController;

$productController = new ProductController();

$page = (isset($_REQUEST['page'])) ? $_REQUEST['page'] : null;

switch ($page){
    case 'listProduct':
        $productController->viewListProduct();
        break;
    case 'add-product':
        $productController->addProduct();
        break;
    case 'delete':
        $productController->deleteProduct();
        break;
    case 'edit-product':
        $productController->updateProduct();
        break;
    default:
        $productController->viewListProduct();
}

