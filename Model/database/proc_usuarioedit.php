<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/Infrastructure/conexao.php";

if(!empty($_POST)){// CHEGOU AS INFORMACOES e irá inserir no banco
   try{// organizar as informações
       $email = $_POST['email'];
       $sqlEmail="SELECT * FROM usuario WHERE email = :email";
       $stmt = $pdo->prepare($sqlEmail);
       $dadosEmail = array(
        ':email' => $_POST['email']
         );
      $stmt->execute($dadosEmail);
      $result = $stmt->fetchAll();
    if ($stmt->rowCount() > 0){ 
          if(':nome' <> null){
          $sql = "UPDATE usuario SET nome=:nome ,email=:email, senha=:senha WHERE email=:email";
          $stmt = $pdo->prepare($sql);
           $dados = array(//organizar as informacoes sql
            ':nome' => $_POST['nome'],
            ':email' => $_POST['email'],
            ':senha' => md5($_POST['senha'])             
          );
           if ($stmt->execute($dados)) {
            header("Location: index.php?msgSucesso=Edição realizado com sucesso!");
          }
        
      }
          else 
      $sql = "UPDATE usuario SET email=:email, senha=:senha WHERE email=:email";
       $stmt = $pdo->prepare($sql);
       $dados = array(//organizar as informacoes sql
        ':email' => $_POST['email'],
        ':senha' => md5($_POST['senha'])
                   
      );
   
       if ($stmt->execute($dados)) {
        header("Location: index.php?msgSucesso=Edição realizado com sucesso!");
      }
}      
      }
     else{
        header("Location: index.php?msgErro=Email Invalido...");
     }
   catch (PDOException $e) {
      die($e->getMessage());
      header("Location: index.php?msgErro=Falha ao cadastrar...");
  }
}
else {
  header("Location: index.php?msgErro=Erro de acesso.");
}
die();
  
?>