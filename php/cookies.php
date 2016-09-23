<?php

//$user="Dasa Sathyan";
if(isset($_REQUEST['sub'])){
echo "going in";
$user=$_REQUEST['user'];
setcookie("user", $user, time() + (5), "/");
echo "welcome ". $_COOKIE["user"];
}
?>
<html>
<body>
<form method="post">
<input type="text" name="user"/>
<input type="submit" name="sub"/>
</form>
</body>
</html>
