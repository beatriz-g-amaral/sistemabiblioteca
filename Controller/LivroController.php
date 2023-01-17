<?php 
require_once '../Model/Livro.php';
class LivroController {

  public function verificaEstoque() {
    
    $idlivro = $_POST['idlivro'];
    $cadastropor = $_POST['cadastropor'];
    $titulolivro = $_POST['titulolivro'];
    $autorlivro = $_POST['autorlivro'];
    $editoralivro = $_POST['editoralivro'];
    $generolivro = $_POST['generolivro'];
    $datapublica = $_POST['datapublica'];
    
    $consulta = Livro::select($idLivro);

    if (!$consulta){
      $insert = Livro::insert(
        $cadastropor,
        $idlivro,
        $titulolivro, 
        $autorlivro,
        $editoralivro,
        $generolivro,
        $datapublica
      );
      
      if ($insert) {        
        header("Location:index_logado.php?msgSucesso=Cadastro realizado com sucesso!");
      } else {
        header("Location: /cadastro_livro.php?msgErro=Erro");
    }
      
    } else {
      $novoestoquelivro = $consulta + 1;
      $update = Livro::update($idlivro, $novoestoquelivro);
      if ($updated) {        
        header("Location: /cadastro_livro.php?msgSucesso=Edição realizado com sucesso!");
      } else {
        header("Location: /cadastro_livro.php?msgErro=Erro");
    }
      
  }
    
 require_once '../View/catalogacao/cadastro_livro.php';}
}
