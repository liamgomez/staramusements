<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="css/main.min.css">
    <script src="js/functions.js"></script>
    <script src="js/jquery-1.8.2.min.js"></script>
  </head>
  <body id="star-body" class="scroll">
    <div class="game-container game-hidden" id="game-container">
      <div class="close-overlay" onclick="closeGame()">
        <div class="close-x"></div>
      </div>
      <?php include('components/game.php') ?>
    </div>
    <div class="wrapper">
      <nav class="side-bar">
        <div id="bar-content" class="bar-content">
          <div class="branding">
          </div>
          <div class="carat">
          </div>
          <div class="insert-coin game-collapsed" id="game-switch" onclick="gameKey()">
            Insert Coin to Play
          </div>
        </div>
      </nav>
      <div id="page-content" class="page-content">
