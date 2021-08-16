<?php
require('./job.php');

class Person{
  
  private Object $job;

  public function __construct(){
    $this->job = new Job();
    $this->job->setSalary(10000);
  }

  public function getSalary(): int
  {
    return $this->job->getSalary();
  }
}
$person = new Person();
$person->getSalary();

$salary = $person->getSalary();
print ($salary);
?>