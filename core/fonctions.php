<?php
function connection_base_de_données() {
    $host = "localhost";
    $user = "root";
    $password = "";
    $base = "plateforme";
    $connexion = mysqli_connect($host, $user, $password, $base);
    if (!$connexion) {
        die("Erreur de connexion à la base de données : " . mysqli_connect_error());
    }
    return $connexion;
}

function insertion_base_de_données($nom, $prenom, $email, $nomEntreprise, $motDePasse) {
  $_SESSION['nom']=$nom;
  $_SESSION['prenom']=$prenom;
  $_SESSION['nom_entreprise']=$nomEntreprise;
 // $_SESSION['mot_de_passe']=$motDePasse;
  

    $connexion = connection_base_de_données();
    
    if (mailexistant($email)) {
        $_SESSION['message'] = 'Cette adresse mail existe déjà.';
        header('Location: ?page=inscription');
        exit;
        
    } else {
        $motDePasseHache = password_hash($motDePasse, PASSWORD_DEFAULT);
        $requete = "INSERT INTO entreprise (nom, prenom, email, nomEntreprise, mot_de_passe) VALUES ('$nom', '$prenom', '$email', '$nomEntreprise', '$motDePasseHache')";
        $result = mysqli_query($connexion, $requete);
        if (!$result) {
            die("Erreur lors de la requête : " . mysqli_error($connexion));
        } else {
            $_SESSION['message'] = 'Inscription réussie.';
            header('Location: ?page=connexion');
            exit;
            
        }
        
    }
   
}

function connection_plateforme($email, $motdepasse) {
    $_SESSION['email']=$email;

    $connexion = connection_base_de_données();
    $sql = "SELECT mot_de_passe FROM entreprise WHERE email = '$email'";
    $resultat = mysqli_query($connexion, $sql);
    
    if ($resultat && mysqli_num_rows($resultat) > 0) {
        $row = mysqli_fetch_assoc($resultat);
        $motdepasse_hache = $row['mot_de_passe'];
        if (password_verify($motdepasse, $motdepasse_hache)) {
            
            header("Location: ?page=welcome");
            exit();
        } else {
            $_SESSION['message'] = 'Mot de passe incorrect.';
        }
    } else {
        $_SESSION['message'] = 'Vous n\'êtes pas inscrit sur la plateforme.';
    }
    header("Location: ?page=connexion");

    exit;
}

function reinitialiser_mot_de_passe($email, $motdepassenouv) {
    $connexion = connection_base_de_données();
    $motDePasseNouvHache = password_hash($motdepassenouv, PASSWORD_DEFAULT);
    $requete = "UPDATE entreprise SET mot_de_passe='$motDePasseNouvHache' WHERE email='$email'";
    $resultat = mysqli_query($connexion, $requete);
    if (!$resultat) {
        die("Erreur lors de la réinitialisation du mot de passe : " . mysqli_error($connexion));
    } else {
        $_SESSION['message'] = 'Mot de passe réinitialisé avec succès.';
        header('Location:?page=connexion');
        exit();
       
        
    }
 
    
}

function mailexistant($email) {
    $connexion = connection_base_de_données();
    $email = mysqli_real_escape_string($connexion, $email);
    $sql = "SELECT * FROM entreprise WHERE email = '$email'";
    $resultat = mysqli_query($connexion, $sql);
    mysqli_close($connexion);
    return (mysqli_num_rows($resultat) > 0);
}


?>
