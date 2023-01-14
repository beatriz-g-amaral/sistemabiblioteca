<?php
  if ($_SERVER["REQUEST_URI"] == "/home") {
    header("Location: /View/home/index_logado.php");
    exit;
  }
?>