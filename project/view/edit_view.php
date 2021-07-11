<?php


include '../php/edit.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش کردن</title>
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
                    کاری که میخواهم انجام دهم:<br /><input name="work" class="edit_input input" type="text" value="<?php echo $work; ?>"><br>
                    در تاریخ:<br /><input name="date" type="date" class="edit_input input" value="<?php echo $date; ?>">
                    <br>
                    <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>> 
                    <br>
                    <input type="submit" name="update" class="button submit_btn update_btn" value="ویرایش">
                </form>
            </ul>
        </div>
    </div>
</body>
</html>