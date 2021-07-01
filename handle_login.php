<?php
session_start();
include 'database.php';
$username = $_POST['username'];
$password = $_POST['password']; 
$sql = "SELECT * FROM admin where name = '$username' AND password ='$password' ";

$result = pg_query($conn, $sql);
$count = pg_num_rows($result);
$row = pg_fetch_assoc($result);
if($count == 0){
    echo '<script language="javascript">alert("Password or username incorrect !!! try again!!"); window.location="index.php";</script>';
}
else{
    $_SESSION['login_user'] = $row['name'];
    header('location: home.php');
}
?>