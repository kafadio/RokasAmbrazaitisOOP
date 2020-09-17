<?php
use userApp\User;
$user = new User("Rokas", "rokascape@gmail.com", "moksleivis");

    foreach ($user->showProfile()as $item){
     echo $item . " ";
    }
