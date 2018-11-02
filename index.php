<!DOCTYPE html>
<html lang="pt-br" ng-app="testeUTI">

    <head>
        <?php include('includes/metaTags.php'); ?>           
    </head>

    <body id="home">
        <?php include('includes/navegacao.php'); ?>
        <!-- container A-->
        <div class="container">
            <?php include('includes/slides.php'); ?>
            <?php include('includes/quemSomos.php'); ?> 
        </div>
        <!-- /container A--> 
        <p>teste</p>
        <!-- container B -->   
        <div class="row bg-2">
            <div class="container">
                <?php include('includes/produtos.php'); ?>
            </div>            
        </div>
        <!-- /container B-->
        
        <!-- container C-->   
        <div class="row">
            <div class="container">
                <?php include('includes/noticias.php'); ?>
            </div>            
        </div>
        <!-- /container C-->
        
        <!-- container D-->   
        <div class="row bg-2">
            <div class="container">
                <?php include('includes/parceiros.php'); ?>
            </div>            
        </div>
        <!-- /container D-->
        
        <!-- container E-->   
        <div class="row bg-3">
            <div class="container">
                <?php include('includes/footer.php'); ?>
            </div>            
        </div>
        <!-- /container E-->
        <?php include('includes/scripts.php'); ?> 
   
    </body>

</html>