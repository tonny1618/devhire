<?php require ("head.php") ?>
<?php require("navbar.php")?>

<div class="col-sm-4 col-sm-offset-4 login-box">
	<div class="row">
		<a data-toggle="tab" href="Sign In"><input class="bbtn" type="button" name="" value="Sign In"></a>
		<a data-toggle="tab" href="Sign Up"><input class="bbtn" type="button" name="" value="Sign Up"></a>
		<div class="textbox">
			<i class="fas fa-user"></i>
			<input type="text" placeholder="user" name="" value="">
		</div>

		<div class="textbox">
			<i class="fas fa-key"></i>
			<input type="password" placeholder="password" name="" value="">
		</div>
		Veuillez entrez vos identifiants et mots de passe.		
		<br/>
		<a href="oubliMDP" title="oubliMDP"> Mot de passe oublié ?</a>
		<input class="btn" type="button" name="" value="Sign In">
	</div>
</div>
</body>
</html>