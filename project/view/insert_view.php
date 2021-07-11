<?php

include '../php/insert.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اضافه کردن</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="area">
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>    
                <li></li>
                <form action="" class="form" method="post">
                    کاری که میخواهم انجام دهم:<br /><input type="text" class="input" name="work"><br>
                    در تاریخ:<br/><input type="date" class="input" name="date"><br>
                    <input type="submit" class="button submit_btn update_btn" name="submit" value="ثبت">
                </form>
            </ul>
        </div>
    </div>
</body>
</html>