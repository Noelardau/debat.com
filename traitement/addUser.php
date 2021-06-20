<?php

    require '../class/Bdd.php';

  
    $message = '<div class="ui message red">veuillez renseigner les champs</div>';
    
    
    
    
    if(isset($_POST['pseudo']) && isset($_POST['pass1']) && isset($_POST['pass2'])){
        
        if($_POST['pass1'] == $_POST['pass2']){
            
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mdp = $_POST['pass1'];
            
    $bdd = new PDO('mysql:host=localhost;dbname=superchat','root','');
    Bdd::addUser($bdd,$pseudo,$mdp);

    $message = '<div class="ui message green">Inscription réussi</div>'; 


    }







   } 


   echo $message;