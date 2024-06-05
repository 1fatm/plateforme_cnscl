
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
                                    <input type="text" placeholder="Entrer votre Nom " class="form-control my-3 p-4"  name="nom">
                                </div>
                    </div>
                    <div class="form-row">
                                <div class="col -lg-7">
                                    <input type="text" placeholder="Entrer votre prenom " class="form-control my-3 p-4"  name="prenom">
                                </div>
                    </div>
                    <div class="form-row">
                                <div class="col -lg-7">
                                    <input type="email" placeholder="Entrer votre mail " class="form-control my-3 p-4"  name="email">
                                </div>
                    </div>

                    <div class="form-row">
                                <div class="col -lg-7">
                                    <input type="text" placeholder="Entrer le nom de votre entreprise" class="form-control my-3 p-4"  name="nom_entreprise">
                                </div>
                    </div>
                    <div class="form-row">
                                <div class="col -lg-7">
                                    <input type="password" placeholder="Entrer un mot de passe" class="form-control my-3 p-4"  name="motDePasse">
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
    <?php
    if(isset($_POST["inscrire"])){

    include("./core/fonctions.php");

    insertion_base_de_données($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['nom_entreprise'],$_POST['motDePasse']);
   
    


    


    
    }
    

    ?>

