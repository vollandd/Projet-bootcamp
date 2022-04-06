<?php

class User {

    public String $name;
    public String $firstname;
    public String $email;
    public String $password;

    public function __construct($name, $firstname, $email, $password)
    {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->password = $password;
    }

    public function setName(String $name): Void 
    {
        $this->name = $name;
    }

    public function getName(): String 
    {
        return $this->name;
    }

    public function setFirstname(String $firstname): Void 
    {
        $this->firstname = $firstname;
    }

    public function getFirstname(): String 
    {
        return $this->firstname;
    }

    public function setEmail(String $email): Void 
    {
        $this->email = $email;
    }

    public function getEmail(): String 
    {
        return $this->email;
    }

    public function setPassword(String $password): Void 
    {
        $this->password = $password;
    }

    public function getPassword(): String 
    {
        return $this->password;
    }
}

?>