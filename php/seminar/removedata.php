<html>

<?php


$dbConnect = mysql_connect("localhost", "root", "zaqwer123");
if (!$dbConnect) {
    die("Not connected : " . mysql_error());
}
echo nl2br("Logged into \r\n MySql");

$db_selected = mysql_select_db("christ", $dbConnect);
if (!$db_selected) {
    die ("Can't use christ : " . mysql_error());
}
echo "\nChrist Database selected\n";
$marks= mysql_query("SELECT id,name FROM marks");
while($rows=mysql_fetch_array($marks)){
echo $rows['id']  ;
echo $rows['name'];
}
if (isset($_REQUEST['remove'])){
  ?>
  <script>
  alert("ID removed");
  </script>
  <?php
  echo "going to remove";
  $id=$_REQUEST["id"];
  mysql_query("DELETE FROM marks WHERE id='$id'");
  echo $id." has been removed";
}
?>

<form method="post">
Enter the ID which u want to delete<input type="number" name="id"/>
<input type="submit" name="remove"/>
</form>
</html>
