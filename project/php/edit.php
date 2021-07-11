<?php

include 'db.php';

$id=$_GET['id'];

$query =mysqli_query($connection,"SELECT * FROM userwork WHERE id=$id");

while($result = mysqli_fetch_array($query)){

    $work=$result['work'];
    $date=$result['date'];

}


if(isset($_POST['update'])){

    $id=$_POST['id'];
    $work=$_POST['work'];
    $date=$_POST['date'];

    $query=mysqli_query($connection,"UPDATE userwork SET work='$work' , date='$date' WHERE id=$id");

    if($query){
        echo "<script type='text/javascript'>alert('اطلاعات با موفقیت ویرایش شد.');</script>";
        header('location:table_view.php');
    }else{
        echo "<script type='text/javascript'>alert('مشکلی در ویرایش اطلاعات وجود دارد!');</script>";
    }
}