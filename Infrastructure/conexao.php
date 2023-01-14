<?php
$endereco = 'kesavan.db.elephantsql.com';
$banco = 'rrxdxjlq';
$usuario = 'rrxdxjlq';
$senha = 'b_ALNJHVKf9imY-9BgDXEdD_i-bN-G6m';

try {
  $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
 // echo "Conectado no banco de dados!!!";

} catch (PDOException $e) {
  echo "Falha ao conectar ao banco de dados. <br/>";
  die($e->getMessage());
}

?>