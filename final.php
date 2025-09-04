<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado Final</title>
</head>
<body>
    <h1>🎉 Resultado Final 🎉</h1>
    <p><strong>Sua pontuação final foi:</strong> <?php echo $_SESSION['pontos'] ?? 0; ?> pontos</p>
    <p>Você poderia fazer no máximo <strong>60 pontos</strong>.</p>

    <a href="index.php">Jogar novamente</a>
</body>
</html>

<?php
session_destroy();
?>
