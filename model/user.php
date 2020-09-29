<?php

class User {
    // Atributos
    private $id_user;
    private $email;
    private $password;
    //construc function
    // Las funciones siempre serán public
    public function __construct($email, $password){
        $this->email = $email;
        $this->password = $password;
    }
    //metodos getter and setters

    public function getEmail(){
         return $this->email;
    }

    public function getPassword(){
        return $this->password;
   }  
    
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
   
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }   

    
    public function getId_user()
    {
        return $this->id_user;
    }

    
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }
}