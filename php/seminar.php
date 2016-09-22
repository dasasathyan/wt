<html>
<?php

$dbConnect = mysql_connect("localhost", "root", "zaqwer123");
/*if (!$dbConnect) {
    die("Not connected : " . mysql_error());
}*/
echo "Logged into MySql";

$db_selected = mysql_select_db("christ", $dbConnect);
/*if (!$db_selected) {
    die ("Can't use christ : " . mysql_error());
}*/
echo "\nChrist Database selected\n";
if (isset($_REQUEST['add'])){
  echo "\ngoing to add\n";
$name=$_REQUEST["name"];
$wt=$_REQUEST["wt"];
$c=$_REQUEST["c"];
$hr=$_REQUEST["hr"];
$dl=$_REQUEST["dl"];
mysql_query("INSERT INTO marks (name,wt,c,hr,dl)VALUES('$name','$wt','$c','$hr','$dl')");
echo "added";
}
if (isset($_REQUEST['delete'])){
  echo "going to remove";
  ?>
  <script>
  alert("going to remove");
  document.location="remove.php";
  </script>

  <?php
}
?>
<body>
  <form method="post">
    Name<input type="text" name="name" placeholder="Enter your name"/><br>
    Web Technologies mark<input type="text" name="wt" placeholder="Enter your Web Technologies mark"/><br>
    C Programming mark<input type="text" name="c" placeholder="Enter your C Programming mark"/><br>
    HRM mark<input type="text" name="hr" placeholder="Enter your HRM mark"/><br>
    Digital Logic mark<input type="text" name="dl" placeholder="Enter your Digital Logic mark"/><br>
    <p> What do you want to do?</p>
    ADD DATA<input type="submit" name="add" value="ADD Data"/><br>
    REMOVE DATA<input type="submit" name="delete" value="REMOVE Data"/><br>
  </form>
</body>
</html>
