<html>
<?php

$dbConnect = mysql_connect("localhost", "root", "zaqwer123");
if (!$dbConnect) {
    die("Not connected : " . mysql_error());
}
echo "\nLogged into MySql\n";

$db_selected = mysql_select_db("christ", $dbConnect);
if (!$db_selected) {
    die ("Can't use christ : " . mysql_error());
}
echo "\nChrist Database selected\n";
if (isset($_REQUEST['sub'])){
  echo "going in";
$name=$_REQUEST["name"];
$wt=$_REQUEST["wt"];
$c=$_REQUEST["c"];
$hr=$_REQUEST["hr"];
$dl=$_REQUEST["dl"];
mysql_query("INSERT INTO marks (name,wt,c,hr,dl)VALUES('$name','$wt','$c','$hr','$dl')");
echo "added";
}
?>
<body>
  <form method="post">
    Name<input type="text" name="name" placeholder="Enter your name"/>
    Web Technologies mark<input type="text" name="wt" placeholder="Enter your Web Technologies mark"/>
    C Programming mark<input type="text" name="c" placeholder="Enter your C Programming mark"/>
    HRM mark<input type="text" name="hr" placeholder="Enter your HRM mark"/>
    Digital Logic mark<input type="text" name="dl" placeholder="Enter your Digital Logic mark"/>
    <input type="submit" name="sub"/>
  </form>
</body>
</html>
