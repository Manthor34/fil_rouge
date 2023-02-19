<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shashin</title>
    <link rel="icon" href="assets/kisspng-shutter-computer-icons-photography-clip-art-shutter-5ade5ec07bbe00.4334029815245226885069.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/connexion.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">
    <script src="../scripts/modal_inscription.js" defer></script>
</head>
<body>

    <section class="container">
        <div class="sliding-background">
            <img src="../images/Rectangle 42.png">
            <img src="../images/Rectangle 43.png">
            <img src="../images/Rectangle 44.png">
            <img src="../images/Rectangle 45.png">
            <img src="../images/Rectangle 46.png">
            <img src="../images/Rectangle 47.png">
            <img src="../images/Rectangle 48.png">
            <img src="../images/Rectangle 49.png">
            <img src="../images/Rectangle 50.png">
            <img src="../images/Rectangle 51.png">
            <img src="../images/Rectangle 52.png">
            <img src="../images/Rectangle 53.png">
            <img src="../images/Rectangle 54.png">
            <img src="../images/Rectangle 55.png">
            <img src="../images/Rectangle 56.png">
            <img src="../images/Rectangle 57.png">
            <img src="../images/Rectangle 58.png">
            <img src="../images/Rectangle 59.png">
        </div>
    </section>
    <div class="white"></div>

    <section class="bienvenue">
        <div>
            <p>Bienvenue sur</p>
            <img src="../assets/logo_shashin.png" class="logo">
        </div>
        <p class="para">Le site idéal pour</p>
        <p class="diff a">éditer</p>
        <p class="diff b">partager</p>
        <p class="diff c">stocker</p>
        <p class="para">vos photos</p>
        <div class="buttons">
            <a class="inscrit">Inscription</a>
            <a class="connecte">Connexion</a>
        </div>
    </section>

    <section class="inscription">
        <img src="../assets/cross.svg" class="cross crossIns">
        <form method="post" action="../controllers/controller_inscription.php" class="form-inscription">
            <label for="surname">Nom</label>
            <input type="text" name="surname">
            <label for="name">Prénom</label>
            <input type="text" name="name">
            <label for="email">Email</label>
            <input type="text" name="email">
            <label for="password">Mot de passe</label>
            <input type="password" name="password">
            <label for="confirm-password">Confirmer mot de passe</label>
            <input type="password" name="confirm-password">
            <input type="submit" value="Inscription" class="envoyer">
            <input type="hidden" value="1" name="form_inscription">
        </form>
    </section>

    <section class="connexion">
        <img src="../assets/cross.svg" class="cross crossCon">
        <form method="post" action="../controllers/controller_connexion.php" class="form-connexion">
            <label for="email">Email</label>
            <input type="text" name="email">
            <label for="password">Mot de passe</label>
            <input type="password" name="password">
            <input type="submit" value="Connexion" class="envoyer">
            <input type="hidden" value="1" name="form_connexion">
        </form>
    </section>
    
</body>
</html>