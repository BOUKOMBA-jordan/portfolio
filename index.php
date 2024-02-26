<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Acceuil</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Serif%3A400%2C700" />
        <link rel="stylesheet" href="./styles/menu.css" />
        <link rel="stylesheet" href="./styles/logo.css" />
        <link rel="stylesheet" href="./styles/index.css" />
        <link rel="stylesheet" href="./styles/contact.css" />
    </head>

    <body>

        <header>
            <?php include("logo.php"); ?>
            <?php include("menu.php"); ?>
        </header>

        <section class="contenue">
            <div class="mot-bienvenue">
                <span>Hello Welcome</span>
            </div>
            <p class="sous-titre">Des développeurs habilent et chevronnés </p>
        </section>

        <footer class="contact">
            <?php include("contact.php"); ?>
        </footer>
    </body>

</html>