<?php


include 'view/login_view.php';

if(Authentication :: check()){
    header("Location: editProfile.php");
}

if( isset( $_POST['submit'] ) ){

    $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE email=? AND password=? AND status=?";
    $result = $dbc->query( $sql,$email,$password,'normal' );
    
    if ($row = $result->fetchArray()){
        Authentication :: login($row);
        header("Location: index.php?p=editProfile");
        $dbc -> close();
    }else{
        $_SESSION['info'] = "<div style='color: red;'><p>کاربری با این مشخصات یافت نشد!</p></div>";
        header("Location: index.php?p=login");
    }  
}



?>
