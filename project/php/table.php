<?php

include 'db.php';


$createTableSql = 'CREATE TABLE IF NOT EXISTS userwork (id INT (5) NOT NULL AUTO_INCREMENT PRIMARY KEY, work VARCHAR(255) NOT NULL, date DATE NOT NULL)';

$createTableResult = mysqli_query($connection,$createTableSql);
if(!$createTableResult){
    die('مشکل در ساخت جدول:'.mysqli_error($connection));
}

mysqli_close($connection);