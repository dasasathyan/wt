<?php

$dbConnect = mysql_connect("localhost", "root", "zaqwer123");
if (!$dbConnect) {
    die("Not connected : " . mysql_error());
}
echo nl2br("Logged into MySql\n");

$db_selected = mysql_select_db("christ", $dbConnect);
if (!$db_selected) {
    die ("Can't use christ : " . mysql_error());
}
echo "\r\nChrist Database selected\r\n";

$marks= mysql_query("SELECT id,name FROM marks");
while($rows=mysql_fetch_array($marks)){
echo $rows['id']. "." ;
echo $rows['name']."\r\n";
}
?>
