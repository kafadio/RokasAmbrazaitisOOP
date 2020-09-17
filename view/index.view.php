<?php
use userApp\User;
$user = new User("Rokas", "brol@gmail.com", "moksleivis");

    foreach ($user->showProfile()as $item){
     echo $item . " ";
    }
