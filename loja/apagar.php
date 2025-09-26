<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<title>Excluir Produto</title>
</head>
<section>
<?php
require 'conexao.php';

$id = $_GET['id'];


$sql = "DELETE FROM produtos WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
if ($stmt->execute()) {
echo "Produto excluído com sucesso!";
header("location: listar.php");
} else {
echo "Erro ao excluir produto.";
}
?>
</section>
</html>