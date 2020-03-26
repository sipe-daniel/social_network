  
    <?php $title = "Page de profil"; ?>
 
    <?php include('partials/_header.php');?>
    <?php include('partials/_errors.php'); ?>
    <div class="main-content">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="panel panel-default">
		    			<div class="panel-heading">
			    			<h3 class="panel-title">Profile de <?= e($user->pseudo);?></h3>
			    		</div>
				    	<div class="panel-body">
				    	
				    		<div class="row">
				    			<div class="col-md-5">
				    				<img src="<?=get_avatar_url($user->email,100); ?>" alt="Image de profil de <?= e($user->pseudo)?>" class="img-circle"/>
				    			</div>
				    		</div>
				    		<div class="row">
				    			<div class="col-sm-6">
				    				<strong><?= e($user->pseudo)?></strong><br/>
				    				<a href="mailto:<?=e($user->email) ?>"><?=  e($user->email)?></a><br/>
				    				<?= 
				    					($user->city && $user->country) ? '<i class="fas fa-location-arrow"></i>&nbsp;'.e($user->city).' - '.e($user->country).'<br/>':''; 
				    				?><a href="https://www.google.com/maps?q=<?= e($user->city).' '.e($user->country) ?>" target="_blank">Voir sur google Map</a>
				    			</div>
				    			<div class="col-sm-6">
				    				<?= 
				    					$user->twitter ? '<i class="fab fa-twitter"></i>&nbsp;<a href="//twitter.com/'.e($user->twitter).'">@'.e($user->twitter).'</a><br/>':''; 
				    				?>
				    				<?= 
				    					$user->github ? '<i class="fab fa-github"></i>&nbsp<a href="//github.com/'.e($user->github).'">'.e($user->github).'</a><br/>':''; 
				    				?>

				    				<?= ($user->sexe == 'F')?'<i class="fas fa-female"></i>': '<i class="fas fa-male"></i>'?>
				    				
				    				<?= 
				    					$user->available_for_hiring ?'Disponible pour emploi':'Non disponible pour emploi'; 
				    				?>
				    			</div>
				    		</div>
				    		<div class="row">
				    			<div class="col-md-12 well">
				    				<h5>Petite bibliographie de <?= e($user->name) ?></h5>
				    				<p>
				    				<?= 
				    					$user->bio ?nl2br(e($user->bio)):'Aucune biographie pour le moment...'; 
				    				?>
				    				</p>
				    			</div>
				    		</div>
				    	
				    	</div>
    				</div>
    			</div>
    			<?php if(!empty($_GET['id'])&&$_GET['id'] === get_session('user_id')): ?>
    			
    			<div class="col-md-6">
    				<div class="status-post">
	    				
	    				<form action="microposts.php" method="POST" data-parsley-validate>
	    					<label for="content" class="sr-only">Status : </label>
	    					<textarea required="required" name="content" id="content" class="form-control" rows="3" cols="30" id="comment" placeholder="Alors quoi de neuf ?"data-parsley-maxlength="100" data-parsley-minlength="3"></textarea>
		    				<div class="form-group status-post-submit">
		    					<input type="submit" name="publish" value="Publier" class="btn btn-xs btn-default default "/>
		    				</div>
	    				</form>
					</div>
				<?php endif; ?>
				
    			<?php if(count($microposts) != 0): ?>
    				<?php foreach ($microposts as $micropost): ?>
    					<?php  include('partials/_micropost.php'); ?>
    				<?php endforeach ?>
    			<?php else: ?>
    				<p>Cet utilisateur n'a encore rien poste pour le moment ...</p>
    			<?php endif; ?>

    			</div>
    		</div>

      </div>

    </div>
<!--<script type="text/javascript" src="assets/js/jquery.livequery.min.js"></script>-->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="assets/js/timeago.js"></script>
<script src="assets/js/index.js" type="text/javascript"></script>

<script type="text/javascript" src="assets/js/jquery-1.9.1.js"></script>


<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="libraries/parsley/parsley.min.js"></script>
<script type="text/javascript" src="libraries/parsley/i18n/fr.js"></script>

  <script type="text/javascript">
		  init_index_page();
		  var timeago = require('assets/js/timeago.js')();
   		
		  timeago.setLocale('fr');
    </script>

<script type="text/javascript">
	
window.Parsley.setLocale ('fr');

</script>
	
</body>
</html>
 