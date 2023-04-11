<?php

require ('Base.php');

class User extends Base
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}