<?php
    include '../php/register.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container" onclick="onclick">
        <div class="top"></div>
        <div class="bottom"></div>
        <div class="center" style="top: 50%;">

        <?php
            if(!empty($errors)){
                foreach($errors as $error){
                    echo "<script type='text/javascript'>alert('$error');</script>";
                }
            }
        
        
        ?>

        <h2>ایجاد حساب کاربری</h2>
            <form action="register_view.php" method="post">
                <input type="text" name="username" placeholder="نام کاربری" />
                <input type="email" name="email" placeholder="ایمیل" />
                <input type="password" name="password" placeholder="رمز عبور"/>
                <input type="password" name="re_password" placeholder="تکرار رمز عبور" />
                <p> قبلا ثبت نام کردی؟ <a href="./login_view.php">ورود به حساب</a></p>
                <input class="sbt" type="submit" name="register_btn" value="ورود" />
            </div>
            </form>
    </div>
</body>
</html>