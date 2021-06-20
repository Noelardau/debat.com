
<?php 
     

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$p?></title>
    <link rel="stylesheet" href="public/Semantics/semantic.min.css">
    <link rel="stylesheet" href="public/style.css">
    <script src="public/script/jquery.js"></script>
</head>
<body>
    <?php if(!$_SESSION['connected']):?>
    <div class="ui segment">
       <div class="ui header blue">Debat.com</div>
    </div>
    <?php endif;?>
    <?php if($_SESSION['connected']):?>
        <div class="ui menu blue">
      
   <div class="<?php if($p == 'home'):?>active<?php endif;?> item">
        <i class="chat icon"></i>
    </div>  
    <?php if($_SESSION['user_pseudo'] != 'Admin'):?>
    <div class="item ui header tiny blue">
    
     
    </div>  
    <?php endif;?>

    
    <a class="item right" href="traitement/deconnected.php">
        <i class="log out red icon"></i>
   </a>


   </div>
   <?php endif;?>

