<?php
session_start();

include 'config.php';
include 'lib/db.php';
include 'view/register_view.php';

if( isset( $_POST['submit'] ) ){

    $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);

    $email = $_POST['email'];
    $sql = "SELECT email,status FROM `users` WHERE email=?";
    $res = $dbc->query( $sql,$email );
    
    if(!$row = $res->fetchArray()){
        $sql = "INSERT INTO users(username,password,fullname,email,phone,gender) 
        VALUES(?, ?, ?, ?, ?, ?)";

        $result = $dbc -> query( $sql,$_POST['username'],$_POST['password'],$_POST['fullname'], $email, $_POST['phone'],$_POST['gender']);
    }
    else if($row['status'] == "delete"){
        $sql = "UPDATE `users` SET status=? WHERE email=?";
        $result = $dbc->query( $sql,'normal',$email);

    }else{       
        $_SESSION['info'] = "<div style='color: red;'><p>کاربری با این ایمیل ثبت نام کرده است!</p></div>";
        $dbc -> close();
        header("Location: register.php");
        die();
    }


    if($result){
        $_SESSION['info'] = "<div style='color: darkgreen;'><p>شما با موفقیت ثبت نام شدید!</p></div>";
    }else{
        $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
    }

    header("Location: register.php");
    $dbc -> close();


   
}



?>
