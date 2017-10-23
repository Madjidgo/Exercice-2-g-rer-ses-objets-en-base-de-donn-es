<?php 

function chargerClasse($classe)

{

require 'Modeles/'.$classe . '.php'; // On inclut la classe correspondante au paramètre passé.

}

spl_autoload_register('chargerClasse');

require 'Controleurs/Cats.php';