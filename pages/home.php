<?php if(!$_SESSION['connected']):?>
    <div class="ui segment showTheme" align = 'center'>
       <div class="ui header tiny blue"></div>
    </div>
    <div class="ui blue message" align='center'>
        Participez à nos différents débats...
    
    </div>

    <div align='center'>
        
        
        <div class="ui double button primary">
            <a href="rooter.php?page=connexion" class="ui button primary">
                Se connecter
            </a>
           
      
            <a href="rooter.php?page=newUser" class="ui button primary">
                Créer un compte
            </a>
          
            
        </div>
        
    </div>

<?php endif; ?>

<?php if($_SESSION['connected']):?>

<?php
   if($_SESSION['user_pass'] != 'admin' || $_SESSION['user_pseudo'] != 'Admin' ){
    

?>
<div class="ui message positive tiny" align='center'>
    Vous êtes connecté en tant que <?= $_SESSION['user_pseudo'];?>
</div>


<div class="ui form">
    <div class="field">
        <textarea name="mess"cols="5" rows="3" class="contenuMess"></textarea>
    </div>
    <div class="ui button primary fluid sendMess">
        <i class="send icon"></i>
    </div>
</div>

<div class="ui segment afficher">
   
</div>

<script src="public/script/sendMess.js"></script>

<?php
   }else{
?>

<div class="ui header blue tiny">
    Bienvenue Mr l'Administrateur
</div>



<form class="ui form">

<div class="field">
        <label for="debatName">
            Nouveau thème de debat:
        </label>
        <input type="text" class='titre'>
    </div>    

    <button class="ui button primary fluid">
        Ajouter
    </button>



</form>
<div class="ui horizontal divider">...</div>
<div class="mess" align='center'></div>



<script src="public/script/addTheme.js"></script>










<?php
   }
?>

<?php endif; ?>


<script src="public/script/momentTheme.js"></script>



