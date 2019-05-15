<?php

class EtudiantModel extends UserModel {

    private $name;
    private $class;
    private $note = [];

    function __construct(string $name, string $class, string $email = "mek@gmail.com", string $pass = "mek")
    {
        parent::__construct($email, $pass);
        $this->name = $name;
        $this->class = $class;
    }

}