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
       //  echo $email, "já cadastrado";
         header("Location: ../../index.php?msgErro=Email já cadastrado");
        }
    else{

      $sql = "INSERT INTO usuario (nome, email, senha, ativo, data_cadastro,ultimo_login) VALUES (:nome,:email,:senha,'true', :data, :data)";

       $stmt = $pdo->prepare($sql);
       $dados = array(//organizar as informacoes sql
        ':nome' => $_POST['nome'],
        ':email' => $_POST['email'],
        ':senha' => md5($_POST['senha']),      
        ':data' => $_POST['data_cadastro'],
        ':data' => $_POST['ultimo_login'],
                   
      );
   
       if ($stmt->execute($dados)) {
        header("Location: ../../index.php?msgSucesso=Cadastro realizado com sucesso!");
      }
}      
      }
   catch (PDOException $e) {
      die($e->getMessage());
      header("Location: /index.php?msgErro=Falha ao cadastrar...");
  }
}
else {
  header("Location: /index.php?msgErro=Erro de acesso.");
}
die();
  
?>