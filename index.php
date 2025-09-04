<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gênio Quizz</title>
  <link rel="shortcut icon" href="img/thumbnail_Captura_de_tela_2025-08-21_084213-removebg-preview.png" type="image/x-icon">
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    body {
     background: linear-gradient(135deg, #4facfe, #00f2fe);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      text-align: center;
      overflow-x: hidden;
    }

    h1 {
      font-family: 'Gill Sans', sans-serif;
      font-size: 6vw;
      margin-bottom: 10px;
      color: #ffffff;
    text-shadow: 2px 2px rgba(0,0,0,0.2);
    }

    h2 {
      font-family: Impact, sans-serif;
      font-size: 10vw;
      color: bisque;
      color: #ffeaa7;
    text-shadow: 2px 2px rgba(0,0,0,0.3);
    }

    .header{
      animation: transition 1s infinite alternate;
    }

    @keyframes transition {
      from { transform: translateX(100px); }
      to   { transform: translateX(0); }
    }

    img {
      max-width: 80%;
      height: auto;
      margin-bottom: 20px;
    }

    .botao {
      display: inline-block;
      margin-top: 40px;
      padding: 15px 30px;
      background: #ffeaa7;
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      text-decoration: none;
      color: #2d3436;
      font-size: 1.2rem;
      transition: all .2s ease-in-out;
    }

    .botao:hover {
      background: #ffeaa7;
    transform: scale(1.05);
    color: #2d3436;
    }
  </style>
</head>
<body>
  <img src="img/thumbnail_Captura_de_tela_2025-08-21_084213-removebg-preview.png" alt="Logo do Gênio Quizz" width="300px" height="100px">
  <h1>Seja bem-vindo ao</h1>
  <div class="header">
    <h2>Gênio Quizz</h2>
  </div>
  <a href="desafio1.php" class="botao">Começar</a>
</body>
</html>

<?php
session_start();
?>
