<?php

include 'config.php';
include 'lib/db.php';
include 'security.php';

if(!Authorization::checkRole()){
    header("Location: index.php?p=home");
}else{

    if(isset($_POST['del'])){  // for group acction next releases
    
        $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
        $sql = "DELETE FROM `article`  WHERE `id`=?";
        $result = $dbc->query( $sql,$_POST['users'] );
        
        if($result){
            $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت حذف شد!</p></div>";
            header("Location: index.php?p=posts");
        }else{
            $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
            header("Location: index.php?p=posts");
        }         
    }
    
    
    $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    $sql = "SELECT * FROM `article`";
    $result = $dbc->query($sql);
    $row = $result->fetchAll();
    include 'view/posts_view.php';
    $dbc -> close();
}


?>
