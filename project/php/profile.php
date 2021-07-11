<?php

session_start();

// Check that the user is logged in and get user information from the database

if(isset($_SESSION['myDB_user_id']) || isset($_COOKIE['myDB_user_id'])){
    //user logged in 
    if(isset($_SESSION['myDB_user_id'])) $user_id = $_SESSION['myDB_user_id'];
    else if(isset($_COOKIE['myDB_user_id'])) $user_id = $_COOKIE['myDB_user_id'];
} else{
    // User not logged in
    header('Location:../view/login_view.php');
}

include 'db.php';

$select_user =mysqli_query($connection,"SELECT * FROM users WHERE id ='$user_id'");
$user_info =mysqli_fetch_array($select_user);

echo "<script type='text/javascript'>alert('کاربر $user_info[username] خوش آمدید');</script>";
header("Location:../view/table_view.php");
?>

