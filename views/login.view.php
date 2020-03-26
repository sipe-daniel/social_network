  
    <?php $title = "Connexion"; ?>
 
    <?php include('partials/_header.php');?>

    <div class="main-content">
    	<div class="container">
	    	<h1 class="lead">Connexion</h1>

	    	<?php include('partials/_errors.php'); ?>
	    	<form method="post" class="well col-md-6 " data-parsley-validate autocomplete="off">


		    	<div class="form-group">
		    		<label class="control-label" for="identifiant">Pseudo ou Adresse electronique :</label>
		    		<Input type="text" data-parsley-minlength="3" value="<?=get_input('identifiant') ?>" class="form-control" id="identifiant" name="identifiant" required />	
		    	</div>
 
		    	<div class="form-group">
		    		<label class="control-label" for="password">Mot de passe :</label>
		    		<Input type="password" class="form-control" id="password" name="password" required="required"/>	
		    	</div>


		    	<Input type="submit" class = " btn btn-primary" value = "Connexion" name="login"/>

	    	</form>
      </div>

    </div>

<?php include('partials/_footer.php'); ?>
 