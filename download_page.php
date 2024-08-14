<?php
session_start();

// Verificar se o pagamento foi confirmado
if (!isset($_SESSION['pagamento_confirmado'])) {
    // Se não, redirecionar para uma página de erro ou de pagamento
    header('Location: pagamento_erro.html');
    exit;
}

// Se o pagamento foi confirmado, exibir o link para download
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download do Arquivo</title>
</head>
<body>
    <h1>Obrigado pelo seu pagamento!</h1>
    <p>Clique no link abaixo para baixar seu arquivo:</p>
    <a href="download.php">Baixar PDF</a>
</body>
</html>