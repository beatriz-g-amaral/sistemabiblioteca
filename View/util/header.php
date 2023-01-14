<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/Infrastructure/conexao.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/routes.php";
session_start();

if (empty($_SESSION)) {
  // Significa que as variáveis de SESSAO não foram definidas.
  // Não poderia acessar aqui.
  header("Location: /index.php?msgErro=Você precisa se autenticar no sistema.");
  die();
}
?>
<!DOCTYPE html>
<html lang ="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/menu.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/assets/js/main.js"></script>
  