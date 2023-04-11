<?php

require ('../class/User.php');
require ('../class/Guest.php');
require ('../class/Admin.php');

$guest = new Guest();
echo $guest->login().'<br>';

$guest = new User('Italo');
echo $guest->login().'<br>';

$guest = new Admin('Lynda');
echo $guest->login().'<br>';