<?php

class User {
    public $id = -1;
    public $username;
    public $password;
    public $email;
    
    public static function loadFromID($id) {
        global $data;
        
        if (!isset($data[$id])) {
            return null;
        }
        
        $record = $data[$id];
        $u = new User();
        
        $u->id = $id;
        $u->username = $record['username'];
        $u->password = $record['password'];
        $u->email = $record['email'];
        
        return $u;
    }
    
    public static function loadFromUsername($username) {
        global $data;
        
        $u = new User();
        
        foreach ($data as $k => $record) {
            if ($record['username'] == $username) {
                $u->id = $k;
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