<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Jouer</title>
</head>

<body>
    <?php
    require('connexion.php');
    ?>
    <header class="container">
    <h1>Mini jeu de combats</h1>
    <h6>Jouer</h6>
        <nav class="nav">
            <?php
            require ('menu.php');
            ?>
        </nav>
    </header>

    <main class="container">
     <div class="row">
        <div class="col-12 mt-5">
        </div>
    </div>
    </main>

    <footer class="container">

    </footer>
</body>
</html>