<?php
include('../database/conn.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM registro_mesas WHERE id=$id";

    $result=mysqli_query($conn,$sql);
    if($result){
       header('location: ../views/home.php');

    }else{
        die(mysqli_error($conn));
    }
}

