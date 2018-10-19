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

    <form class="col-sm-6 col-sm-push-3">
      <legend>Contact</legend>
      <div class="form-group col-sm-12">
        <div>
          <label for="Nom">Nom/raison sociale : </label>
          <input type="text" class="form-control" name="" value="">
        </div>
      </div>

       <div class="form-group col-sm-12">
        <div>
          <label for="Prenom">Prénom : </label>
          <input type="text" class="form-control" name="" value="">
        </div>
      </div>

       <div class="form-group col-sm-12"> 
          <div>
            <label for "email">Email : </label>
            <input type="email" class="form-control" name"" value"">
          </div>
        </div>

      <div class="form-group col-sm-12">
        <div>
          <label for="sujet">Sujet : </label>
          <select name="sujet" size="1">
            <option value="">Sujet...</option>
            <option value="">J'ai un problème concernant ma mission...</option>
            <option value="">J'ai une question sur mon bulletin de paie...</option>
            <option value="">J'ai été absent....</option>
            <option value="">J'ai un problème de connexion à mon compte...</option>
            <option value="">Je n'arrive pas à actualiser mon CV...</option>
            <option value="">Autres...</option>
          </select>
        </div>
     </div>

      <div class="form-group col-sm-12">
        <div>
          <label for="message">Message : </label>
          <textarea rows="15" class="form-control" name=""></textarea>
        </div>
      </div>

      <div class="form-group col-sm-12">
        <div id="send" class="col-md-12 text-center"> 
          <button id="send" name="send" class="btn btn-primary">Envoyer</button>
        </div>
      </div>
  
    </form>
  </body>
</html>

