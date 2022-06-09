<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="messages list">
    <title>Messages</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/18c7498de3.js" crossorigin="anonymous"></script>
</head>
<body dir="rtl">
    <div class="box large">
        <h1>پیام ها</h1>
        <form action="" method="post">
            <?php
                if(isset($_SESSION['info'])){
                    echo $_SESSION['info'];
                    unset($_SESSION['info']);
                }
            ?>
            
            <table class="messages_tbl">
                    <thead>
                        <tr>
                        <th><input type="checkbox" name=""></th>
                        <th>شناسه پیام</th>
                        <th>ایمیل</th>
                        <th>عنوان</th>
                        <th>پیام</th>
                        <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach($row as $message){ 
                            include 'view/template/messagesTable.php';
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
                            <td><button class="btn tbl">حذف</button></td>
                        </tr>
                    </tfoot>
      
            </table>
        </form>

    </div>

      
</body>
</html>
