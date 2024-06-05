<section class="Form  my-4 mx-5">
    <div class="Container">
            <div class ="row no-gutters">
                <div class="col-lg-5">
                    <img src="CNSCL_Mines.jpg"  class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="h3 mb-3 fw-normal">Se connecter</h1>
                    <p class="text-muted">Connectez-vous à votre compte pour accéder à votre espace personnel</p>
                    <form method="Post">
                    <div class="form-row">
                                <div class="col -lg-7">
                                    <input type="email" placeholder="Entrer votre mail " class="form-control my-3 p-4"  name="email">
                                </div>
                    </div>

                    <div class="form-row">
                                <div class="col -lg-7">
                                    <input type="password" placeholder="Entrer votre mot de passe " class="form-control my-3 p-4" name="motdepasse">
                    </div>
                    
                    <div class="form-row">
                                <div class="col -lg-7">
                                    <button type="submit" value="Se connecter" class="btn1 mt-3 mb-5" name="se_connecter">Se connecter</button>
                                </div>
                    </div>
                                
                    <a href="?page=motdepasse
                    ">Mot de passe oublié </a>
                    <p>Vous n'avez pas de compte <a href="?page=inscription"> S'inscrire</a></p>

            
                </form>
            
           </div>
        </div>
    </div>
    </section>
    <?php 
      
      if(isset($_POST['se_connecter']))
      {
        include("./core/fonctions.php");
        connection_plateforme($_POST['email'],$_POST['motdepasse']);
       
      }
      
    
    ?>