<?php
    $conn=mysqli_connect("localhost","root","", "doantn_noithatdogomp");
    if($conn->connect_error) {
        die("Could not connect: ".$conn->connect_error);
    }

    // if(!$conn) {
    //     die('ERROR:'.mysqli_connect_error());
    // }

    mysqli_select_db($conn, "doantn_noithatdogomp");
    @mysqli_query($conn, "SET NAMES 'utf8'");
?> 