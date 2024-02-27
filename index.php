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
    <link rel="stylesheet" href="./styles/A_propos_de_moi.css" />

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
        <p class="sous-titre"> Développeur habile et chevronné </p>
    </section>




    <section class="propos">
        <div>
            <p class="presentation"> Je me présente :
                Jordan TALLA
            </p>

            <p class="a-propos">
                jeune designer UI/UX
                passionné du design mobile, du
                développement web et application mobile.
                Mais aussi PDG de la Jordanbrel
            </p>
        </div>
        <div>
            <img class="mon-image" src="images/jordan.jpg" alt="image">
        </div>

    </section>

    <footer class="contact">
        <?php include("contact.php"); ?>
    </footer>
</body>

</html>