<?php 
    session_start();
    include_once("./dbconnect.php");
    // Hủy session theo biến bất kì
    unset($_SESSION['user']);
    // Xóa tất cả các session hiện có
    // session_destroy();
    header('location:index.php?go=home');
?>