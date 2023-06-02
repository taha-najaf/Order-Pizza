<?php


$conn=mysqli_connect('localhost','taha','123456789','pizza_shop');
if(!$conn){
    echo 'Connection Error' .mysqli_connect_error();
}
?>