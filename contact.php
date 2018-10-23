<?php require ("head.php") ?>
<?php require("navbar.php")?>

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

