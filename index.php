<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hangman</title>

  <!-- Bootstrap CSS Sheet -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- External CSS Stylesheet -->
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="wrapper">
    <h1 class="jumbotron">Hangman</h1>
    <p>Use the alphabet below to guess the word, or click hint to get a clue. </p>
  </div>
  <div class="wrapper">
    <div id="buttons">
      <ul id="alphabet"></ul>
    </div>
    <p id="catagoryName"></p>
    <div id="hold">
      <ul id="my-word"></ul>
    </div>

    <canvas id="stickman">This Text will show if the Browser does NOT support HTML5 Canvas tag</canvas>
    <!-- <img class="images" id="happy" src="img/ohYes.png" alt="Oh Yes when you win">
    <img class="images" id="sad" src="img/ohNo.png" alt="Oh No when you lose"> -->
    <p id="mylives">You have 10 lives</p>
    <p id="clue"></p>
    <div class="container">
      <button id="hint">Hint</button>
      <button id="reset">Play again</button>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer-text">
    <p class="footerpara">CST336 Internet Programming. Singh 2020&copy;</p>
  </footer>
  <!-- External JS script file -->
  <script src="js/master.js"></script>

</body>
</html>
