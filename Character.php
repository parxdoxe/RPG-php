<?php

class Character
{

    public $name;
    public $life;
    public $strength;
    public $mana;
    public $class;
    public $tribu;

    public $errors = [];
    public $success = false;

    public function __construct($name, $class, $tribu, $life = 100,)
    {
        $this->name = $name;
        $this->class = $class;
        $this->tribu = $tribu;
        $this->life = $life;

        $this->getMana();
        $this->getStrength();
    }

    // public function errors()
    // {

    //     if (empty($this->noms)) {
    //         return $this->errors[] = 'Veuillez saisir le nom.';
    //     } 
    //     if (empty($this->class)) {
    //         return $this->errors[] = 'Veuillez saisir la class';
    //     } 
        
    //     if (empty($this->errors)) {
    //         return $this->success = true;
    //     }
    // }

    public function getMana()
    {
        if ($this->class === 'guerrier') {
            return $this->mana = 10;
        } else if ($this->class === 'chasseur') {
            return $this->mana = 20;
        } else if ($this->class === 'mage') {
            return $this->mana = 30;
        }
    }

    public function getStrength()
    {
        if ($this->class === 'guerrier') {
            return $this->strength = 30;
        } else if ($this->class === 'chasseur') {
            return $this->strength = 20;
        } else if ($this->class === 'mage') {
            return $this->strength = 10;
        }
    }

}