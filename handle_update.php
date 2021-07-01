<?php 
    include('database.php');

 
        $id = $_GET['id'];
        $productName = $_POST['name'];
        $image = $_POST['image'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        
        $sql = "UPDATE product
        SET name = '$productName', images= '$image', category ='$category', price='$price'
        WHERE id = $id";

        $result = pg_query($conn, $sql);
        header('location: main.php');
  

?>