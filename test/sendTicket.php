<?php
include 'config.php';
include 'lib/db.php';
include 'security.php';
include 'view/sendTicket_view.php';

if(!Authentication::check()){
    header("Location: login.php");
}else{
    $id = Authentication::uid();

    if( isset( $_POST['submit'] ) ){
    
        $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    
        $sql = "INSERT INTO ticket(sender,section,title,description) 
        VALUES(?,?,?,?)";
    
        $result = $dbc -> query( $sql, $id, $_POST['section'],
        $_POST['title'], $_POST['description']);
    
        $dbc -> close();
    
        if($result){
            $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت ارسال شد!</p></div>";
            header("Location: sendTicket.php");
        }else{
            $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
            header("Location: sendTicket.php");
        }
    }    
}


?>
