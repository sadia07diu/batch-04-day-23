<?php

require_once 'vendor/autoload.php';
use App\classes\StudentInfo;


if (isset($_GET['pages']))
{

    if ($_GET['pages'] == 'home') {

        include "pages/home.php";
    }


}
elseif (isset($_POST["btn"]))
{
    $studentInfo = new StudentInfo($_POST,$_FILES);
    $studentInfo->index();
}




//    elseif ($_GET["pages"] == "category-products")
//    {
//        $category= new Category();
//        $categories =$category->category();
//        $product= new Products();
//        $products = $product->shortProducts($_GET ["category_id"]);
//        include "pages/allProducts.php";
//
//    }
//    elseif ($_GET["pages"] == "product-details")
//    {
//        $category= new Category();
//        $categories =$category->category();
//        $product= new Products();
//        $productDetails = $product->getProductDetails($_GET["product_id"]);
//
//        include "pages/productDetails.php";
//
//    }


