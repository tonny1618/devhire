<?php require ("head.php") ?>
<?php require("navbar.php")?>
<div class="container-fluid" id="formulairecv">
	<h2>Créer votre CV</h2>
	<form>
		<div class="form-group col-sm-6">
			<label class="control-label col-sm-2" for="prenom">Prenom : </label>
			<input  class="form-control" type="text" value="" name="" autocomplete="on">
		</div>
		<div class="form-group col-sm-6">
			<label class="control-label col-sm-2" for="nom">Nom : </label>
			<input  class="form-control" type="text" value="" name="" autocomplete="on">
		</div>
		<div class="form-group  col-sm-6">
			<label class="control-label col-sm-2" for="adresse">Adresse : </label>
			<input  class="form-control" type="text" value="" name="" autocomplete="on">
		</div>
		<div class="form-group col-sm-6">
			<label class="control-label col-sm-2" for="adresse">Code Postal :</label>
			<input  class="form-control" type="text" value="" name="" autocomplete="on">
		</div>
		<div class="form-group col-sm-6">
			<label class="control-label col-sm-2" for="adresse">Ville : </label>
			<input  class="form-control" type="text" value="" name="" autocomplete="on">
		</div>
		<div class="form-group col-sm-6">
			<label class="control-label col-sm-2" for="adresse">Telephone : </label>
			<input  class="form-control" type="text" value="" name="" autocomplete="on">
		</div>

		<div class="col-md-6">
			<legend>Compétences : </legend>

			<div class="checkbox">
				<label><input type="checkbox" value="">Compétences 1</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" value="">Compétences 2</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" value="">Compétences 3</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" value="">Compétences 4</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" value="">Compétences 5</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" value="">Compétences 6</label>
			</div>

		</div>
		<div class="col-md-6">
			<legend>Qualifications : </legend>

			<div class="checkbox">
				<label><input type="checkbox" value="">Qualifications 1</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" value="">Qualifications 2</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" value="">Qualifications 3</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" value="">Qualifications 4</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" value="">Qualifications 5</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" value="">Qualifications 6</label>
			</div>

		</div>
		<div class="col-md-12">
			<legend>Expériences : </legend>
			
			<div class="col-md-12 col-md-offset-11" > 
				<span id="add" class="glyphicon glyphicon-plus " data-toggle="tooltip" data-placement="top" title="Ajouter nouvelle expérience" ></span>
			</div>
		<div class="form-group col-md-6 col-md-offset-3">
			<div class="col-md-4">
				<label>De : </label>
				<input class="form-control" type="date"  name="">

			</div>

			<div class="col-md-4">
				<label> Jusqu'au :</label>
				<input class="form-control" type="date"  name="">
			</div>

			<div class="col-md-12">
				<label>Détaillez votre expérience : </label><textarea class="form-control" rows="8"	 id="comment"></textarea>
			</div>
		</div>
		<div id="blocexperience"></div>
	</div>
		<div class="col-md-12">
			<legend>Identifiants : </legend>
			<div class="col-md-3">
				<div class="form-group">
					<label class="control-label" for="email">Adresse mail :</label>
					<input  class="form-control" type="email" value="" name="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label" for="password">Mot de passe : </label>
						<input  class="form-control" type="password" value="" name="">
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-md-offset-10">
		<div class="form-group col-sm-1">
			<button type="button" class="btn btn-secondary btn-lg hvr-bounce-to-right" type="submit">Envoyer</button>
		</div>
		<div class="form-group col-sm-1">
			<button type="button" class="btn btn-secondary btn-lg hvr-bounce-to-right" type="reset">Annuler</button>
		</div>
	</div>

	</form>
</div>
<?php require('footer.php') ?>
</body>
</html>