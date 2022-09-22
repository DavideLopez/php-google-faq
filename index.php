<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>GOOGLE FAQ</title>
</head>
<body>

  <header>
      <div class="logo-container">

          <a href="#" class="google-logo"><img src="https://logos-download.com/wp-content/uploads/2016/02/Google_Logo_2015.png" alt="logo"></a>
          <h4 class="title">Privacy e Termini</h4>
      </div>


      <?php
        $nav = [
            'Introduzione',
            'Norme sulla privacy',
            'Termini di servizio',
            'Tecnologie',
            'Domande frequenti',
        ];
        ?>
        <ul class="nav-bar">
            <?php
            foreach ($nav as $value) {
            ?>
                <li><a class="header-navigation" href="#"><?= $value ?></a></li>
            <?php
            }
            ?>
        </ul>


  </header>
    
</body>
</html>