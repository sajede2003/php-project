<?php
session_start();


// بررسی لاگین بودن 
if(isset($_SESSION['myDB_user_id']) || isset($_COOKIE['myDB_user_id'])){
    // اگر کاربر لاگین بود به صفحه .... وارد شود دوباره وارد نشود
    header('location: ../php/profile.php');
}




$errors='';

if(isset($_POST['login'])){
    $userlogin= $_POST['userlogin']; //username or email
    $password=$_POST['password'];

    $remember=(isset($_POST['remember']))?1:0;

    include'db.php';
    
    // hash user name 
    $userlogin=htmlspecialchars($userlogin);

    $check_userlogin=mysqli_query($connection,"SELECT * FROM users WHERE username='$userlogin' OR email='$userlogin'");

    if(mysqli_num_rows($check_userlogin)==0){
        $errors='نام کاربری اشتباه میباشد';
    }else{
        $user_info=mysqli_fetch_array($check_userlogin);

        if(md5($password) == $user_info['password']){
            // build coockie and redirect for index

            $_SESSION['myDB_user_id']=$user_info['id'];
            if($remember){
            setcookie('myDB_user_id',$user_info['id'], time()+(30*24*60*60),'/');
            }

            header('Location:../php/profile.php');
            
        }else{
            $errors='کلمه عبور اشتباه است';
        }
    }
}

?>
