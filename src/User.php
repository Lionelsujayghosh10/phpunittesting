<?php


class User{



    public $first_name;

    public $sur_name;


    public function getFullName(){
        return trim("$this->first_name $this->sur_name");
    }
}