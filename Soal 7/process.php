<?php

$mysqli = new mysqli('localhost','root','louchi25','perpustakaan') or die(mysqli_error($mysqli));

if (isset($_POST['save'])){
    $books = $_POST['books'];
    
    
    
    $mysqli->query("INSERT INTO books (name) values ('$books')") or die($mysqli->error);
}
?>