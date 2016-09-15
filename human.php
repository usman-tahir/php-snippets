<?php

class Human {
  
  # Private instance properties
  private $name;
  private $age;
  private $gender;
  
  # Constructor method
  public function __construct($name = "", $age = 0, $gender = "unknown") {
    $this -> setName($name);
    $this -> setAge($age);
    $this -> setGender($gender);
    return $this;
  }
  
  # Get and Set methods
  public function getName() {
    return $this -> name;
  }
  
  public function setName($name) {
    $this -> name = $name;
    return $this;
  }
  
  public function getAge() {
    return $this -> age;
  }
  
  public function setAge($age) {
    $this -> age = $age;
    return $this;
  }
  
  public function getGender() {
    return $this -> gender;
  }
  
  public function setGender($gender) {
    $this -> gender = $gender;
    return $this;
  }
  
  # 'toString()' method
  public function description() {
    return $this -> getName() . " is a " . $this -> getAge() . " year old " . $this -> getGender() . ".";
  }
  
}

$usman = new Human("Usman Tahir", 22, "male");
# echo $usman -> description();

# Class Inheritance
class Student extends Human {
  
  private static $studentIdCounter = 0;
  private $studentId;
  private $school;
  
  # Class constructor (Child) that Parent constructor 
  public function __construct($name = "", $age = 0, $gender = "unknown", $school = "") {
    parent::__construct($name, $age, $gender);
    $this -> setSchool($school);
    $this -> setStudentId(self::$studentIdCounter += 1); # Reference static properties/methods with self
  }
  
  public function getStudentId() {
    return $this -> studentId;
  }
  
  public function setStudentId($studentId) {
    $this -> studentId = $studentId;
  }
  
  public function getSchool() {
    return $this -> school;
  }
  
  public function setSchool($school) {
    $this -> school = $school;
    return $this;
  }
  
  # Static method for accessing $studentIdCounter
  public static function getStudentIdCounter() {
    return self::$studentIdCounter;
  }
  
  # parent::(reference) is used here and in the constructor to reference the Parent object;
  # Change reference to anything you want to access from the Parent object
  public function description() {
    $parentDescription = parent::description();
    return $parentDescription . " Their student ID is " . $this -> getStudentId() . " and they go to " . $this -> getSchool() . ".<br>";
  }
  
}

# Sample Student objects
$usmanStudent = new Student("Usman Tahir", 22, "male", "GMU");
echo $usmanStudent -> description();

$johnStudent = new Student("John Doe", 21, "male", "GMU");
echo $johnStudent -> description();