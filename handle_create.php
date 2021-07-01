<?php  include('database.php');

    if(isset($_POST['submit']) ) {
        $productName = $_POST['name'];
        $image = $_POST['image'];
        $category = $_POST['category'];
        $price = $_POST['price'];
  
        $sql = "INSERT INTO product (name, images, category, price) VALUES ('$productName', '$image', '$category', '$price')";
        $result = pg_query($conn, $sql);
        header('location: main.php');
    } ?>