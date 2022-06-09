<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/18c7498de3.js" crossorigin="anonymous"></script>
    <title>Navigation menu</title>
</head>
<body>
    <nav class="nav">
        <ul class="menu">
            <h4 class="menu-head">منوی ادمین</h4>
            <li>
                <i class="fa-solid fa-house"></i>
                <a href="index.php">خانه</a>
            </li>

            <?php if(Authorization::checkRole()){ ?>
            <li>
                <i class="fa-brands fa-python"></i>
                <a href="index.php?p=posts">مقاله ها</a>
            </li>
            <?php } ?>
            
            <?php if(Authorization::checkAccess()){ ?>
            <li>
                <i class="fa-solid fa-feather"></i>
                <a href="index.php?p=addPost">افزودن مقاله</a>
            </li>
            <?php } ?>

            <hr size="1">

            <li>
                <i class="fa-solid fa-users"></i>
                <a href="#users">کاربران</a>
            </li>

            <li>
                <i class="fa-solid fa-user"></i>
                <a href="#addUser">افزودن کاربر</a>
            </li>

            <hr size="1">

            <li>
                <i class="fa-solid fa-inbox"></i>
                <a href="#tickets">تیکت ها</a>
            </li>

            <li>
                <i class="fa-solid fa-message"></i>
                <a href="index.php?p=messages">پیام ها</a>
            </li>

            <hr size="1">

            <?php if(Authentication::check()){ ?>
            <li>
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <a href="index.php?p=logout">خروج</a>
            </li>
            <?php }else{?>
            <li>
                <i class="fa-solid fa-door-open"></i>
                <a href="index.php?p=login">ورود</a>
            </li>
            <?php } ?>

        </ul>
    </nav>
</body>
</html>