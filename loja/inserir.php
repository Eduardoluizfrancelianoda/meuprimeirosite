<html>
<head>
<link rel="stylesheet" href="css/style.css">
<title>inserir Produto</title>
</head>
<body>
    <main>
<?php
require 'conexao.php';

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nome, :preco, :quantidade)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':quantidade', $quantidade);

if ($stmt->execute()) {
echo "Produto inserido com sucesso!";
header("location: listar.php");
} else {
echo "Erro ao inserir produto.";
}
?>
    </main>
</body>

</html>
