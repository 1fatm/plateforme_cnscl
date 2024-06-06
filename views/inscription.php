
<?php
   $prenomErreur="";
   $emailErreur="";
   $nomErreur="";
   $nomEntrepriseErreur="";
   $motDePasseErreur="";
   if(isset($_POST['inscrire'])) {
        
    if(empty($_POST['email'])) {
        $emailErreur = "Veuillez entrer votre email.";
    }

    if(empty($_POST['motdepasse'])) {
        $motDePasseErreur = "Veuillez entrer votre mot de passe.";
    }
    if(empty($_POST['nom'])) {
        $nomErreur = "Veuillez entrer votre nom.";
    }
    if(empty($_POST['prenom'])) {
        $prenomErreur = "Veuillez entrer votre prenom.";
    }
    if(empty($_POST['nom_entreprise'])) {
        $nomEntrepriseErreur = "Veuillez entrer le nom de votre entreprise.";
    }

    if(empty($emailErreur) && empty($mmotDepasse) && empty($nomEntrepriseErreur) && empty($nomErreur) && empty($prenomErreur))
    {
        include("./core/fonctions.php");
        insertion_base_de_données($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['nom_entreprise'],$_POST['motDePasse']);
    }
   
}
   

?>
<section class="Form  my-4 mx-5">
    <div class="Container">
            <div class ="row no-gutters">
                <div class="col-lg-5">
                    <img src="CNSCL_Mines.jpg"  class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="h3 mb-3 fw-normal">S'inscrire</h1>
                    <p class="text-muted">
                        S'inscire sur la plateforme d'intermédiation du CNSCL 
                    </p>
                    <form method="Post">
                    <div class="form-row">
                                <div class="col -lg-7">
                                    <input type="text" placeholder="Entrer votre Nom " class="form-control my-3 p-4"  name="nom"  value="<?php echo isset($_POST['nom'])?$_POST['nom']:'';?>">
                                    <span class="error-message"><?php echo $nomErreur; ?></span> 
                                </div>
                    </div>
                    <div class="form-row">
                                <div class="col -lg-7">
                                    <input type="text" placeholder="Entrer votre prenom " class="form-control my-3 p-4"  name="prenom"  value="<?php echo isset($_Post['prenom'])?$_POST['prenom']:'';?>" >
                                    <span class="error-message"><?php echo $emailErreur; ?></span> 
                                </div>
                    </div>
                    <div class="form-row">
                                <div class="col -lg-7">
                                    <input type="email" placeholder="Entrer votre mail " class="form-control my-3 p-4"  name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                                    <div class="in"></div>
                                    <span class="error-message"><?php echo $emailErreur; ?></span> 
                                </div>
                    </div>

                    <div class="form-row">
                                <div class="col -lg-7">
                                    <input type="text" placeholder="Entrer le nom de votre entreprise" class="form-control my-3 p-4"  name="nom_entreprise" name="email" value="<?php echo isset($_POST['nom_entreprise']) ? $_POST['nom_entreprise'] : ''; ?>">
                                    <span class="error-message"><?php echo $nomEntrepriseErreur; ?></span> 
                                </div>
                    </div>
                    <div class="form-row">
                                <div class="col -lg-7">
                                    <input type="password" placeholder="Entrer un mot de passe" class="form-control my-3 p-4"  name="motDePasse" name="email" value="<?php echo isset($_POST['motDePasse']) ? $_POST['motDePasse'] : ''; ?>">
                                    <span class="error-message"><?php echo $motDePasseErreur; ?></span> 
                                </div>
                    </div>
                    
                    <div class="form-row">
                                <div class="col -lg-7">
                                    <button type="submit" value="inscrire" class="btn1 mt-3 mb-5"  name="inscrire">S'inscire</button>
                                    
                                </div>
                    </div>
                   
                         
                    <p>Vous avez  déja un  compte  <a href="?page=connexion"> Se connecter</a></p>


            
                </form>
            
           </div>
        </div>
    </div>
    </section>
   

