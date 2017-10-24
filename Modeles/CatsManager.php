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

    // get all cats
    public function getList()
      {
        $req = $this->_db->prepare('SELECT * FROM Chat');
        $req->execute();

        $chats = $req->fetchAll(PDO::FETCH_ASSOC);


      return $chats;
      }


      // get one cat
      public function get($id)
      {
        $req= $this->_db->prepare('SELECT * FROM Chat WHERE id = :id');

        
        $req->execute(array(
          'id' => $id
        ));

         $chats = $req->fetch(PDO::FETCH_ASSOC);
         
        return new Cats($chats);
      }





  // create add insert
  public function add(Cats $chats)
  {
    $req = $this->_db->prepare( 'INSERT INTO Chat(name,age,sexe,color) VALUES( :name, :age, :sexe, :color)');

    $req->bindValue(':name',$chats->getName());
    $req->bindValue(':age',$chats->getAge(), PDO::PARAM_INT);
    $req->bindValue(':sexe',$chats->getSexe());
    $req->bindValue(':color',$chats->getColor());

    $req->execute();
  

  }


// update
    public function update( Cats $chats)
  {
    $req = $this->_db->prepare( 'UPDATE  Chat SET name = :name, age = :age, sexe = :sexe, color = :color WHERE id = :id');

    $req->bindValue(':name',$chats->getName());
    $req->bindValue(':age',$chats->getAge(), PDO::PARAM_INT);
    $req->bindValue(':sexe',$chats->getSexe());
    $req->bindValue(':color',$chats->getColor());
    $req->bindValue(':id',$chats->id(),PDO::PARAM_INT);

    $req->execute();
  

  }


  // delete

    /**
     * @param $chats
     */
    public function delete( $chats)
    {

      $req = $this->_db->prepare('DELETE FROM  Chat WHERE id  = :id' );
      $req->bindValue(':id',$chats,PDO::PARAM_INT);

      $req->execute();
    }
}
