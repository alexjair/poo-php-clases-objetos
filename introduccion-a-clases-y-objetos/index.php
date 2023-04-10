<?php

// include

class Person
{
    public function greet() // Person.php
    {
        return "Hola $this->name";
    }
}

class User
{
    public $type;
}

class Admin extends Person
{
    public $name = 'Administrador';
}

$user = new User;
$user->type = new Admin;
echo $user->type->greet();