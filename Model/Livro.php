<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Model.php';

class Livro extends Model
{
 protected static $tableName = 'livro';
 protected static $columns = [
  'cadastropor,
   idlivro,
   titulolivro,
   autorlivro,
   editoralivro, 
   generolivro, 
   estoquelivro,
   datapublica'
  ];
  
  public function select($id)
  {
    $sqlLivro = "SELECT * FROM livro WHERE idlivro = :idlivro";
    $stmt = $pdo->prepare($sqlLivro);
    $dadosLivro = array(
      ':idlivro' => $_POST['idlivro']
    );
    $stmt->execute($dadosLivro);
    $result = $stmt->fetchAll();
    $estoqueLivro = $result[0]['estoquelivro'];
    if ($stmt->rowCount() > 0) {
      return $estoqueLivro;
    } else {
      return $result;
    }
  }

  public function insert()
  {
    $sql = "INSERT INTO livro (cadastropor ,idlivro,titulolivro,autorlivro,editoralivro, generolivro, estoquelivro, datapublica ) VALUES (:cadastropor,:idlivro,:titulolivro,:autorlivro,:editoralivro,:generolivro,1,:datapublica)";

    $stmt = $pdo->prepare($sql);
    $dados = array( //organizar as informacoes sql
      ':cadastropor' => $cadastropor, 
      ':idlivro' => $idlivro,
      ':titulolivro' => $titulolivro, 
      ':autorlivro' => $autorlivro,
      ':editoralivro' => $editoralivro,
      ':generolivro' => $generolivro,
      ':datapublica' => $datapublica
    );
    $insert = $smt->execute($dados);
    return $insert ? true : false;
  }

  public function update($idlivro, $estoquelivro)
  {
    $sql = "UPDATE livro SET estoquelivro = :estoquelivro WHERE idlivro = :idlivro";
    $stmt = $pdo->prepare($sql);
    $dados = array(
      ':idlivro' => $idlivro,
      ':estoquelivro' => strval($novoestoquelivro)
    );
    $updated = $stmt->execute($dados);

    return $updated ? true : false;
  }
}
