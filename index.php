<!DOCTYPE html>
<html>
   <head>
      <title>Dev'Hire Agency</title>
      <metacharset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
      <link rel="stylesheet" href="asset/hover.css"/>
      <link rel="stylesheet" href="asset/istyle.css"/>
   </head>
   <body>
      <header>
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="nav navbar-nav navbar-header">
                  <a href="#" class="nav navbar-nav navbar-left"><img src="asset/images/logo.png" alt="logo"></a>
               </div>
               <ul class="nav navbar-nav">
                  <li><a href='#'>Accueil</a></li>
                  <li><a href='#'>Espace Candidat</a></li>
                  <li><a href='#'>Espace Entreprise</a></li>
                  <li><a href='#'>Recherche</a></li>
                  <li><a href='#'>Contact</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href='#'><span class='glyphicon glyphicon-log-in'></span> Connectez-vous </a></li>
               </ul>
            </div>
         </nav>
      </header>
      <div class="-container-fluid" id="blocksearchbar">
         <!-- Search Bar -->
         <div class="col-md-6 col-sm-12 col-xs-12" id="searchbar">
            <form class="navbar-form" role="search">
               <div class="input-group add-on">
                  <input class="form-control inputsearch" placeholder="Recherche" name="srch-term" id="srch-term" type="text">
               </div>
            </form>
         </div>
         <div class="col-md-6 col-sm-12 col-xs-12" id="ville">
            <form class="navbar-form" role="search">
               <div class="input-group add-on" >
                  <input class="form-control  inputsearch" placeholder="Ville" name="ville" type="text">
                  <div class="input-group-btn" >
                     <button class="btn btn-default" id="boutonRecherche" type="submit"><i class="glyphicon glyphicon-arrow-right accueil"></i></button>
                  </div>
               </div>
            </form>
         </div>
      </div>
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
        <div class="col-md-6 boutonCV">
        <button type="button" class="btn btn-secondary btn-lg hvr-bounce-to-right">Envoyer votre CV</button>
      </div>
      
      <div class="col-md-6 boutonDeposer">
        <button type="button" class="btn btn-secondary btn-lg hvr-bounce-to-right">Déposer votre annonce</button>
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