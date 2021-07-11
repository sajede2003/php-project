<?php

include 'db.php';

$id=$_GET['id'];

$query=mysqli_query($connection,"DELETE FROM userwork WHERE id=$id");

if($query){
    header("Location:../view/table_view.php");
}else{
    echo "<script type='text/javascript'>alert('مشکلی در حذف فیلد وجود دارد!');</script>"; 
}