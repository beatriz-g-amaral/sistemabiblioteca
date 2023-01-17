<?php
  if ($_SERVER["REQUEST_URI"] == "/home") {
    header("Location: /View/home/index_logado.php");
    exit;
  }
  if ($_SERVER["REQUEST_URI"] == "/catalogacao/pesquisa") {
    header("Location: /View/catalogacao/cadastro_pesquisa.php");
    exit;
  }
  if ($_SERVER["REQUEST_URI"] == "/catalogacao/cadastro") {
    header("Location: /View/catalogacao/cadastro_livro.php");
    exit;
  }

  if ($_SERVER["REQUEST_URI"] == "/emprestimo/emprestimo_retirada") {
    header("Location: /View/emprestimo/emprestimo_retirada.php");
    exit;
  }

  if ($_SERVER["REQUEST_URI"] == "/configuracoes") {
    header("Location: /config/configuracoes.php");
    exit;
  }
    
  if ($_SERVER["REQUEST_URI"] == "/alunos_cadastro") {
    header("Location: /alunos-servidores/alunos_cadastro.php");
    exit;
  }
?>