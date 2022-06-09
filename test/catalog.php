<?php

    $dbc = new DB($db_host, $db_user, $db_pass, $db_name);

    $sql = "SELECT * FROM article WHERE state=?
            ORDER BY id DESC
            LIMIT 15";

    $result = $dbc -> query( $sql , "published");
    $posts = $dbc -> fetchAll();



    include 'view/catalog_view.php';

    $dbc -> close();
?>
