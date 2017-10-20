<?php



	  try
	   {
       $db = new PDO('mysql:host=localhost;dbname=Cats;charset=utf8', 'phpmyadmin', 'maD24101975');
   }

   catch (Exception $e)

   {

       die('Erreur : ' . $e->getMessage());

   }


class CatsManager

{

  private $_db; // Instance de PDO.


  public function __construct($db)

  {

    $this->setDb($db);

  }

 
  // create add insert
  public function add(Chat $perso)
  {

  }

// read SELECT
  public function get($id){

  }

  // uptade
  public function update(Chat $perso){

  }

  // delete
  public function delete(Chat$perso){

  }
}


