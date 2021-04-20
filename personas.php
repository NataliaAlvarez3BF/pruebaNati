<?php
class Persona{
    private $Id;
    private $Nombre;
  private $Apellido;
    private $Edad;
    private $Email;

    function __construct($Id,$Nombre,$Apellido,$Edad,$Email) {
        $this->Id = $Id;
        $this->Nombre = $Nombre;
        $this->Apellido = $Apellido;
        $this->Edad = $Edad;
        $this->Email = $Email;
    }

    public function NombreYApellido(){
        return $this->Nombre." ".$this->Apellido."<br>";
    }

    public function __toString()
    {
        return "Id = ".$this->Id."<br>".
               "Nombre = ".$this->Nombre."<br>".
               "Apellido = ".$this->Apellido."<br>".
               "Edad = ".$this->Edad."<br>".
               "Email = ".$this->Email."<br>";
    }
}
$Personas = [
    new Persona(1,"Briana ","Blanco",15,"bribla@gmail.com"),
    new Persona(2,"Carlos ","Lopez",28,"carlop@gmail.com"),
    new Persona(3,"Patricia","Polatri",30,"patripola@gmail.com"),
    new Persona(4,"Maria","Alvez",46,"marialv@gmail.com"),
    new Persona(5,"Silvano","Cataldo",35,"silcata@gmail.com"),
    new Persona(6,"Marcelo","Mendez",19,"marcmen@gmail.com"),
    new Persona(7,"Joselin","Papini",40,"josepapi@gmail.com"),
    new Persona(8,"Natalia","Alvarez",44,"nataalv@gmail.com"),
    new Persona(9,"Diego","Vazquez",38,"diegvazq@gmail.com"),
    new Persona(10,"Rosa","Cataldo",67,"roscat@gmail.com")
];
