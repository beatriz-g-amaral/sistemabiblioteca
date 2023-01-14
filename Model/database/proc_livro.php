<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/Infrastructure/conexao.php";

if (!empty($_POST)) { // CHEGOU AS INFORMACOES e irá inserir no banco
  try {
    $idlivro = $_POST['idlivro'];
    $sqlLivro = "SELECT * FROM livro WHERE idlivro = :idlivro";
    $stmt = $pdo->prepare($sqlLivro);
    $dadosLivro = array(
      ':idlivro' => $_POST['idlivro']
    );
    $stmt->execute($dadosLivro);
    $result = $stmt->fetchAll();

    $estoquelivro = $result[0]['estoquelivro'];

    if ($stmt->rowCount() > 0) {
      $novoestoquelivro = $estoquelivro + 1;
      $sql = "UPDATE livro SET estoquelivro = :estoquelivro WHERE idlivro = :idlivro";
      $stmt = $pdo->prepare($sql);
      $dados = array(
        ':idlivro' => $_POST['idlivro'],
        ':estoquelivro' => strval($novoestoquelivro)
      );
      $updated = $stmt->execute($dados);

      if ($updated) {        
        header("Location: /cadastro_livro.php?msgSucesso=Edição realizado com sucesso!");
      } else {
        header("Location: /cadastro_livro.php?msgErro=Erro");
      }
    } else {
      $sql = "INSERT INTO livro (cadastropor ,idlivro,titulolivro,autorlivro,editoralivro, generolivro, estoquelivro, datapublica ) VALUES (:cadastropor,:idlivro,:titulolivro,:autorlivro,:editoralivro,:generolivro,1,:datapublica)";

      $stmt = $pdo->prepare($sql);
      $dados = array( //organizar as informacoes sql
        ':cadastropor' => $_POST['cadastropor'],
        ':idlivro' => $_POST['idlivro'],
        ':titulolivro' => $_POST['titulolivro'],
        ':autorlivro' => $_POST['autorlivro'],
        ':editoralivro' => $_POST['editoralivro'],
        ':generolivro' => $_POST['generolivro'],
        ':datapublica' => $_POST['datapublica'],
      );

      if ($stmt->execute($dados)) {
        header("Location:index_logado.php?msgSucesso=Cadastro realizado com sucesso!");
      }
    }
  } catch (PDOException $e) {
    die($e->getMessage());
    header("Location: index.php?msgErro=Falha ao cadastrar...");
  }
} else {
  header("Location: index.php?msgErro=Erro de acesso.");
}
die();
