<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <title>Resultado Final</title>
</head>
<style>
    div{
        background-color: bisque;
        border-radius: 10px;
    width: 700px;
    height: 280px;
    
    }
    body{
        display: flex;
        justify-content: center;
        font-size: 35px;
    }
    p{
        margin-top:45px;
    }
    h1{
        font-size: 40px;
        margin-bottom: 90px;
    }
    a{
        align-items: center;
        justify-self: center;
        display: flex;
        margin-top: 40px;
        text-decoration: none;
        color: #8bd3ec;
       background-color: white;
        transition: all .2s ease-in-out;
        width: 175px;
        border-radius: 7px;
        font-size: 25px;
        text-align: center;
        box-shadow: 5px 5px #24a4bc;
    }
    a:hover{
       background: aliceblue;
      transform: scale(1.05);
    
    }
</style>
<body>
    
    <h1>🎉 Resultado Final 🎉</h1>
    <div>
    <p><strong>Sua pontuação final foi:</strong> <?php echo $_SESSION['pontos'] ?? 0; ?> pontos</p>
    <p>Você poderia fazer no máximo <strong>60 pontos</strong>.</p>

    <a href="index.php">Jogar novamente</a>
</div>
</body>
</html>

<?php
session_destroy();
?>
