<?php
session_start();
include 'config.php';
include 'lib/db.php';
include 'view/contact_view.php';


if( isset( $_POST['submit'] ) ){

    $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    $sql = "INSERT INTO message(email,title,description) 
    VALUES(?,?,?)";

    $result = $dbc -> query($sql, $_POST['email'], $_POST['title'], $_POST['description']);

    $dbc -> close();

    if($result){
        $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت ارسال شد!</p></div>";
        header("Location: index.php?p=contact");
    }else{
        $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
        header("Location: index.php?p=contact");
    }

   
}