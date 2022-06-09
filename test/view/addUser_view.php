<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="add user form">
    <title>AddUser</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/18c7498de3.js" crossorigin="anonymous"></script>
</head>
<body dir="rtl">
    <div class="box small">
        <h1>افزودن کاربر</h1>
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
            <input type="password" name="password">

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

            <label for="role"> نقش: </label>

            <label class="radio_lbl" for="role"> کاربر </label> 
            <input type="radio" name="role" value="user" checked>
            
            <label class="radio_lbl" for="role"> ادمین </label>
            <input type="radio" name="role" value="admin"><br>
      
            <label for="level"> سطح و مجوز: </label>

            <label class="radio_lbl" for="level"> مطالعه </label>            
            <input type="radio" name="level" value="read" checked>

            <label class="radio_lbl" for="level"> مطالعه + انتشار </label>            
            <input type="radio" name="level" value="read-write"><br>
            
            <!-- <button class="btn" type="reset">
                <i class="fa-solid fa-eraser"></i>
                انصراف و بازگشت
            </button>  Next Release --> 

            <button class="btn" type="submit" name="submit">
                <i class="fa-solid fa-user-plus"></i>
                افزودن کاربر
            </button> 
            
        </form>

    </div>
      
</body>
</html>
