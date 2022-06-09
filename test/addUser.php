<?php
include 'config.php';
include 'lib/db.php';
include 'security.php';
include 'view/addUser_view.php';

if(!Authorization::checkRole()){
    header("Location: index.php");
}else{
    if( isset( $_POST['submit'] ) ){

        $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    
        $email = $_POST['email'];
        $sql = "SELECT email FROM `users` WHERE email=?";
        $result = $dbc->query( $sql,$email );
        
        if (!$row = $result->fetchArray()){
            $sql = "INSERT INTO users(username,password,fullname,email,phone,gender,role,level) 
            VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
    
            $result = $dbc -> query( $sql,$_POST['username'],$_POST['password'],$_POST['fullname'], 
            $email, $_POST['phone'],$_POST['gender'], $_POST['role'], $_POST['level']);
    
            $dbc -> close();
    
    
            if($result){
                $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت ثبت نام شد!</p></div>";
                header("Location: index.php?p=addUser");
            }else{
                $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
                header("Location: index.php?p=addUser");
            }
    
        }else{
            $_SESSION['info'] = "<div style='color: red;'><p>کاربری با این ایمیل وجود دارد!</p></div>";
            header("Location: addUser.php");
        }
       
    }
}

?>