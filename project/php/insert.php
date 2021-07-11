<?php

include 'db.php';

if(isset($_POST['submit']))
{
    $work=$_POST['work'];
    $date=$_POST['date'];

    $query=mysqli_query($connection,"INSERT INTO userwork VALUES('','$work','$date')");

    


    if($query){
        echo "<script type='text/javascript'>alert('اطلاعات با موفقیت ثبت شد.');</script>";
        header("location:../view/table_view.php");
    }else{
        echo "<script type='text/javascript'>alert('مشکلی در ثبت اطلاعات وجود دارد!');</script>"; 
    }
}

?>