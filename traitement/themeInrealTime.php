<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=superchat','root','');

$req = $bdd->query('SELECT titre FROM theme');



    
    echo $req->fetch()['titre'];
