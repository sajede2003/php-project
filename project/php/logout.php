<?php
session_start();

if(isset($_SESSION['myDB_user_id']) || isset($_COOKIE['myDB_user_id'])){

   unset($_SESSION['myDB_user_id']);
   setcookie('myDB_user_id', '',time()-1, '/');
   header('Location:../view/login_view.php');

} else{
    // redirect for login page
    header('Location:../view/login_view.php');
}