  
    <?php $title = "Inscription"; ?>
 
    <?php include('partials/_header.php');?>

    <div class="main-content">
    	<div class="container">
			<h1 class="lead">Devenez dès à présent membre! </h1>
			
	    	<?php include('partials/_errors.php'); ?>
	    	<form method="post" class="well col-md-6 " data-parsley-validate autocomplete="off">
		    	<div class="form-group">
		    		<label class="control-label" for="name">Nom *:</label>
		    		<Input type="text" data-parsley-minlength="3" value="<?=get_input('name') ?>" class="form-control" id="name" name="name" required />	
		    	</div>
 
		    	<!-- pseudo field -->
		    	<div class="form-group">
		    		<label class="control-label" for="pseudo">Pseudo *:</label>
		    		<Input type="text" value="<?=get_input('pseudo') ?>" class="form-control" id="pseudo" name="pseudo" required="required"/>	
		    	</div>
		    		
		    		<!-- email field -->
		    	<div class="form-group">
		    		<label class="control-label" for="email">Adresse Email *:</label>
		    		<Input data-parsley-trigger="keypress" type="email" value="<?=get_input('email') ?>" class="form-control" id="email" name="email" required/>	
		    	</div>

		    		<!-- password field -->
		    	<div class="form-group">
		    		<label class="control-label" for="password">Mot de passe *:</label>
		    		<Input type="password" class="form-control" id="password" name="password" required="required"/>	
		    	</div>


		    		<!-- password confirmation field -->
		    	<div class="form-group">
		    		<label class="control-label" for="password_confirm">Mot de passe :</label>
		    		<Input type="password" class="form-control" id="password_confirm" name="password_confirm" required="required" data-parsley-equalto="#password"/>	
		    	</div>

		    	<Input type="submit" class = " btn btn-primary" value = "inscription" name="register"/>

	    	</form>
      </div>

    </div>

<?php include('partials/_footer.php'); ?>
 