<?php


class CatsManager

{

  private $_db;


    /**
     * CatsManager constructor.
     * @param $db
     */
    public function __construct($db)

  {

    $this->setDb($db);

  }


  public function setDb($db)
  {

   $this->_db=  $db;
   
  }

  // read SELECT

    /**
     * @return Cats
     */
    public function getList()
      {
        $req = $this->_db->query('SELECT * FROM Chat');
        $chats = $req->fetchAll(PDO::FETCH_ASSOC);




      foreach ($chats as $key => $value) 
        {
      $chats[$key] = new Cats($value);
       
        }

      return $chats;
      }





  // create add insert
  public function add(Cats $chats)
  {
    $req = $this->_db->prepare( 'INSERT INTO Cats(name,age,sexe,color) VALUES( :name, :age, :sexe, :color)');

    $req->bindValue(':name',$chats->getName());
    $req->bindValue(':age',$chats->getAge(), PDO::PARAM_INT);
    $req->bindValue(':sexe',$chats->getSexe());
    $req->bindValue(':color',$chats->getColor());

    $req->execute();
  

  }


// update
    public function update( Cats $chats)
  {
    $req = $this->_db->prepare( 'UPDATE  Cats SET name = :name, age = :age, sexe = :sexe, color = :color WHERE id = :id');

    $req->bindValue(':name',$chats->getName());
    $req->bindValue(':age',$chats->getAge(), PDO::PARAM_INT);
    $req->bindValue(':sexe',$chats->getSexe());
    $req->bindValue(':color',$chats->getColor());
    $req->binValue(':id',$chats->id(),PDO::PARAM_INT);

    $req->execute();
  

  }


  // delete

    /**
     * @param $chats
     */
    public function delete(Cats $chats)
    {

      $req = $this->_db->prepare('DELETE FROM  Chat WHERE id  = :id' );
      $req->binValue(':id',$chats->id(),PDO::PARAM_INT);

      $req->execute();
    }
}
