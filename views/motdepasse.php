<section class="Form  my-4 mx-5">
    <div class="Container">
            <div class ="row no-gutters">
                <div class="col-lg-5">
                    <img src="CNSCL_Mines.jpg"  class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="h3 mb-3 fw-normal">Lien de réinitialisation du mot de passe</h1>
                    <p class="text-muted">
                        Veuillez saisir votre nouveau mot de passe
                    </p>
                    <form method="Post">
                        <div class="form-row">
                                <div class="col -lg-7">
                                    <input type="email" placeholder="Entrer votre adresse mail " class="form-control my-3 p-4"  name="mail">
                                </div>
                    </div>
                    <div class="form-row">
                                <div class="col -lg-7">
                                    <input type="password" placeholder="Entrer votre mot de passe " class="form-control my-3 p-4"  name="motdepasse">
                                </div>
                    </div>
                    <div class="form-row">
                                <div class="col -lg-7">
                                    <input type="password" placeholder="Confirmer le mot de passe " class="form-control my-3 p-4"  name="nouveau_motdepasse">
                                </div>
                    </div>
                    <
                    <div class="form-row">
                                <div class="col 
                                -lg-7">
                                    <button type="button" value="reinitialiser" class="btn1 mt-3 mb-5"  name="réinitialiser">Réinitialiser</button>
                                </div>
                    </div>
                </form>
            
           </div>
        </div>
    </div>
    </section>
    <?php

    if(isset($_POST["reinitialiser"])){
        include("./core/fonctions.php");
        $motdepasse=$_POST["motdepasse"];
        $nouveau_motdepasse=$_POST["nouveau_motdepasse"];
        reinitialiser_mot_de_passe($mail,$nouveau_motdepasse);
        header("Location:connection .php");
        


    }

    ?>