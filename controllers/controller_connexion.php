<?php
    include('../models/connect.php');

    include('../views/view_connexion.php');

    if(!empty($_POST["form_connexion"])) {
        $select = $db->prepare("SELECT * FROM utilisateur WHERE email_utilisateur=:email_utilisateur;");
        $select->bindParam(":email_utilisateur", $_POST["email"]);
        $select->execute();
        // La fonction rowCount() permet de donner le nombre de lignes pour une requête
        if($select->rowCount() === 1) {
            $user = $select->fetch(PDO::FETCH_ASSOC);
            // Permet de vérifier le hash par rapport au mot de passe saisi
            if(password_verify($_POST["password"], $user['mot_de_passe_utilisateur']))
            // On affecte les données de notre utilisateur dans notre super globale $_SESSION
            $_SESSION['utilisateur'] = $user;
            // Le header permet d'effectuer une requête HTTP, la valeur Location permet la redirection vers un autre fichier
            header("Location: ../views/view_index.php");
        } else {
            unset($_SESSION['utilisateur']);
            header("Location: ../views/view_connexion.php");
        }
    }
?>