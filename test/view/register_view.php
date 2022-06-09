<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="register form">
    <title>Register</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/18c7498de3.js" crossorigin="anonymous"></script>
</head>
<body dir="rtl">
    <div class="box small">
        <h1>ثبت نام</h1>
        <form action="" method="post">
            <?php
                if(isset($_SESSION['info'])){
                    echo $_SESSION['info'];
                    unset($_SESSION['info']);
                }
            ?>

            <label for="username"> نام کاربری: </label>
            <input type="text" required name="username">           
            
            <label for="password"> رمز عبور: </label>
            <input type="password" required name="password">

            <label for="fullname"> نام کامل: </label>
            <input type="text" required name="fullname">

            <label for="email"> ایمیل: </label>
            <input type="email" required name="email">

            <label for="phone"> همراه: </label>
            <input type="tel" required name="phone">

            <label for="gender"> جنسیت: </label>

            <label class="radio_lbl" for="gender"> مرد </label>           
            <input type="radio" name="gender" value="male" checked>

            <label class="radio_lbl" for="gender"> زن </label>
            <input type="radio" name="gender" value="female"><br>     
        
            <button class="btn" type="submit" name="submit">
                <i class="fa-solid fa-id-card"></i>
                ثبت نام
            </button><br>
            <a href="login.php">قبلا ثبت نام کردی؟ وارد شو!</a>     
        </form>

    </div>

      
</body>
</html>
