<?php

function requireValidSession($requiresAdmin = false) {
    $user = $_SESSION['user'];
    if(!isset($user)) {
        header('Location: index.php');
        exit();
    } elseif($requiresAdmin && !$user->is_admin) {
        addErrorMsg('Acesso negado!');
        header('Location: index_logado.php');
        exit();
    }
}