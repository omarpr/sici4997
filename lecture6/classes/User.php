<?php

class User {
    public $username;
    public $password;
    public $email;
    
    public static function loadFromUsername($username) {
        global $data;
        
        $u = new User();
        
        foreach ($data as $record) {
            if ($record['username'] == $username) {
                $u->username = $record['username'];
                $u->password = $record['password'];
                $u->email = $record['email'];
                
                return $u;
            }
        }
        
        return null;
    }
    
    public function validatePassword($password) {
        return ($password == $this->password);
    }
}

?>