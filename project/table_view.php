
<?php

include '../php/table.php';
include '../php/insert.php';


$query=mysqli_query($connection,'SELECT * FROM userwork ORDER by id DESC');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کارهای زمان دار</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/all.css">
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

                <a href="../php/logout.php" class="btn exit_btn">خروج</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th>شماره</th>
                            <th>توضیحات کارم</th>
                            <th>تاریخی که باید انجام بشه</th>
                            <th>تیک انجام</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while ($result = mysqli_fetch_array($query)){
                                echo'<tr class="tr_style">';
                                echo'<td>'.$result['id'].'</td>';
                                echo'<td>'.$result['work'].'</td>';
                                echo'<td>'.$result['date'].'</td>';
                                ?><td><input type="checkbox" name="checkbox" id="checkbox"></td>
                            <?php  echo "<td><a href=\"edit_view.php?id=$result[id]\" class='btn edit_btn'>"?><i class="fas fa-edit edit"></i></a></td><?php
                                echo "<td><a href=\"../php/delete.php?id=$result[id]\" class='btn delete_btn' onclick=\"return confirm('آیا شما میخواهید این فیلد را حذف کنید؟')\">";?><i class="fas fa-trash-alt delete"></i></a></td>
                                </tr>
                            <?php } ?>
                </table>
                <a href="./insert_view.php" class="button submit_btn">افزودن</a>
            </ul>
        </div>
    </div>
</body>
</html>
