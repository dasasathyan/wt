<?php

session_start();
if(isset($_SESSION['das'])){
$_SESSION['das']+=1;
}
else{
$_SESSION['das']=1;
}
echo "you have visited this page ".$_SESSION['das'];
?>
