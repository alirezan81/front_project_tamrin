<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="login form">
    <title>Login</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/18c7498de3.js" crossorigin="anonymous"></script>
</head>
<body dir="rtl">
    <div class="box small">
        <h1>ورود</h1>
        <form action="" method="post">
            <?php
                if(isset($_SESSION['info'])){
                    echo $_SESSION['info'];
                    unset($_SESSION['info']);
                }
            ?>

                
            <label for="email"> ایمیل: </label>
            <input type="email" required name="email">
            
            <label for="password"> رمز عبور: </label>
            <input type="password" required name="password">
            
            <button class="btn" type="submit" name="submit">
                <i class="fa-solid fa-door-open"></i>
                ورود
            </button><br>
            <a href="register.php">عضو نیستی؟ ثبت نام کن</a>    
            
        </form>

    </div>

      
</body>
</html>
