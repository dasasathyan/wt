<?php
echo "hi";
class arithmetic{
  public function add($a,$b){
    $c=$a+$b;
    return $c;
  }
}
//$function=new arithmetic();
echo arithmetic::add($_REQUEST['num1'],$_REQUEST['num2']);
//echo "total value is " .$total;
?>
