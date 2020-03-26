  
    <?php $title = "Partage de codes sources"; ?>

    <?php include('partials/_header.php');?>


    <div class="main-content">
    	<div id="main-content-share-code">
    		<form action="" method="POST" autocomplete="off">
    			<textarea name="code" id="code" placeholder="entrez votre code ici..."><?= e($code);?></textarea><br/>

    			<div class="btn-group nav-code">
    				<a href="share_code.php" class="btn btn-danger">Tout effacer!</a>
    				<input type="submit" name="save" class="btn btn-success" value="Enregistrer"/>
    			</div>
    			
    		</form>
    	</div>

    </div>


	<!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css" rel="stylesheet" integrity="sha384-Li5uVfY2bSkD3WQyiHX8tJd0aMF91rMrQP5aAewFkHkVSTT2TmD2PehZeMmm7aiL" crossorigin="anonymous">
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/tabby.js"></script>

    <script type="text/javascript">
    	$("#code").tabby();
    	$("#code").height( $(window).height -50px);
    </script>

  </body>
</html>

 