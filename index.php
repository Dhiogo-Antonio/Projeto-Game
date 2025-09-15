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
      color: #f6d365;
      text-shadow: 2px 2px rgba(0,0,0,0.3);
    }

    .header {
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

   
    .botoes {
      display: flex;
      gap: 10rem;
      margin-top: 40px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .botao {
      display: inline-block;
      padding: 15px 40px;
      background: linear-gradient(135deg, #ffeaa7, #f6d365);
      border-radius: 50px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
      text-decoration: none;
      color: #2d3436;
      font-size: 1.3rem;
      font-weight: bold;
      letter-spacing: 1px;
      transition: all 0.3s ease-in-out;
      position: relative;
      overflow: hidden;
    }

    .botao::before {
      content: "";
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: rgba(255,255,255,0.4);
      transform: skewX(-30deg);
      transition: 0.5s;
    }

    .botao:hover::before {
      left: 100%;
    }

    .botao:hover {
      transform: scale(1.08);
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }

    @media (max-width: 600px) {
      .botoes {
        flex-direction: column;
      }
      .botao {
        font-size: 1rem;
        padding: 12px 25px;
      }
    }
  </style>
</head>
<body>
  <img src="img/thumbnail_Captura_de_tela_2025-08-21_084213-removebg-preview.png" alt="Logo do Gênio Quizz" width="300px" height="100px">
  <h1>Seja bem-vindo ao</h1>
  <div class="header">
    <h2>Gênio Quizz</h2>
  </div>

  <div class="botoes">
    <a href="desafio1.php" class="botao">Começar</a>
    <a href="tutorial.php" class="botao">Tutorial</a>
  </div>
</body>
</html>


<?php
session_start();
?>
