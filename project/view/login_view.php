
<?php
    include '../php/login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container" onclick="onclick">
        <div class="top"></div>
        <div class="bottom"></div>
        <div class="center">

       <?php 
            if($errors !=''){
                echo "<script type='text/javascript'>alert('$errors');</script>";
            }
       ?>

        <h2>ورود به حساب کاربری</h2>
            <form action="login_view.php" method="post">
                <input type="text" name="userlogin" placeholder=" نام کاربری یا ایمیل" />
                <input type="password" name="password" placeholder="رمز عبور" />
                <input type="checkbox" name="remember" id="remember" >مرا به خاطر بسپار 
                <p class="login_p"> حساب کاربری نداری؟ <a href="./register_view.php">ایجاد حساب</a></p>
                <input class="sbt" type="submit" name="login" value="ورود" />
            </form>
        </div>
    </div>
</body>
</html>