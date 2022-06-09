<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="edit form">
    <title>Edit</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/18c7498de3.js" crossorigin="anonymous"></script>
</head>
<body dir="rtl">
    <div class="box small">
        <h1>ویرایش پروفایل</h1>
        <form action="" method="post">
            <?php
                if(isset($_SESSION['info'])){
                    echo $_SESSION['info'];
                    unset($_SESSION['info']);
                }
            ?>
            <label for="username"> نام کاربری: </label>
            <input type="text" required name="username" value="<?php if(isset($row['username']) ) echo $row['username']; ?>">           
            
            <label for="password"> رمز عبور: </label>
            <input type="password" name="password" value="">

            <label for="fullname"> نام کامل: </label>
            <input type="text" required name="fullname" value="<?php if(isset($row['fullname']) ) echo $row['fullname']; ?>">

            <label for="email"> ایمیل: </label>
            <input type="email" required name="email" value="<?php if(isset($row['email']) ) echo $row['email']; ?>">

            <label for="phone"> همراه: </label>
            <input type="tel" required name="phone" value="<?php if(isset($row['phone']) ) echo $row['phone']; ?>">
 
            <label for="gender"> جنسیت: </label>

            <label class="radio_lbl" for="gender"> مرد </label>           
            <input type="radio" name="gender" value="male" <?php if( isset($row['gender']) && $row['gender'] == 'male' ) echo 'checked';?>>

            <label class="radio_lbl" for="gender"> زن </label>
            <input type="radio" name="gender" value="female" <?php if( isset($row['gender']) && $row['gender'] == 'female' ) echo 'checked';?>><br>
            
            <label for="age">سن: </label>
            <input type="number" name="age" min="15" max="40" value="<?php if(isset($row['age'])) echo $row['age']; ?>">
          
            
            <label for="city">شهر:</label>
            <input type="text" name="city" value="<?php if(isset($row['city']) ) echo $row['city']; ?>">

            <label for="edu"> تحصیلات: </label>
            <select name="edu">
                <?php
                foreach(array('مقطع تحصیلی','دانش آموز','دیپلم','فوق دیپلم','کارشناسی','کارشناسی ارشد','دکترا') as $edu){
                    echo"<option value='{$edu}'>{$edu}</option>";
                }
                ?>
            </select>
            <input class="small_txt" placeholder="رشته تحصیلی" type="text" name="major" value="<?php if(isset($row['major']) ) echo $row['major']; ?>"><br>
 
            <button class="btn" type="submit" name="submit">
                <i class="fa-solid fa-pen"></i>
                ویرایش
            </button>     
        </form>

    </div>

    <?php

    ?>
    
      
</body>
</html>
