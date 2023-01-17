<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/routes.php";
?>
<div class="wrap-login100 wrap-login100-controller">
    <ul class="lista-menu">
        <a href="#" class="menu-open">
           O 
        </a>
    </ul>
</div>
<div class="menu">
    <ul>
        <li><a class="menu_ul" href="#">Menu</a></li>
        <img src="/assets/imagens/Teça.jpg" class="menuimage" alt="imagemlogo"> 
        <a href="#" class="menu-close">
            ×
        </a>
           <li><a href="/home">Home</a></li> 
            <li>
              <a href="#">Catalogação</a> 
              <ul>
                <li><a href="/catalogacao/cadastro">Cadastro Livro</a></li>
                <li><a href="/catalogacao/pesquisa">Pesquisa Livro</a></li>
              </ul>
            </li>
            <li><a href="/emprestimo/emprestimo_retirada">Empréstimo</a></li> 
            <li><a href="/alunos-servidores/alunos_cadastro">Aluno/Servidores</a></li> 
            <li><a href="/configuracoes">Configurações</a></li>
            <li><a href="/index.php">Sair</a></li> 
      
    </ul>
</div>