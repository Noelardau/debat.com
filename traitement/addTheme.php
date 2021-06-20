<?php
$bdd = new PDO('mysql:host=localhost;dbname=superchat','root','');
if(isset($_POST['titre']) && !empty($_POST['titre'])){
    $bdd->exec('TRUNCATE theme');
    $bdd->exec('TRUNCATE messages');

    $req = $bdd->prepare('INSERT INTO theme(titre) VALUES(?)');
    $req->execute([

        htmlentities($_POST['titre'])

    ]);
    
  echo "<div class='ui message green'>Nouveau thème defini</div>";
  
  
}else{
  
  
  
  echo "<div class='ui message red'>Veuillez inserez un nouveau thème</div>";



}

