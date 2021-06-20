<?php



session_start();

require '../class/Bdd.php';
$bdd = new PDO('mysql:host=localhost;dbname=superchat','root','');



    if(isset($_POST['pseudo']) && isset($_POST['pass'])){

        
      
        $pseudo = $_POST['pseudo'];
        $mdp = $_POST['pass'];
       if($pseudo == 'Admin' && $mdp == 'admin'){
        $_SESSION['connected'] = true;
        $_SESSION['user_pseudo'] = $pseudo;
        $_SESSION['user_pass'] = $mdp;
        header('Location:../rooter.php?page=home');



       }else{

           if(Bdd::checkUser($bdd,$pseudo,$mdp)){
               $_SESSION['connected'] = true;
               $_SESSION['user_pseudo'] = $pseudo;
               $_SESSION['user_pass'] = $mdp;
               $_SESSION['user_id'] = Bdd::getId($bdd,$pseudo,$mdp);
               header('Location:../rooter.php?page=home');
            }else{
                
                header('Location:../rooter.php?page=connexion');
                
            }
        } 
        
    }
        