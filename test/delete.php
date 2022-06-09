<?php

include 'config.php';
include 'lib/db.php';

if(isset($_GET['id'])){ 

    $id = $_GET['id'];
    $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);

    if($_GET['del'] == 'user'){
        $sql = "UPDATE `users` SET status=? WHERE `id`=?";
        $result = $dbc->query( $sql,'ban',$id);
        $redir = "Location: users.php"; 
    }

    elseif($_GET['del'] == 'post'){
        $sql = "DELETE FROM `article`  WHERE `id`=?";
        $result = $dbc->query( $sql,$id );
        $redir = "Location: posts.php";
    }

    elseif($_GET['del'] == 'message'){
        $sql = "DELETE FROM `message`  WHERE `id`=?";
        $result = $dbc->query( $sql,$id );
        $redir = "Location: messages.php";
    }

    elseif($_GET['del'] == 'tickets'){
        $sql = "DELETE FROM `ticket`  WHERE `id`=?";
        $result = $dbc->query( $sql,$id );
        $redir = "Location: tickets.php";
    }


    if($result){
        $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت حذف شد!</p></div>";
        header($redir);
    }else{
        $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
        header($redir);
    }
         
}

?>
