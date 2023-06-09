<?php
session_start();

require_once('login-config.php');

$username_admin = $_POST['username-admin'];
$password_admin = $_POST['password-admin'];

$sql = "SELECT * FROM admin WHERE email = ? AND password = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$username_admin, $password_admin]);

if($result){
    $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
    if($stmtselect->rowCount() > 0){
        $_SESSION['Real Estate'] = $user;
        echo 'Login Successful';
    }else{
        echo 'user not found';
    }
}else{
    echo 'there were errors';
}


$username_customer = $_POST['username-customer'];
$password_customer = $_POST['password-customer'];

$sql = "SELECT * FROM registration WHERE username = ? AND password = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$username_customer, $password_customer]);

if($result){
    $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
    if($stmtselect->rowCount() > 0){
        $_SESSION['Real Estate'] = $user;
        echo 'Login Successful';
    }else{
        echo 'user not found';
    }
}else{
    echo 'there were errors';
}