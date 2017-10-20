<?php
class bdd{
 public function db(){


  try {
       $db = new PDO('mysql:host=localhost;dbname=Cats;charset=utf8', 'phpmyadmin', 'maD24101975');
   }

   catch (Exception $e)

   {

       die('Erreur : ' . $e->getMessage());

   }
   return $db;
}
}

 ?>
