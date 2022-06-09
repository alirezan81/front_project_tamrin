<?php

include 'config.php';
include 'lib/db.php';
include 'security.php';

if(!Authorization::checkRole()){
    header("Location: catalog.php");
}else{

    if(isset($_POST['del'])){  // for group acction next releases
    
        $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
        $sql = "UPDATE `users` SET status=? WHERE `id`=?";
        
        $result = $dbc->query( $sql,'deleted',$_POST['users_id'] );
        
        if($result){
            $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت حذف شد!</p></div>";
            header("Location: users.php");
        }else{
            $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
            header("Location: users.php");
        }         
    }
    
    
    $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    $sql = "SELECT * FROM `users` WHERE `status`=?";
    $result = $dbc->query($sql,'normal');
    $row = $result->fetchAll();
    $dbc -> close();
    
    include 'view/users_view.php';
}


?>
