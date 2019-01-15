<?php
include('include/funcs.php');
include('include/helper.php');
session_start();
$pdo = db_con();

if(!empty($_SESSION['member'])){
    header('Location: memo3kanri.php');
    exit;
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name     = htmlspecialchars(get_post('name'));
    $email    = htmlspecialchars(get_post('email'));
    $password = htmlspecialchars(get_post('password'));

    $arr = array();

    $stmt = prepare("SELECT * FROM gs_memo WHERE email=:email AND password=:password AND life_flg=0");
    $stmt->bindValue(':email', $email);
    $stmt->bindValue('password', $password);
    $res = $stmt->execute();

    if($res == false){
        queryError($stmt);
    }

    $val = $stmt->fetch();

    if($val['id'] != ''){
        $_SESSION['chk_ssid']  = session_id();
        $_SESSION['kanri_flg'] = $val['kanri_flg'];
        $_SESSION['name']      = $val['name'];
        header('Location: memohome.php');
    }else{
        header('Location: login.php');
    }
}
    exit();