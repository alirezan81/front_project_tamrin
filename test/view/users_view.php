<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="users form">
    <title>Users</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/18c7498de3.js" crossorigin="anonymous"></script>
</head>
<body dir="rtl">
    <div class="box large">
        <h1>کاربران</h1>
        <form action="" method="post">
            <?php
                if(isset($_SESSION['info'])){
                    echo $_SESSION['info'];
                    unset($_SESSION['info']);
                }
            ?>
            
            <table class="user_tbl">
                    <thead>
                        <tr>
                        <th><input type="checkbox" name=""></th>
                        <th>نام کامل</th>
                        <th>نام کاربری</th>
                        <th>رشته تحصیلی</th>
                        <th>نقش</th>
                        <th>دسترسی</th>
                        <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach($row as $user){ 
                            include 'view/template/usersTable.php';
                        }?>     
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td>عملیات های گروهی</td>
                            <td colspan="3"><i class="fa-solid fa-forward-fast"></i>
                            <i class="fa-solid fa-forward"></i>
                            <i class="fa-solid fa-backward"></i>
                            <i class="fa-solid fa-backward-fast"></i>
                            <td><a class="btn tbl" href="addUser.php">افزودن</a></td>
                            <td><button class="btn tbl" name="del">حذف</button></td>
                        </tr>
                    </tfoot>
      
            </table>
        </form>

    </div>

      
</body>
</html>
