<?php
// contratos
// Database, get, delete, store, edit, update
interface Person
{
    public function getName();
}

class Admin implements Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$admin = new Admin('Lynda');
echo $admin->getName();