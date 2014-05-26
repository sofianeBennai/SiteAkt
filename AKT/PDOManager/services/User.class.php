<?php

require('../../load.php');

class User {
    
    private $name;
    private $firstName;
    private $phone;
    private $email;
    private $password;
    private $job;
    
    private $adresse;
    private $role = TIERS;
    
    
    
    
    public function setRole($role) {
        $this->role = $role;
    }
    
    public function getRole($role) {
        return $this->role;
    }
    
    
    public function setPassword($password) {
        $this->password = $password;
    }
    
    public function getPassword() {
        return $this->password;
    }
    
    
}

?>