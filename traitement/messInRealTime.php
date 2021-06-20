<?php
    session_start();
    require '../class/Bdd.php';
    $bdd = new PDO('mysql:host=localhost;dbname=superchat','root','');
   if(count(Bdd::getMessage($bdd)) > 0 ){

      foreach (Bdd::getMessage($bdd) as $mess) {
          if($_SESSION['user_id'] == $mess['idSender']){
             echo "<div class='ui header'>vous</div><div class='ui message blue'>".strip_tags($mess['content'])."</div><div class='ui horizontal divider'>".$mess['dateEnvoi']."</div>";
 
          }else {
             echo "<div class='ui header'>".Bdd::getPseudo($bdd,$mess['idSender'])."</div><div class='ui message blue'>".strip_tags($mess['content'])."</div><div class='ui horizontal divider'>".$mess['dateEnvoi']."</div>";
          }
 
      }


   }else{

      echo "<div class='message ui blue'>Soyez le premier à lancer la discussion... </div>";

   }
    ?>