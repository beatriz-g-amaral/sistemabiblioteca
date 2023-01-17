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
    
    <h4 class="textboxtitulo">Cadastro do Estudante</h4>
    <div class="teste"style="margin:32px;">

      <div class="teste">
    <label for="nome_estudante" class="textboxlivro">Nome</label>
    <input type="text" name="nome_estudante" id="nome_estudante" class="input" placeholder="Digite o nome do aluno" required><br>
    </div></br>

    <div class="teste">
    <label for="numero_matricula" class="textboxlivro">Número de Matricula</label>
    <input type="text" name="numero_matricula" id="numero_matricula" class="input" placeholder="Digite o número de Matricula" required><br>
    </div> </br>
    
    <div class="teste">
    <label for="turma" class="textboxlivro">Turma</label>
    <input type="text" name="turma" id="turma" class="input" placeholder="Escolha a turma" required><br>
    </div></br>
  
     <div >
    <label for="turno" class="textboxlivro" style="align-content: flex-start;display: flex;">Turno</label> </br>
    <input type="checkbox" name="manha" id="turno" class="input">Manhã
    <input type="checkbox" name="tarde" value="on" >Tarde
    <input type="checkbox" name="noite" value="on">Noite
    </div></br>

    <input type="submit" class="button" name='submit' value="Cadastrar Estudante">
    
        </form>
   </div>
    </body>
</html> 

 