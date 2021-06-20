<?php
session_start();


if(isset($_GET['page'])){
    
    $p =$_GET['page'];

}else{
    
    $p ='home';

}


ob_start();
if($p == 'home'){

    require 'pages/home.php';

}else if($p == 'connexion'){
    require 'pages/connexion.php';
}else if($p == 'newUser'){
    require 'pages/createAccount.php';
}

$content = ob_get_clean();

require 'template/header.php';
require 'template/default.php';
require 'template/footer.php';
