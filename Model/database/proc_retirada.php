// <?php
// require_once $_SERVER['DOCUMENT_ROOT'] . "/Infrastructure/conexao.php"; 

// if (!empty($_POST)) { // CHEGOU AS INFORMACOES e irá inserir no banco
//   try {
//     $idlivro = $_POST['idlivro'];
//     $sqlLivro = "SELECT * FROM livro WHERE idlivro = :idlivro "; //and titulolivro = :titulolivro
//     $stmt = $pdo->prepare($sqlLivro);
//     $dadosLivro = array(
//       ':idlivro' => $_POST['idlivro'],
//       // ':titulolivro' => $_POST['titulolivro']
//     );
//     $stmt->execute($dadosLivro);
//     $result = $stmt->fetchAll();
//     $estoquelivro = $result[0]['estoquelivro'];
//     if ($stmt->rowCount() > 0) {
//       $novoestoquelivro = $estoquelivro - 1;
//       $sql = "UPDATE livro SET estoquelivro = :estoquelivro WHERE idlivro = :idlivro";
//       $stmt = $pdo->prepare($sql);
//       $dados = array(
//         ':idlivro' => $_POST['idlivro'],
//         ':estoquelivro' => strval($novoestoquelivro)
//       );
//       $updated = $stmt->execute($dados);
//       if ($updated) {    
//         $idusuario = $_POST['idusuario'];
//         $sqlServidor = "SELECT * FROM servidor WHERE idservidor  = :idservidor  "; //and titulolivro = :titulolivro
//         $stmt = $pdo->prepare($sqlServidor);
//         $dadosServidor = array(
//           ':idservidor' => $_POST['idservidor']
//         );
//           $stmt->execute($$dadosServidor);
//           $result2 = $stmt->fetchAll();
//           if ($stmt->rowCount() > 0) {
//             $sqlRetirada = "INSERT INTO retirada (retiradopor,idservidor,idlivro , titulolivro,dataretirada,datadevolucao) VALUES (:nome,:idservidor,:idlivro,:titulolivro,:dataretirada,:datadevolucao)";
//             $stmt = $pdo->prepare($sqlRetirada);
//             $dadosRetirada = array(
//               ':nome' => $_POST['nome'],
//               ':idservidor' => $_POST['idservidor'],
//               ':idlivro' => $_POST['idlivro'],
//               ':titulolivro' => $_POST['titulolivro'],
//               ':dataretirada' => $_POST['dataretirada'],
//               ':datadevolucao' => $_POST['datadevolucao']
//             );
//             $updatedretirada = $stmt->execute($dadosRetirada); 
//           if ($updatedretirada) {   
//         header("Location: /cadastro_livro.php?msgSucesso=Edição realizado com sucesso!");
        
//           }else {
//         header("Location: /cadastro_livro.php?msgErro=Erro");
//       }}else{
//                header("Location: /cadastro_livro.php?msgErro=Erro");
//       }}}}
// catch (PDOException $e) {
//     die($e->getMessage());
//     header("Location: index.php?msgErro=Falha ao cadastrar...");
//   }
// } else {
//   header("Location: index.php?msgErro=Erro de acesso.");
// }
// die();
