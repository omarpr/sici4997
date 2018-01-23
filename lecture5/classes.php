<?php

class Person {
    private $id = -1;
    public $firstName;
    public $lastName1;
    public $lastName2;
    public $dateOfBirth;
    
    public function __construct($firstName = '', $lastName1 = '', $lastName2 = '', $dateOfBirth = '') {
        $this->firstName = $firstName;
        $this->lastName1 = $lastName1;
        $this->lastName2 = $lastName2;
        $this->dateOfBirth = $dateOfBirth;
    }
    
    public static function loadByFirstName($firstName) {
        global $persons;
        
        foreach ($persons as $k => $person) {
            if ($person[0] == $firstName) {
                $obj = new Person($person[0], $person[1], $person[2], $person[3]);
                $obj->id = $k;
                
                return $obj;
            }
        }
        
        return null;
    }
    
    public function save() {
        global $persons;
        
        if ($this->id == -1) {
            // INSERT
            
            $persons[] = [$this->firstName, $this->lastName1, $this->lastName2, $this->dateOfBirth];
            
            $keys = array_keys($persons);
            $this->id = $keys[count($keys) - 1];
        } else {
            // UPDATE
            
            $persons[$this->id] = [$this->firstName, $this->lastName1, $this->lastName2, $this->dateOfBirth];
        }
    }
    
    public function getFullName() {
        return "$this->firstName $this->lastName1 $this->lastName2";
    }
    
    public function getCalculatedAge() {
        static $age = null;
        
        if (is_null($age)) {
            $t = strtotime($this->dateOfBirth);
            $diff = time() - $t;
            $year = 60 * 60 * 24 * 365;
            $age = floor($diff / $year);
            
            echo 'I calculated it!<br />';
        }
        
        return $age;
    }
}

class Student extends Person {
    public $grades = [];
    
    public function addGrade($grade) {
        $this->grades[] = $grade;
    }
    
    public function getCalculatedGPA() {
        $ph = 0;
        
        foreach ($this->grades as $grade) {
            if ($grade == 'A') {
                $ph += 4;
            } elseif ($grade == 'B') {
                $ph += 3;
            } elseif ($grade == 'C') {
                $ph += 2;
            } elseif ($grade == 'D') {
                $ph += 1;
            }
        }
        
        return round($ph / count($this->grades), 2);
    }
    
    public function getFullName() {
        $name = parent::getFullName();
        return $name . ' (Student)';
    }
}

class Student2 extends Person {
    public $grades = [];
    
    public function addEnrolledCourse(EnrolledCourse $grade) {
        $this->grades[] = $grade;
    }
    
    public function getCalculatedGPA() {
        $ph = 0;
        $cr = 0;
        
        foreach ($this->grades as $grade) {
            $cr += $grade->credits;
            $ph += $grade->getHonorPoints();
        }
        
        return round($ph / $cr, 2);
    }
    
    public function getFullName() {
        $name = parent::getFullName();
        return $name . ' (Student)';
    }
}

class EnrolledCourse {
    public $code;
    public $section;
    public $credits = 3;
    public $grade;
    
    public function __construct($code, $section, $credits, $grade) {
        $this->code = $code;
        $this->section = $section;
        $this->credits = $credits;
        $this->grade = $grade;
    }
    
    public function getHonorPoints() {
        if ($this->grade == 'A') {
            $ph = 4;
        } elseif ($this->grade == 'B') {
            $ph = 3;
        } elseif ($this->grade == 'C') {
            $ph = 2;
        } elseif ($this->grade == 'D') {
            $ph = 1;
        } else {
            $ph = 0;
        }
        
        return $ph * $this->credits;
    }
}

?>