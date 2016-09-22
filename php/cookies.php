<?php
$user="Dasa Sathyan";
setcookie("user", $user, time() + (5), "/");
?>
<html>
<body>

<?php
    //echo $name;
    echo "welcome ". $_COOKIE["user"];
?>

</body>
</html>
