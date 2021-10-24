<?php

class User{
    public $id;
    public $username;
    public $password;

    public function _construct($id=null,$username=null,$password=null){
        $this->id = $id;        
        $this->username = $username;
        $this->password = $password;

    }

    public function logIn($username,$password,mysqli $conn){
        $query = "select * from user where username=$username and password=$password";
        return true;
    }
}

?>