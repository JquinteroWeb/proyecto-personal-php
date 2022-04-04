<?php 
class Empelado{

    protected $nom;
    protected $apellido;
    protected $pais;
    protected $edad;
    
    public function __construct($nom,$apellido,$pais,$edad){
      $this->nom = $nom;
      $this->apellido = $apellido;
      $this->pais = $pais;
      $this->edad = $edad;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getNom()
    {
          return $this->nom;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;        
    }

   
    public function getPais()
    {
        return $this->pais;
    }

    
    public function setPais($pais)
    {
        $this->pais = $pais;
       
    }

   
    public function getEdad()
    {
        return $this->edad;
    }

    
    public function setEdad($edad)
    {
        $this->edad = $edad;
        
    }


   
     
}


?>