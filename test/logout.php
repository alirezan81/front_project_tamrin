<?php

if(!Authentication::check()){
    header("Location: index.php?p=login");
}else{
    Authentication::logout();
    header("Location: index.php?p=home");
}

?>