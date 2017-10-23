<?php
require 'Modeles/connectBdd.php';

$manager = new CatsManager($db);
//ajouter chat 

 
//effacer chat

//page acceuil
$cats = $manager->getList();


require 'Vues/Cats.php';

