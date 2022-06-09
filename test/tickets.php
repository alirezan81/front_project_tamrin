<?php

include 'config.php';
include 'lib/db.php';
include 'security.php';

if(!Authorization::checkRole()){
    header("Location: catalog.php");
}else{

    if(isset($_POST['del'])){  // for group acction next releases
    
        $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
        $sql = "DELETE FROM `message`  WHERE `id`=?";
        $result = $dbc->query( $sql,$_POST['users'] );
        
        if($result){
            $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت حذف شد!</p></div>";
            header("Location: tickets.php");
        }else{
            $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
            header("Location: tickets.php");
        }         
    }
    
    
    $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    $sql = "SELECT * FROM `ticket`";
    $result = $dbc->query($sql);
    $tickets = $result->fetchAll();
    
    include 'view/tickets_view.php';

    $dbc -> close();
}


?>
