<?php require ("head.php") ?>
<?php require("navbar.php")?>
<?php require('searchbar.php')?>  
       
      <div id="blocavecimages">
      
      <div id="dernieresAnnonces" class="container-fluid">
         <h2>Dernières Annonces</h2>
         <div class="col-md-3 blocannonce">
            <h4>Titre de l'annonce</h4>
            <h5>Ville</h5>
            <p>Résumé</p>
            <p class="text-right"><a href="#">Voir le descriptif <span class=" glyphicon glyphicon-arrow-right"></span></a></p>
         </div>
         <div id="blocannonces">
            <div class="col-md-3 col-md-offset-1 blocannonce">
               <h4>Titre de l'annonce</h4>
               <h5>Ville</h5>
               <p>Résumé</p>
               <p class="text-right"><a href="#">Voir le descriptif <span class=" glyphicon glyphicon-arrow-right"></span></a></p>
            </div>
            <div class="col-md-3 col-md-offset-1 blocannonce border">
               <h4>Titre de l'annonce</h4>
               <h5>Ville</h5>
               <p>Résumé</p>
               <p class="text-right"><a href="#">Voir le descriptif <span class=" glyphicon glyphicon-arrow-right"></span></a></p>
            </div>
         </div>
      </div>


      <div id="envoyer" class="container-fluid">
        <div class="col-md-6 col-sm-6 boutonCV">
        <a href="formulairecv.php"><button type="button" class="btn btn-secondary btn-lg hvr-bounce-to-right">Envoyer votre CV</button></a>
      </div>
      
      <div class="col-md-6 col-sm-6 boutonDeposer">
        <a href="formulaire_client.php"><button type="button" class="btn btn-secondary btn-lg hvr-bounce-to-right">Déposer votre annonce</button></a>
      </div>
    </div>
  </div>
  
    <footer class="container-fluid">
  <div class="row">
    <div class="col-md-5">
      <h2> Liens utiles </h2>
      <p><a href="#">Liens 1</a></p>
      <p><a href="#">Liens 2</a></p>
      <p><a href="#">Liens 1</a></p>
    </div>
  </div>
  <div class="row">
    <p class="text-center"> © Dev'Hire</p>
  </div>
    </footer>
   </body>
</html>