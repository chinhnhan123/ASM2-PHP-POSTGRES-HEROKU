<?php
// session_start();
include 'database.php';
$username = $_POST['username'];
$password = $_POST['password']; 
$sql = "SELECT * FROM admin where name = '$username' AND password ='$password' ";

$result = pg_query($conn, $sql);
// var_dump($result);
// die();
$count = pg_num_rows($result);
$row = pg_fetch_assoc($result);// w3

if($count == 0){
    header('location: admin.php');
}
else{
    $_SESSION['login_user'] = $row['name'];
    header('location: main.php');
}
?>