<? require_once $_SERVER['DOCUMENT_ROOT'] . "/config/routes.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-9">
  <title>Pagina Inicial</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/main.css">
</head>
  
  <body>
  <div class="containder">
         <?php if (!empty($_GET['msgErro'])) { ?>
        <div class="alert alert-warning" role="alert">
          <?php echo $_GET['msgErro']; ?>
        </div>
      <?php } ?>

      <?php if (!empty($_GET['msgSucesso'])) { ?>
        <div class="alert alert-success" role="alert">
          <?php echo $_GET['msgSucesso']; ?>
        </div>
      <?php } ?>
  </div>

     

  <div class="menutopo">
<div class=logo>
    <img src="assets/imagens/Teça.jpg" class="image" alt="imagemlogo"> 
</div>  
  <div class="submenu">
    <a href="index.php">Login</a>
    <a href="View/home/cadastro_usuario.php">Cadastrar</a>
  </div>
</div>
  
 <div class="container">
       <form action="../../Model/database/proc_login.php" method="post" class="form-action">
       <p class=textboxtitulo>Login</p>     
       </br>
        <div class="teste">
        <label for="email" class="textbox">E-mail</label>
        <input type="email" name="email" id="email" class="input" placeholder="Digite seu e-mail" required>
        </div>
       </br>
      <div class="teste">
        <label for="senha" class="textbox">Senha</label>
        <input type="password" name="senha" id="senha" class="input" placeholder="Digite sua senha" required>
      </div>
       </br>
      <!-- Aqui para enviar os dados -->
      <button type="submit" name="enviarDados" class="button">Entrar</button>
    </form>
  </div>
  </body>

</html>