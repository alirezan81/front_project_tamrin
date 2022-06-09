<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="contact form">
    <title>Contact</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/18c7498de3.js" crossorigin="anonymous"></script>
</head>
<body dir="rtl">
    <div class="box small">
        <h1>تماس با ما</h1>
        <form action="" method="post">
                <?php
                    if(isset($_SESSION['info'])){
                        echo $_SESSION['info'];
                        unset($_SESSION['info']);
                    }
                ?>

                <label for="email"> ایمیل: </label>
                <input type="email" required name="email">

    
                <label for="title"> عنوان: </label>
                <input type="text" required name="title">
    
    
                <label for="description">متن پیام: </label>
                <textarea name="description" required></textarea><br>
                
                <button class="btn" type="submit" name="submit">
                    <i class="fa-solid fa-comment-sms"></i>
                    ارسال
                </button>           
        </form>

    </div>

      
</body>
</html>
