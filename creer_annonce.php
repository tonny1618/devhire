<!DOCTYPE html>
<html>
  <head>
   <title>Dev'Hire Agency</title>
   <metacharset="utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

    <form>
      <div class="form-group col-sm-12">
        <label for="titre">Titre de l'annonce : </label>
        <input type="text" class="form-control" name="" value="">
      </div>

      <div class="form-group col-sm-12">
        <label for="texte_annonce">Texte annonce : </label>
         <textarea rows="15" class="form-control" name=""></textarea>
      </div>

      <div class="form-group col-sm-12">
        <label for="compétences">Choix des compétences : </label>
        <input type="checkbox" class="form-control" value"">
        <input type="checkbox" class="form-control" value"">
        <input type="checkbox" class="form-control" value"">
        <input type="checkbox" class="form-control" value"">
        <input type="checkbox" class="form-control" value"">
        <input type="checkbox" class="form-control" value"">
        <input type="checkbox" class="form-control" value"">
        <input type="checkbox" class="form-control" value"">
        <input type="checkbox" class="form-control" value"">
      </div>
      
      <div class="form-group col-sm-12">
      <label for="date_debut">Date de début de mission : </label>
      <input type="date" class="form-control" value"">
      </div>

            <div class="form-group col-sm-12">
      <label for="date_fin">Date de fin de mission : </label>
      <input type="date" class="form-control" value"">
      </div>

      <div id="inscription" class="col-md-12 text-center"> 
        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Déposer</button>
      </div> 


    </form>


  </body>
</html>