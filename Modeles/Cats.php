<?php
class Cats{
protected $_nom;
protected $_age;
protected $_couleur;

const Sexe = array(
  'M'=>"Malle",
  'F'=>"Femelle"
);

// const

public  function __construct($nom,$age,$couleur,$sexe)
{
 $this->setAge($age);
 $this->setNom($nom);
 $this->setCouleur($couleur);

}

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
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
    public function getCouleur()
    {
        return $this->_couleur;
    }

    /**
     * @param mixed $age
     */
    public function setAge( int $age)
    {
        $this->_age = $age;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur(string $couleur)
    {
        $this->_couleur = $couleur;
    }

    /**
     * @param mixed $nom
     */
    public function setNom( string $nom)
    {
        $this->_nom = $nom;
    }


}

 ?>
