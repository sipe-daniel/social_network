  
    <?php $title = "Partage de codes sources"; ?>

    <?php include('partials/_header.php');?>


    <div class="main-content">
        <div id="main-content-share-code" >
                <pre class="prettyprint linenums"><?= e($data->code); ?></pre>

                <div class="btn-group nav-code">
                    <a href="share_code.php?id=<?=$_GET['id'];?>" class="btn btn-warning">Cloner</a>
                    <a href="share_code.php" class="btn btn-primary">Nouveau</a>
                   
                 </div>
                
          
        </div>

    </div>


    <!-- SCRIPTS -->
    <script type="text/javascript" src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css" rel="stylesheet" integrity="sha384-Li5uVfY2bSkD3WQyiHX8tJd0aMF91rMrQP5aAewFkHkVSTT2TmD2PehZeMmm7aiL" crossorigin="anonymous">
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        prettyPrint();
    </script>
  
  
  </body>
</html>

 