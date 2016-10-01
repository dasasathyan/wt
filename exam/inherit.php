<?php
class name{
public function parent($user){
echo "Welcome " .$user;
}
public function dummy(){
echo " i love you ";
}
}
class puthu extends name{
  public function parent($user){
    echo "Who asked you to come ".$user;
  }
}

$name= new name;
$name->parent("Dasa Sathyan");
$puthu= new puthu;
$name->dummy();
$puthu->parent("Dasa Sathyan");
