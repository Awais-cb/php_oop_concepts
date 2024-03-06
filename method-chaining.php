<?php


class studentDetails {

 public $id = 0;
 public $name = '';
 public $address ='';

 public function setStudentId($id) {
  $this->id = $id;
  return $this;
 }

 public function setStudentName($name) {
  $this->name = $name;
  return $this;
 }

 public function setStudentAddress($address) {
  $this->address = $address;
  return $this;
 }
 
 public function getStudentInfo() {
  return 'student '. $this->name. ' of id '.$this->id. ' stays at '. $this->address;
 }
 
}

$obj = new studentDetails();
$studentInfo = $obj->setStudentId(1423)
                   ->setStudentName('John')
                   ->setStudentAddress('LA')
                   ->getStudentInfo();

print_r($studentInfo);