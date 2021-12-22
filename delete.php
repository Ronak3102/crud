<?php
    include "dbcon.php";

    $id = $_GET['id'];
    $deletequery = "delete from registration where ID = $id;";
    $query = mysqli_query($con, $deletequery);
    header("Location: check.php"); 
    exit();


?>