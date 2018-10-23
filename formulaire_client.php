<?php require ("head.php") ?>
<?php require("navbar.php")?>

  <form>
    <legend>Inscription Entreprise</legend>
    <div class="form-group col-sm-6">
      <div class="col-sm-12">
        <label for="raison_sociale">Raison sociale : </label>
        <input id="raison_sociale" type="text" class="form-control" name="" value="">
      </div>
    </div>

    <div class="form-group col-sm-6">
      <div class="col-sm-3">
        <label>n°de SIRET : </label>
        <input type="text" class="form-control" name="" value="">
      </div>
    </div>

    <div class="form-group col-sm-12">
      <div class="col-sm-9">
        <label for="adresse">Adresse : </label>
        <input id="adresse" type="text" class="form-control" name="" value="" placeholder="Saisir adresse"> </br>
        <input type"text" name="" value="" class="form-control" placeholder="complément d'adresse 1"> </br>
        <input type"text" name="" value="" class="form-control" placeholder="complément d'adresse 2"> </br>
      </div>
    </div>

    <div class="form-group col-sm-12">
      <div class="col-sm-3">
        <label for="code_postal">Code postal : </label>
        <input id="code_postal" type="text" class="form-control" name="" value="">
      </div>
    </div>

    <div class="form-group col-sm-12">
      <div class="col-sm-3">
        <label for="ville">Ville : </label>
        <input id="ville" type="text" class="form-control" name="" value="">
      </div>
    </div>

    <div class="form-group col-sm-12">
      <div class="col-sm-3">
        <label for="telephone">Téléphone : </label>
        <input id="telephone" type="text" class="form-control" name="" value="">
      </div>
    </div>

    <div class="form-group col-sm-12">
      <div class="col-sm-6">
        <label for="email">Email : </label>
        <input id="email" type="email" class="form-control"name="" value="">
      </div>
    </div>

    <div class="form-group col-sm-12">
      <div class="col-sm-3">
        <label for="password">Mot de passe : </label>
        <input id="password" type="password" class="form-control" name="" value="">
      </div>
    </div>

    <div class="form-group col-sm-12">
     <div class="col-sm-3">
      <label for="repeat_password"> Répéter le mot de passe : </label>
      <input id="repeat_password" type="password" class="form-control" name="" value="">
    </div>
    </div>

    <div id="inscription" class="col-md-12 text-center"> 
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">S'inscrire</button>
    </div> 

  </form>

</body>
</html>