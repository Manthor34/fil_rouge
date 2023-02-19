
<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset=UTF-8>
    <meta http-equiv=X-UA-Compatible content=IE=edge>
    <meta name=viewport content=width=device-width, initial-scale=1.0>
    <title>Shashin</title>
    <link rel="icon" href="assets/kisspng-shutter-computer-icons-photography-clip-art-shutter-5ade5ec07bbe00.4334029815245226885069.png"/>
    <link rel="stylesheet" href="../style/style.css">
    <script src="../scripts/script.js" defer></script>
    <script src="../scripts/modal.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
</head>
<body class="body">

    <nav class="nav">
        <div class="navLeft">
            <img src="../assets/logo_shashin.png" class="logo">
        </div>
        <div class="navRight">    
            <a class="navButton" href="view_populaire.php">Populaire</a>
            <a class="navButton" href="view_index.php">Créer</a>
            <a class="navButton" href="view_collection.php">Collection</a>
            <div class="bg-login">
                <img src="../assets/user-profile-filled-svgrepo-com 1.svg" class="login">
            </div>
        <div>

    </nav>

    <div class="modal">
        <p>Deconnexion</p>
    </div>

    <section class="editor">
        <div class="butLeft">
            <input type="file" id="file-input" style="display: none;"/>
            <label for="file-input" class="buttonLeft">Selectionner le fichier</label>
            <button onclick="download()" class="buttonLeft">Télécharger</button>
        </div>
        <div class="canvasContainer">
            <canvas id="canvas"></canvas>
        </div>
        <div class="butRight">
            <button onclick="grayscale()" class="buttonRight">Grayscale</button>
            <button onclick="sepia()" class="buttonRight">Sepia</button>
            <button onclick="invert()" class="buttonRight">Invert</button>
        </div>
    </section>
    
</body>
</html>
