<?php
  class User {
    public $name;
    public $age;

    public function __construct($user_name, $user_age){
      $this -> name = $user_name;
      $this -> age = $user_age;
    }

    public function sayHello(){
      echo ('hello i am ' . $this -> name);
    }
  }

  $human = new User('vasya', 18);
  $human -> sayHello();



 ?>
