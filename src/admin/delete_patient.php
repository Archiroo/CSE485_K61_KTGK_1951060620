<?php
    include('../config/header.php');
    $id = $_GET['id'];
    $sql = "DELETE From patient Where patiendtid = '$id'";
    $res = mysqli_query($con, $sql);
    if($res==true){
        // Nếu dúng thì xóa 
        header("Location:index.php");
    }
    else{
        // Không xóa được thì hiển 
        header("Location:index.php");
    }
?>