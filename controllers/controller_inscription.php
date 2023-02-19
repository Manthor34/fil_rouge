<?php
    // On inclut notre connecteur à la base de données
    include('../models/connect.php');

    include('../views/view_connexion.php');
   
    // On entre dans la boucle seulement lors de l’envoi du formulaire
    if(!empty($_POST["form_inscription"])) {
        // On recherche si l'adresse email existe déjà en BDD
        $select = $db->prepare("SELECT email_utilisateur FROM utilisateur WHERE email_utilisateur=:email_utilisateur;");
        $select->bindParam(":email_utilisateur", $_POST["email"]);
        $select->execute();
        if(empty($select->fetch(PDO::FETCH_COLUMN))) {
            // Si ce n'est pas le cas, on vient l'insérer
            $insert = $db->prepare("INSERT INTO utilisateur(email_utilisateur, mot_de_passe_utilisateur, nom_utilisateur, prenom_utilisateur)
                                    VALUES(:email_utilisateur, :mot_de_passe_utilisateur, :nom_utilisateur, :prenom_utilisateur);");
            $insert->bindParam(":email_utilisateur", $_POST['email']);
            $insert->bindParam(":nom_utilisateur", $_POST['surname']);
            $insert->bindParam(":prenom_utilisateur", $_POST['name']);
            // Nous hachons notre mdp avec l'algo BCRYPT et un coût algorithmique (par défaut à 10)
            $user_password = password_hash($_POST['password'], PASSWORD_BCRYPT, array("cost" => 12));
            $insert->bindParam(":mot_de_passe_utilisateur", $user_password);
            if($insert->execute()) {
                // Si aucune erreur ne se produit, on propose de se connecter
                die('<p style=”color: green;”>Inscription réussie.</p><a href="connexion.php">Se connecter.</a>');
                header("Location: ../views/view_index.php");
            }
            die('<p style=”color: red;”>Inscription échouée.</p><a href="inscription.php">Réessayer.</a>');
        }
    }
?>
