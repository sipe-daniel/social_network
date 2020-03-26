
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php if(!is_logged_in()):?>
            <a class="navbar-brand" href="index.php"><?php echo WEBSITE_NAME; ?></a>
          <?php else: ?>
            <a class="navbar-brand" href="profile.php?id=<?=get_session('user_id') ?>"><?php echo WEBSITE_NAME; ?></a>
          <?php endif; ?>
        </div>
        <div  class="collapse navbar-collapse">
        
          <ul class="nav navbar-nav">
            <li><a href="list_users.php?id=<?=get_session('user_id')?>">Liste des utilisateurs</a></li>
          </ul>
      

          <ul class="nav navbar-nav navbar-right">
            <?php if( is_logged_in() ):?>
            <li  class="btn-group" style="padding-top:13px;">
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="<?=get_avatar_url(get_session('email')); ?>" alt="Image de profil de <?= get_session("pseudo");?>" class="img-circle"/> <span class="caret"></span>
              </button>

              <ul class="dropdown-menu">
                 <li class="<?= set_active('profile') ?>">
                   <a href="profile.php?id=<?=get_session('user_id') ?>"> <?= $menu['mon_profil'][get_current_locale()]?></a>
                 </li>

                 <li class="<?= set_active('edit_user') ?>">
                   <a href="edit_user.php?id=<?=get_session('user_id') ?>"> <?= $menu['editer_profil'][get_current_locale()]?></a>
                 </li>

                <li class="<?= set_active('share_code')?>"><a href="share_code.php" ><?= $menu['share_code'][get_current_locale()]?></a></li>
                
                <li class="divider"></li>

                <li><a href="logout.php"><?= $menu['deconnexion'][get_current_locale()]?></a></li>
                
              </ul>
            </li> 
            <?php else: ?>  
              <li class="<?php echo set_active('login')?>"><a href="login.php"> <?= $menu['connexion'][get_current_locale()]?></a></li>
              <li class="<?php echo set_active('register')?>"><a href="register.php"> <?= $menu['inscription'][get_current_locale()]?></a></li>
            <?php endif; ?>

          </ul>
        </div>
      </div>
    </nav>