<?php

include 'view/addPost_view.php';

if(!Authorization::checkAccess()){
    header("Location: index.php?p=home");
}else{
    $id = Authentication::uid();

    if( isset( $_POST['submit'] ) ){

        $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    
        
        $img_loc = $_FILES['cover']['tmp_name'];
        $img_name = $_FILES['cover']['name'];
    
    
        $sql = "INSERT INTO article(writer,subject,content,cover,state) 
        VALUES(?,?,?,?,?)";
    
        $result = $dbc -> query( $sql, $id, $_POST['subject'],
        $_POST['content'], $img_name, $_POST['state']);
    
        $dbc -> close();
    
        move_uploaded_file($img_loc,"cover/{$img_name}");
    
        if($result){
            $_SESSION['info'] = "<div style='color: darkgreen;'><p>با موفقیت افزوده شد!</p></div>";
            header("Location: index.php?p=addPost");
        }else{
            $_SESSION['info'] = "<div style='color: red;'><p>خطایی پیش آمد!</p></div>";
            header("Location: index.php?p=addPost");
        }
    
    
    }
}

