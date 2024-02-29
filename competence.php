<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Serif%3A400%2C700" />
    <link rel="stylesheet" href="./styles/menu.css" />
    <link rel="stylesheet" href="./styles/logo.css" />
    <link rel="stylesheet" href="./styles/index.css" />
    <link rel="stylesheet" href="./styles/contact.css" />
    <link rel="stylesheet" href="./styles/A_propos_de_moi.css" />
    <link rel="stylesheet" href="./styles/competence.css" />
</head>

<body>
    <header>
        <?php include("logo.php"); ?>
        <?php include("menu.php"); ?>
    </header>


    <section>
        <div class="titre_section1">1- Mise en place d&#39;un environnement de travail Dev</div>
        <div class="frame-1">
            <div class="frame-paragraphe-1">
                <p class="environnement_travail">
                    - Installation d'un IDE
                    <br>
                    - Versionning de code source (Git)
                    <br>
                    - Utilisation d'outils de gestion de projet
                    <br>
                    - Utilisation d'outils de bureautique
                </p>
            </div>
            <img class="image-1" src="./images/image-1.png" />
        </div>
      
    </section>

    <section>
    <div class="titre_section1">  2- Maquetter des applications web
            <br/>
             et mobile</div>
             <div class="image-2">
             <img class="image-1" src="./images/image-2.png">
             </div>
    </section>

    <section>
    <div class="titre_section1"> 3- Réalisation d&#39;un site web statique 
                <br/>
                et dynamique </div>
                <p class="environnement_travail">
               Languages de programmation
               <br>
               Framework 
                </p>
             <div class="image-2">
             <img class="image-1" src="./images/image-3.png">
             </div>
    </section>





    <footer class="contact">
        <?php include("contact.php"); ?>
    </footer>
</body>

</html>