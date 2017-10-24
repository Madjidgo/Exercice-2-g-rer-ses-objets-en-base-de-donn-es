<?php 
declare(strict_types=1);
class Cats{
          protected $_name;
          protected $_age;
          protected $_color;
          protected $_sexe;

const MALE = "masculin";
const FEMALE = "feminin";

// const



public function __construct(array $data){

$this->hydrate($data);


}

    /**
     * @param array $data
     */
    public function hydrate(array $data)
{

foreach ($data as $key => $value)
  {
  # code...
var_dump($data[$key]);

     $method = 'set' . ucfirst($key);
     if (method_exists($this, $method))

    {
    $this->$method($value);
     
    }

  }
}
    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->_id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->_color;
    }


    public function getSexe()
    {
        return $this->_sexe;
    }



    /**
     * @param mixed $id
     */
    public function setIdid($id)
    {
        $id = (int)$int;
       $this->_id = $id; 
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $age = (int)$age;
        if($age>=1 && $age<=30)
        {
        $this->_age = $age;
         }
    }
    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        if (is_string($color))
         {
        $this->_color = $color;
        }
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
       
        if (is_string($name))
         {
        $this->_name = $name;
        }
    
    }

    public function setSexe($sexe)
    {
          if (is_string($sexe))
         {
        $this->_sexe = $sexe;
        }

    }
}

 ?>
