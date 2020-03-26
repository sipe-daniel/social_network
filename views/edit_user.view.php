
  <?php $title = "Edition de profil"; ?>
 
    <?php include('partials/_header.php');?>
    <?php include('partials/_errors.php'); ?>
    <div class="main-content">
    	<div class="container">


		<?php  if(!empty($_GET['id']) && $_GET['id'] === get_session('user_id')): ?>
    			
    			<div class="col-md-6 col-md-offset-3">
    				<div class="panel panel-default">
		    			<div class="panel-heading">
			    			<h3 class="panel-title">Completer mon profil</h3>
			    		</div>
			    		<div class="panel-body">
			    			<?php include('partials/_errors.php'); ?>
			    				
			    				<form data-parsley-validate method="post" autocomplete="off">
			    					<div class="row">
			    						<div class="col-md-6">
			    							<div class="from-group">
			    								<label for="name">Nom<span class="text-danger">*</span></label>
			    								<input value="<?=get_input('name')?: e($user->name); ?>" type="text" name="name" id="name" class="form-control" placeholder="John" required/>
			    							</div>
			    						</div>
			    						<div class="col-md-6">
			    							<div class="form-group">
			    								<label for="city">Ville<span class="text-danger">*</span></label>
			    								<input value="<?=get_input('city')?:e($user->city) ?>"  type="text" name="city" id="city" class="form-control" required/>
			    							</div>
			    						</div>
			    					</div>

			    					<div class="row">
			    						<div class="col-md-12">	
			    							<div class="form-group">

			    								<label for="avatar">changer mon avatar</label>
			    								<input type="file" name="avatar" id="avatar" />
			    							</div>
			    						</div>
			    					</div>

			    					<div class="row">
			    						<div class="col-md-6">
			    							<div class="form-group">
			    								<label for="country">Pays<span class="text-danger">*</span></label>
			    								<input type="text" value="<?=get_input('country')?:e($user->country); ?>" name="country" id="country" class="form-control" required/>
			    							</div>
			    						</div>
			    						<div class="col-md-6">
			    							<div class="form-group">
			    								
			    								<label for="sexe">Sexe<span class="text-danger">*</span></label><br/>

			    								<select name="sexe" id="sexe" class="form-control" required>

			    									<option value="H" <?=($user->sexe == "H")?"selected":''?> >
			    										Homme
			    									</option>
			    									<option value="F" <?=($user->sexe == "F")?"selected":''?>>
			    										Femme
			    									</option>

			    								</select>

			    							</div>
			    						</div>
			    					</div>

			    					<div class="row">
			    						<div class="col-md-6">
			    							<div class="form-group">
			    								<label for="twitter">Twitter</label>
			    								<input type="text" value="<?=get_input('twitter')?:e($user->twitter) ?>" name="twitter" id="twitter" class="form-control"/>
			    							</div>
			    						</div>
			    						<div class="col-md-6">
			    							<div class="form-group">
			    								<label for="github">Github</label>
			    								<input type="text" value="<?=get_input('github ')?:e($user->github) ?>" name="github" id="github" class="form-control"/>
			    							</div>
			    						</div>
			    					</div>

			    				

			    					<div class="row">
			    						<div class="col-md-12">
			    							<div class="form-group">

			    								<label for="available_for_hiring"></label>
			    								Disponible pour emploi ?
			    								<input type="checkbox" name="available_for_hiring" <?= ($user->available_for_hiring)?"checked":'';?>/>

			    							</div>
			    						</div>
			    					</div>
			    					<div class="row">
			    						<div class="col-md-12">
			    							<div class="form-group">
			    								<label for="bio">Biographie <span class="text-danger">*</span></label>
			    								<textarea  required name="bio" cols="30" rows="10" class="form-control" placeholder="Je suis un amoureux de la programmation..."><?=get_input('bio ')?:e($user->bio) ?></textarea>
			    							</div>
			    						</div>
			    					</div>
			    					<input class="btn btn-primary" type="submit" value="Valider" name="update"/>
			    				</form>
			    		</div>
				    	
    				</div>
    			</div>
			<?php endif; ?>

    	</div>
    </div>




    <script type="text/javascript" src="assets/js/jquery-1.7.1.min.js"></script>
	

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
  	<script type="text/javascript" src="libraries/uploadify/jquery.uploadify.min.js"></script>
    
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="libraries/parsley/parsley.min.js"></script>
    <script type="text/javascript" src="libraries/parsley/i18n/fr.js"></script>
    <script type="text/javascript">
    	window.Parsley.setLocale('fr'); 

		$(function() {
		    $("#avatar").uploadify({
		        'buttonText'    : 'Parcourir',
		        'swf'           : 'libraries/uploadify/uploadify.swf',
		        'uploader'      : 'libraries/uploadify/uploadify.php',
		        'width'         : 120
		    });
		});
    </script>

  </body>
</html>
 