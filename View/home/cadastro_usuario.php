<? require_once $_SERVER['DOCUMENT_ROOT'] . "/config/routes.php"; ?>
<!DOCTYPE html>
<html lang ="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/menu.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
<title>Cadastro</title>
<link rel="stylesheet" href="/assets/css/livros.css">
</head>
  <script a>
    var senha = document.getElementById("senha");
    var confirmSenha = document.getElementById("confirmSenha");

    function validaSenha() {
      if(senha.value != confirmSenha.value) {
    confirmSenha.setCustomValidity("Senhas diferentes!");
  } else {
    confirmSenha.setCustomValidity('');
  }
    }
    senha.onchange = validaSenha;
confirmSenha.onkeyup = validaSenha;
  </script>
<body> 
   <div class="menutopo">
<div class=logo>
    <img src="/assets/imagens/Teça.jpg" class="image" alt="imagemlogo"> 
</div>  
  <div class="submenu">
    <a href="../../index.php">Login</a>
    <a href="cadastro_usuario.php">Cadastrar</a>
  </div>
</div> 
  
  <div class="container">
    <h1 class="text"> Cadastrar Novo Usuario</h1>
    <form action="/Model/database/proc_usuario.php" method="post">

           <div class="teste">
      <label for="email" class="textboxemail label">Email:</label>
      <input type="email" name="email" id="email" class="textboxemail input" required oninput="validaEmail(this)"> 
        </div>
    </br>
 
    
      <div class="teste">
      <label for="email" class="textboxemail label">Nome:</label>
      <input type="text" name="nome" id="nome" class="textboxemail input">
        </div>
    </br>
      
      <div class="teste">
      <label for="senha">Senha:</label>
      <input type="password" name="senha" id="senha" class="textboxsenha input" required oninput="a(this)">
        </div>
        </br>
 
      <button type="submit" name="enviardados" class="button">Cadastrar</button>      
    </form>
</body>
</html>
