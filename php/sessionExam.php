<?php

if(isset($_REQUEST['sub'])){
  echo "going in";
  $user=$_REQUEST['user'];
  setcookie("user", $user, time() + (5),"/");
  echo "welcome ". $_COOKIE["user"];
}
 ?>
 <?php
 session_start();
 if(isset($_SESSION['das'])){
   $_SESSION['das']+=1;
 }
 else{
   $_SESSION['das']=;
 }
 echo "You have visited this page ".$_SESSION['das']. " times ";
 ?>
<html>
<body>
<form method="post">
<input type="text" name="user"/>
<input type="submit" name="sub"/>
</form>
</body>
</html>
