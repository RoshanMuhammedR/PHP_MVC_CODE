<?php
    class Products{
        public function getControler(){
            include("src/model/product.php");
            $model = new Product;
            $results = $model->getModel();
            include("view/print_data.php");
            
        }
    }
?>

 