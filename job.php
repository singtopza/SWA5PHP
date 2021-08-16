<?php

class Job{
private  $role;
private  $salary;
private  $id;

public function  getRole(): String{
    return $this->role;
}

public function  setRole($role):void{
    $this->role = $role ;
}

public function getSalary():int{
    return $this->salary;
  }

public function setSalary($salary):void{
    $this->salary = $salary;
}


public function getId():String{
    return $this->id ;

}

public function setId($id):void{
    $this->id = $id;
}

}
?>