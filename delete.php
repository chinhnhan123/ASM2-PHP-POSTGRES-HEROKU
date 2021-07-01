<?php 
    include('database.php');

    $id = $_GET['id'];
    $sql = "DELETE FROM product WHERE id='$id'";

    $result = pg_query($conn, $sql);
    header('location: main.php');
?>