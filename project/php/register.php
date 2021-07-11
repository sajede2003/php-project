<?php

include 'db.php';
// ریپورت هشدارها
error_reporting(E_ERROR);


//  create users tables


$createTableSql = 'CREATE TABLE IF NOT EXISTS users (id INT (5) NOT NULL AUTO_INCREMENT PRIMARY KEY, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL)';

$createTableResult = mysqli_query($connection,$createTableSql);
if(!$createTableResult){
    die('مشکل در ساخت جدول:'.mysqli_error($connection));
}

mysqli_close($connection);



// بررسی لاگین بودن 
if(isset($_SESSION['myDB_user_id']) || isset($_COOKIE['myDB_user_id'])){
    // اگر کاربر لاگین بود به صفحه .... وارد شود دوباره وارد نشود
    header('location:../view/table_view.php');
}


$errors=[];

function check_username($username, $errors) {
    if($username==''){
        $errors[]='نام کاربری نباید خالی باشد.';
    }
    if(strlen($username)<4){
        $errors[]='نام کاربری نمیتواند کمتر از 4 حرف باشد.';
    }
    if(strlen($username)>14){
        $errors[]='نام کاربری باید کمتر از 14 حرف باشد.';
    }
    if(strpos($username,' ')!==false){
        $errors[]='نام کاربری نمیتواند شامل کاراکتر خالی باشد.';
    }
    if(strpos($username,'@')!==false){
        $errors[]='نام کاربری نمیتواند شامل @ باشد.';
    }

    return $errors;
}



if(isset($_POST['register_btn'])){
    $username=trim($_POST['username']);
    $email=trim($_POST['email']);
    $password=trim($_POST['password']);
    $re_password=trim($_POST['re_password']);

    // validation username
    $errors=check_username($username,$errors);
    // validation email
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors[]='ایمیل وارد شده معتبر نمی باشد.';
    }

    // validation pass
    if(strlen($password)<=7){
        $errors[]='پسوورد باید حداقل 8 حرف باشد.';
    }

    if($password != $re_password){
        $errors[]='پسورد با تکرار آن برابر نیست';
    }

    if(empty($errors)){
        // we don't have any erorr user can connect to database
        include "db.php";

        $username= htmlspecialchars($username);
        $email= htmlspecialchars($email);

        // Non duplicate email and user name

        $check= mysqli_query($connection, "SELECT * FROM users WHERE username = '$username'");
        if(mysqli_num_rows($check)>0){
            $errors[]='نام کاربری شما تکراری است.';
        }
        
        $check= mysqli_query($connection, "SELECT * FROM users WHERE email = '$username'");
        if(mysqli_num_rows($check)>0){
            $errors[]='ایمیل شما تکراری است.';
        }

        if(empty($errors)){
            $password=md5($password);

            $query="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
            $new_user=mysqli_query($connection,$query);

            if($new_user){
                // redirect for login page
                echo "<script type='text/javascript'>alert('ثبت نام شما با موفقیت انجام شد.');</script>";
                header("location:../view/table_view.php");
            }
        }
    }
}

?>