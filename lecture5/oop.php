<?php

class Person {
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

$a = new Person();
$a->firstName = 'Omar';
$a->lastName1 = 'Soto';
$a->lastName2 = 'Fortuno';
$a->dateOfBirth = '2/19/1989';

echo '<pre>' . print_r($a, true) . '</pre>';

$b = new Person('Omar', 'Soto', 'Fortuno', '2/19/1989');

echo '<pre>' . print_r($b, true) . '</pre>';

echo $b->getFullName() . '<br />';
echo 'Years: ' . $b->getCalculatedAge() . '<br />';
echo 'Years: ' . $b->getCalculatedAge() . '<br />';
echo 'Years: ' . $b->getCalculatedAge() . '<br />';
echo 'Years: ' . $b->getCalculatedAge() . '<br />';
echo 'Years: ' . $b->getCalculatedAge() . '<br />';
echo 'Years: ' . $b->getCalculatedAge() . '<br />';

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
    
    public function addGrade(EnrolledCourse $grade) {
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

$c = new Student('Omar', 'Soto', 'Fortuno', '2/19/1989');

$c->addGrade('A');
$c->addGrade('A');
$c->addGrade('B');
$c->addGrade('C'); // SICI 4997

echo '<pre>' . print_r($c, true) . '</pre>';

echo $c->getFullName() . '<br />';
echo 'Years: ' . $c->getCalculatedAge() . '<br />';
echo 'GPA: ' . $c->getCalculatedGPA() . '<br />';

$g = new EnrolledCourse('SICI4997', 'M03', 3, 'B');

echo 'PH: ' . $g->getHonorPoints() . '<br>';

echo 'Example with Enrolled Course<br /><br />';

?>