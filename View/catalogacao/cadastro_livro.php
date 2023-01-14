<?php
include $_SERVER['DOCUMENT_ROOT'] . "/View/util/header.php";
?>
<title>Cadastro Catalogação</title>
<link rel="stylesheet" href="/assets/css/livros.css">
</head>

<body>
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/View/util/menu.php"; ?>
 <div class="containerlivro">   
        <form action="/../../Model/database/proc_livro.php" method= "post" >
    
    <h4 class="textboxtitulo">Cadastro de livros</h4>
    <div class="teste"style="margin:32px;">

      <div class="teste">
    <label for="cadastropor" class="textboxlivro">Nome Cadastro</label>
    <input type="text" name="cadastropor" id="cadastropor" class="input" placeholder="Digite seu nome" required><br>
    </div></br>

      
    <div class="teste">
    <label for="idlivro" class="textboxlivro">Código do livro</label>
    <input type="text" name="idlivro" id="idlivro" class="input" placeholder="Digite o código do Livro" required><br>
    </div> </br>
    
    <div class="teste">
    <label for="titulolivro" class="textboxlivro">Título do livro</label>
    <input type="text" name="titulolivro" id="titulolivro" class="input" placeholder="Digite o Nome do Livro" required><br>
    </div></br>
    
    <div class="teste">
    <label for="autorlivro" class="textboxlivro">Autor</label>
    <input type= "text" name="autorlivro" id="autorlivro" class="input" placeholder="Digite o autor do livro" required><br>
    </div></br>
    <div class="teste">
    <label for="editoralivro" class="textboxlivro">Editora</label>
    <input type="text" name="editoralivro" id="editoralivro" class="input" placeholder="Digite a editora" required><br>
    </div></br>
      
    <div class="teste">
    <label for="generolivro" class="textboxlivro">Genero</label>
    <input type="text" name="generolivro" id="generolivro" class="input" placeholder="Digite o Genero" required><br>
    </div></br>
      
     <div class="teste">
    <label for="datapublica" class="textboxlivro">Ano de publicação</label>
    <input type="date" name="datapublica" id="datapublica" class="input"  required><br>
    </div></br>

      
    <input type="submit" class="button" name='submit' value="Cadastrar livro">
    
        </form>
   </div>
    </body>
</html> 

 