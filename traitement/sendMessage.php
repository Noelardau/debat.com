<?php

    session_start();

    require '../class/Bdd.php';

    $bdd = new PDO('mysql:host=localhost;dbname=superchat','root','');
  $idSender = $_SESSION['user_id'];
//   var_dump($_POST); die();

  if(isset($_POST['contenu']) && isset($_POST['date_send']) && !empty($_POST['contenu']) && !empty($_POST['date_send'])){

    Bdd::sendMessage($bdd,$idSender,strip_tags($_POST['contenu']),$_POST['date_send']);

    echo '<div class="ui header">Vous</div><div class="ui message blue">'.strip_tags($_POST['contenu']).'</div><div class="ui horizontal divider">'.$_POST['date_send'].'</div>';


  }else{
      echo 'ecrivez quelque choses';
  }

