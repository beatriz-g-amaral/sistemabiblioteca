<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Login.php';

session_start();
$exception = null;

if(count($_POST) > 0) {
    $login = new Login($_POST);
    try {
        $user = $login->checkLogin();
        $_SESSION['user'] = $user;
        header("Location: index_login.php");
    } catch(AppException $e) {
        $exception = $e;
    }
}


loadView('login', $_POST + ['exception' => $exception]);