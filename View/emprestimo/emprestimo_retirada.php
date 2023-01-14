<?php
include $_SERVER['DOCUMENT_ROOT'] . "/View/util/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/routes.php";
?>
<title>Emprestimo Retirada</title>
<link rel="stylesheet" href="/assets/css/livros.css">
</head>

<body>
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/View/util/menu.php"; ?>
    
 <div class="containerlivro">   
    <form action="/Model/database/proc_retirada.php" method= "post" >
    <h4 class="textboxtitulo">Retirada</h4>
    <div class="teste"style="margin:32px;">
      
  <div class="teste">
    <label for="idlivro" class="textboxlivro">Codigo de Identificação do Livro</label>
    <input type="text" name="idlivro" id="idlivro" class="input" placeholder="Digite o código" required><br>
    </div></br>
   <div class="teste">
    <label for="titulolivro" class="textboxlivro">Nome do Livro</label>
    <input type="text" name="titulolivro" id="titulolivro" class="input" placeholder="Digite o nome do livro" required><br>
    </div></br>
 <div class="teste">
    <label for="idestudante" class="textboxlivro">Codigo do</label>
    <input type="text" name="idestudante" id="idestudante" class="input" placeholder="Digite o código" required><br>
    </div></br>
   <div class="teste">
    <label for="nome" class="textboxlivro">Nome do Livro</label>
    <input type="text" name="nome" id="nome" class="input" placeholder="Digite o nome estudante" required><br>
    </div></br>
      <div class="teste">
    <label for="dataretirada" class="textboxlivro">Data da Retirada</label>
    <input type="date" name="dataretirada" id="dataretirada" class="input"  required><br>
    </div></br>
    <div class="teste">
    <label for="datadevolucao" class="textboxlivro">Data da Devolução</label>
    <input type="date" name="datadevolucao" id="datadevolucao" class="input"  required><br>
    </div></br>
    <input type="submit" class="button" name='submit' value="Enviar">
    </div>
    </form>
 </div>
</body>
