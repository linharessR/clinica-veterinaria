<?php

class Especie {

    public $Codigo;
    public $Nome;

    function __construct($Codigo = null, $Nome = null)
    {
       $this->Codigo = $Codigo; 
       $this->Nome = $Nome;
    }
}
?>