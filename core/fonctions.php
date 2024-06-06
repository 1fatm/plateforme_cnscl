<?php
function connection_base_de_données()
    {
        
        $host = "localhost";
        $user = "root";
        $password = "";
        $base = "plateforme";
        $connexion = mysqli_connect($host, $user, $password, $base);
        if ($connexion->connect_error)
        {
            die("Erreur de connexion à la base de données : ". $connexion->connect_error);
        }
        else
        {
            echo "Connexion à la base de données réussie";
            return $connexion;
        }
    }
    function insertion_base_de_données($nom,$prenom,$email,$nomEntreprise,$motDePasse)
    {
        $connexion = connection_base_de_données();
        $requete="insert into entreprise (nom,prenom,email,nomEntreprise,mot_de_passe) values('$nom','$prenom','$email','$nomEntreprise','$motDePasse')";
        $result = mysqli_query($connexion, $requete);
        if (!$result)
        {
            die("Erreur lors de la requête : ". mysqli_error($connexion));
        }
        else
        {
            echo "Insertion réussie";
            header('location:?page=connexion');
        }
        mysqli_close($connexion);


    }
    function connection_plateforme($email,$motdepasse)
    {
        $connexion=connection_base_de_données();
        
            
            $sql = "SELECT * FROM entreprise WHERE email = '$email' AND mot_de_passe = '$motdepasse'";
            $resultat = mysqli_query($connexion, $sql);
            if (mysqli_num_rows($resultat) > 0) {
                header("Location: ?page=welcome");
            } else {
    
                echo "Vous n'êtes pas inscrit sur la plateforme";
            }
        }

    
    function reinitialiser_mot_de_passe($email,$motdepassenouv)
    {
        $connexion=connection_base_de_données();
        $requete = "UPDATE entreprise SET mot_de_passe='$motdepassenouv' WHERE email='$email'";
        $resultat = mysqli_query($connexion, $requete);  
        if (!$resultat) {
             die("Erreur lors de la réinitialisation du mot de passe : " . mysqli_error($connexion));
         } else {
            echo "Mot de passe réinitialisé avec succès";
            header("Location:?page=connexion");
        }
        mysqli_close($connexion);
    }



?>