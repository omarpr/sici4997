<?php

class User {
    public $username;
    public $password;
    public $email;
    
    public static function loadFromUsername($username) {
        global $data;
        
        foreach ($data as $record) {
            if ($record['username'] == $username) {
                $this->username = $record['username'];
                $this->password = $record['password'];
                $this->email = $record['email'];
                
                return;
            }
        }
    }
}

?>