    <?php $title = "Acceuil"; ?>
    <?php include('includes/constants.php');?>
    <?php include('partials/_header.php');?>
  
    <?php include('partials/_errors.php'); ?>
    <div class="main-content">

    <div class="container">  
        <div class="jumbotron">
            <?= $long_text['acceuil_intro'][get_current_locale()]; ?>
      </div><!-- /.container -->

    </div>

<?php include('partials/_footer.php'); ?>