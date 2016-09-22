<html>
<?php

$dbConnect=mysql_connect("localhost","root","zaqwer123");
$dbSelect=mysql_select_db("christ",$dbConnect);
if(isset($_REQUEST['add'])){
  echo "going in";
  $name=$_REQUEST['name'];
  $wt=$_REQUEST['wt'];
  $c=$_REQUEST['c'];
  $dl=$_REQUEST['dl'];
  $hrm=$_REQUEST['hrm'];
  //$stat=$_REQUEST['stats'];
  mysql_query("INSERT INTO marks(name,wt,c,dl,hr)VALUES('$name','$wt','$c','$hrm','$dl')");
}
if(isset($_REQUEST['update'])){
  echo "updating";
$id=$_REQUEST['no'];
$new=$_REQUEST['new'];
echo $id.$new;
//mysql_query("UPDATE marks SET name='$new' WHERE id=$id");
mysql_query("DELETE FROM marks WHERE id=$id");
}
?>
<body>

  <center>
    <form method="post">
<table>
<tr>
<td>Enter your name</td>
<td><input type="text" name="name"/></td></tr>

<tr><td>Enter your WT marks</td>
<td><input type="text" name="wt"/></td></tr>

<tr><td>Enter your C marks</td>
<td><input type="text" name="c"/></td></tr>

<tr><td>Enter your DL marks</td>
<td><input type="text" name="dl"/></td></tr>

<tr><td>Enter your HRM marks</td>
<td><input type="text" name="hrm"/></td></tr>

<tr><td>Enter your STATS marks</td>
<td><input type="text" name="stats"/></td>
</tr>
<tr><td><input type="submit" value="add" name="add"/></td></tr>
  <tr>
    <td>ID</td>
    <td><input type="text" name="no"/></td>
  </tr>
  <tr>
  <td><input type="submit" value="update" name="update"/></td>
  <td>Enter the new name</td>
  <td><input type="text" name="new"/></td>
</tr>
</table>
</form>
</center>
</body>
</html>
