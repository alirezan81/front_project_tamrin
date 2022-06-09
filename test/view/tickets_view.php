<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="tickets list">
    <title>Tickets</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/18c7498de3.js" crossorigin="anonymous"></script>
</head>
<body dir="rtl">
    <div class="box large">
        <h1>تیکت ها</h1>
        <form action="" method="post">
            <?php
                if(isset($_SESSION['info'])){
                    echo $_SESSION['info'];
                    unset($_SESSION['info']);
                }
            ?>
            
            <table class="tickets_tbl">
                    <thead>
                        <tr>
                        <th><input type="checkbox" name=""></th>
                        <th>شناسه تیکت</th>
                        <th>شناسه کاربر</th>
                        <th>ایمیل</th>
                        <th>نام</th>
                        <th>عنوان</th>
                        <th>متن تیکت</th>
                        <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach($tickets as $row){ 

                            $sql = "SELECT email,fullname FROM users WHERE id=?";
                            $result = $dbc -> query( $sql ,$row['sender']);
                            $sender = $result->fetchArray();

                            include 'view/template/ticketsTable.php';
                        }?>     
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>عملیات های گروهی</td>
                            <td></td>
                            <td colspan="2"><i class="fa-solid fa-forward-fast"></i>
                            <i class="fa-solid fa-forward"></i>
                            <i class="fa-solid fa-backward"></i>
                            <i class="fa-solid fa-backward-fast"></i>
                            <td><button class="btn tbl">حذف</button></td>
                        </tr>
                    </tfoot>
      
            </table>
        </form>

    </div>

      
</body>
</html>
