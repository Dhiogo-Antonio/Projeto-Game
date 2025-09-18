<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <title>Resultado Final</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/thumbnail_Captura_de_tela_2025-08-21_084213-removebg-preview.png" type="image/x-icon">
</head>
<style>
    .botao{
        margin-top: 6vh;
    }
    .container2{
        margin-top: 10rem;
        font-size: 20px;
    }

    .container2 h1{
        margin-bottom: 2rem;
    }
</style>
<body>
    <div class="container2">
    <h1>🎉 Resultado Final 🎉</h1>
    
    <p><strong>Sua pontuação final foi:</strong> <?php echo $_SESSION['pontos'] ?? 0; ?> pontos</p>
    <p>Você poderia fazer no máximo <strong>60 pontos</strong>.</p>

    <a href="index.php" class="botao" >Jogar novamente</a>
    
</div>
</body>
</html>

<?php
session_destroy();
?>
