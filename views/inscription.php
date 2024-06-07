<?php
session_start();
include './include/header.php';
$prenomErreur = "";
$emailErreur = "";
$nomErreur = "";
$nomEntrepriseErreur = "";
$motDePasseErreur = "";


if (isset($_POST['inscrire'])) {
    if (empty($_POST['email'])) {
        $emailErreur = "Veuillez entrer votre email.";
    }

    if (empty($_POST['motdepasse'])) {
        $motDePasseErreur = "Veuillez entrer votre mot de passe.";
    }

    if (empty($_POST['nom'])) {
        $nomErreur = "Veuillez entrer votre nom.";
    }

    if (empty($_POST['prenom'])) {
        $prenomErreur = "Veuillez entrer votre prenom.";
    }

    if (empty($_POST['nom_entreprise'])) {
        $nomEntrepriseErreur = "Veuillez entrer le nom de votre entreprise.";
    }

    if (empty($emailErreur) && empty($motDePasseErreur) && empty($nomEntrepriseErreur) && empty($nomErreur) && empty($prenomErreur)) {
        include("./core/fonctions.php");
        insertion_base_de_données($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['nom_entreprise'], $_POST['motdepasse']);
    }
}
?>
<section class="Form my-4 mx-5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-5 image-container">
                <img src="./include/image2.jpg" class="img-fluid" alt="Image">
            </div>
            <div class="col-lg-7 px-5 pt-5">
                <h1 class="h3 mb-3 fw-normal">S'inscrire</h1>
                <p class="text-muted">
                    S'inscrire sur la plateforme d'intermédiation du CNSCL
                </p>
                <form method="post">
                    <div class="form-group">
                        <input type="text" placeholder="Entrer votre Nom" class="form-control my-3 p-4" name="nom" value="<?php echo isset($_SESSION['nom']) ? htmlspecialchars($_SESSION['nom']) : ''; ?>">
                        <span class="error-message"><?php echo $nomErreur; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Entrer votre prenom" class="form-control my-3 p-4" name="prenom" value="<?php echo isset($_SESSION['prenom']) ? htmlspecialchars($_SESSION['prenom']) : ''; ?>">
                        <span class="error-message"><?php echo $prenomErreur; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Entrer votre mail" class="form-control my-3 p-4" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                        <span class="error-message"><?php echo $emailErreur; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Entrer le nom de votre entreprise" class="form-control my-3 p-4" name="nom_entreprise" value="<?php echo isset($_SESSION['nom_entreprise']) ? htmlspecialchars($_SESSION['nom_entreprise']) : ''; ?>">
                        <span class="error-message"><?php echo $nomEntrepriseErreur; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Entrer un mot de passe" class="form-control my-3 p-4" name="motdepasse">
                        <span class="error-message"><?php echo $motDePasseErreur; ?></span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn1 mt-3 mb-5" name="inscrire">S'inscrire</button>
                    </div>
                    <p>Vous avez déjà un compte ? <a href="?page=connexion">Se connecter</a></p>
                </form>
            </div>
        </div>
    </div>
</section>


