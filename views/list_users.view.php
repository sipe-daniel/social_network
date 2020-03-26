  <?php $title = "Liste des utilisateurs"; ?>
 
    <?php include('partials/_header.php');?>
    <?php include('partials/_errors.php'); ?>
    <div class="main-content">
    	<div class="container">
    		<h1>Liste des utilisateurs</h1>

            <?php foreach (array_chunk($users, 4) as $user_set): ?>

               <div class="row users">
                
                <?php foreach ($user_set as $user): ?>

                <div class="col-md-3 user-block">
                    
                    <a href="profile.php?id=<?=$user->id?>">
                    <img src="<?=get_avatar_url($user->email,70); ?>" alt=" <?= e($user->pseudo)?>" class="img-circle"/></a>

                    <a href="profile.php?id=<?=$user->id?>">
                        <h4 class="user-block-username">
                            <?= e($user->pseudo) ?>
                        </h4>
                    </a>
                
                </div>

                <?php endforeach ?>

                </div>

            <?php endforeach; ?>

            <?= '<div id="pagination">'.$pagination.'</div>'; ?>
      </div>    
    </div>

<?php include('partials/_footer.php'); ?>
 