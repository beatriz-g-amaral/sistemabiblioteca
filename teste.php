<?php 
require_once 'Model/Livro.php';

 $cadastropor = $_POST['cadastropor'];
 $idlivro = $_POST['idlivro'];
 $titulolivro = $_POST['titulolivro'];
 $autorlivro = $_POST['autorlivro'];
 $editoralivro = $_POST['editoralivro'];
 $generolivro = $_POST['generolivro'];
 $estoquelivro = '1';
 $datapublica = $_POST['datapublica'];

$livro = new Livro(['cadastropor'=> $cadastropor ,'idlivro' => $idlivro, 'titulolivro' => $titulolivro,'autorlivro' => $autorlivro, 'editoralivro' =>  $editoralivro, 'generolivro' => $generolivro, 'estoquelivro' => $estoquelivro, 'datapublica' => $datapublica]);
print_r($livro);
$teste = $livro->get('idlivro');
echo Livro::select($teste);
?>