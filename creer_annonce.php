<?php require ("head.php") ?>
<?php require("navbar.php")?>

<div id="creerannonce" class="container">
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

</div>
  </body>
</html>