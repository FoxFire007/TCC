<?php
$nome = $_GET["nome"];
$rm   = $_GET["rm"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
</head>
<body>
    <h1> Bem Vindo, <?php echo htmlspecialchars($nome); ?>!</h1>
    <p>Seu RM é: <?php echo htmlspecialchars($rm); ?> </p>
</body>
</html>