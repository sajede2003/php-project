<?php


$servername='localhost';
$db_username='root';
$db_password='';
$database='myDB';


$connection=mysqli_connect($servername,$db_username,$db_password,$database);

if(!$connection){
    die('مشکل در اتصال به دیتابیس :'.mysqli_connect_error());
}

$createDatabase = 'CREATE DATABASE IF NOT EXISTS mydb';

$createDatabasesResult = mysqli_query($connection, $createDatabase);

if (!$createDatabasesResult){
    die('مشکل در ساخت دیتابیس:'.mysqli_error($connection));
}