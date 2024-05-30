<?php
    class Product{
        public function getModel(){
            $db_server = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "products";

        try{
        $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
        }catch(Exception){
            echo "connection failed";
        }
        $query = "select * from products;";
        $results = mysqli_query($conn,$query);

            return $results;
        }
    }
    
?>