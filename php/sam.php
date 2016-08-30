<html>
<body>



<form method="get">
Name: <input type="text" name="name">
Email: <input type="text" name="email">
<input type="submit" name="sub"/>
</form>
<?php 
echo "shut up sakina";
if(isset($_REQUEST['sub'])){
  $firstname=$_REQUEST['name'];
  echo "shut up sakina";
  echo $firstname; 
}
?>
</body>
</html> 