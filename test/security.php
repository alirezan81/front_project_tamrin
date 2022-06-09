<?php
session_start();

class Authentication{

    static function login( $row ){ 
        $_SESSION['uinfo'] = $row;
        $_SESSION['uid'] = $row['id'];      
    }

    static function check(){
        return isset( $_SESSION['uid'] );
    }

    static function uid(){
        return $_SESSION['uid'];
    }

    static function urole(){
        return $_SESSION['uinfo']['role'];
    }

    static function uaccess(){
        return $_SESSION['uinfo']['level'];
    }

    static function uemail(){
        return $_SESSION['uinfo']['email'];
    }

    static function logout(){
        unset( $_SESSION['uid'] );
        unset($_SESSION['uinfo']);
    }
}

class Authorization{
  
    static function checkRole(){ // Authorization :: checkRole()
        if( ! Authentication :: check() )
            return false;
        return Authentication::urole() == "admin";
    }
    
    static function checkAccess(){ // Authorization :: checkAccess() return true if be read-write access
        if( ! Authentication :: check() )
            return false;
        return Authentication::uaccess() == "read-write";
    }
}

?>

<!-- // static function uinfo($uid){
    //     $dbc = new DB( $db_host, $db_user, $db_pass, $db_name);
    //     $sql = "SELECT * FROM `users` WHERE id=?";
    //     $result = $dbc->query( $sql,$id );
    //     $row = $result->fetchArray();
    //     return $row;
    // } Next Releases -->
<!-- 
به جای کوئری سلکت در لاگین
با تابع uexsist چک بشه که تو دیتابیس کاربرهست یا نه 
بعد اطلاعات ذخیره بشن یک بار وبعد همه جا استفاده بشن -->