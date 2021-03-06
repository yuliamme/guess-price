
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Le Juste Prix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&amp;display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/modern-css-reset/dist/reset.min.css"
    />
    <link href="style.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="submit.js"></script>
  </head>

  <body>
    <header>
      <img alt="logo du juste prix" src="logo.jpg" />
    </header>
    <main>
      <img src="montre.jpg" alt="une belle montre de luxe" />
      <!-- <form action="guess.php" method="post"> -->
      <form method="post">
        <div class="input-group">
          <label for="guess">C'est combien ?</label>
          <span>$</span><input id="guess" name="guess" />
          <div id="feedback"></div>
        </div>
        <button type="submit" id ="submit">Valider</button>
      </form>
    </main>
  </body>
</html>
