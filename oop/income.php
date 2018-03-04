<?php

class User{
  public $count_used = 0;
  public $all_sum = 0;
  public $nalog = 0;

  public function putSalary($all_sum){
    if ($all_sum > 0) {
      $this -> count_used++;
      $this -> all_sum += $all_sum * 0.9;
      $this -> nalog += $all_sum * 0.1;
    }
  }

  public function sayResult(){
    echo ('you put ' . $this -> all_sum . ' nalog ' . $this -> nalog . ' count put salary ' . $this -> count_used);
  }

  public function getMoney($user_get){
    //sam dolelaesh
  }


}
  $human = new User();
  $human -> putSalary(200);
  $human -> putSalary(100);
  $human -> putSalary(100);


  $human -> sayResult();
 ?>
