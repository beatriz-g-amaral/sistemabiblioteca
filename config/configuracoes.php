<?php
include $_SERVER['DOCUMENT_ROOT'] . "/View/header.php";
?>
<title>Configurações</title>
<link rel="stylesheet" href="css/livros.css">
</head>

<body>
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/View/menu.php"; ?>
    
    
  <div class="container">
    <<h1 class="text"> Configurações</h1>
    <form action="Model/database/proc_usuarioedit.php" method="post">

      <div class="teste">
      <label for="email" class="textbox">Editar Email:</label>
      <input type="email" name="email" id="email" class="textboxemail input"> 
        </div>
      <div class="teste">
      <label for="email" class="textbox">Editar Nome:</label>
      <input type="text" name="nome" id="nome" class="textboxemail input">
        </div>
    </br>
      <div class="teste">
      <label for="senha" class="textbox">Senha:</label>
      <input type="password" name="senha" id="senha" class="textboxsenha input"  oninput="a(this)">
        </div>
   </br>
   
      <button type="submit" name="enviardados" class="button">Salvar alterações</button>      
    </form>
  </div>
      
  
    </body>
</html> 

 