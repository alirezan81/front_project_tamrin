<?php

if(!Authorization::checkRole()){
    header("Location: index.php");
}else{

    if(isset($_POST['del'])){  // for group acction next releases
    
        $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
        $sql = "DELETE FROM `message`  WHERE `id`=?";
        $result = $dbc->query( $sql,$_POST['users'] );
        
        if($result){
            $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت حذف شد!</p></div>";
            header("Location: messages.php");
        }else{
            $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
            header("Location: messages.php");
        }         
    }
    
    
    $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    $sql = "SELECT * FROM `message`";
    $result = $dbc->query($sql);
    $row = $result->fetchAll();
    $dbc -> close();
    
    include 'view/messages_view.php';
}


?>