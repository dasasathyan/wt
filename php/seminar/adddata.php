<html>
<head><link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<title>Dasa Sathyan's BLOG</title>

  </head>

<?php

$dbConnect = mysql_connect("localhost", "root", "zaqwer123");
if (!$dbConnect) {
    die("Not connected : " . mysql_error());
}
//echo nl2br("Logged into MySql\n");

$db_selected = mysql_select_db("christ", $dbConnect);
if (!$db_selected) {
    die ("Can't use christ : " . mysql_error());
}
//echo "\nChrist Database selected\n";
if (isset($_REQUEST['sub'])){
  echo "\ngoing to add\n";
$name=$_REQUEST["name"];
$wt=$_REQUEST["wt"];
$c=$_REQUEST["c"];
$hr=$_REQUEST["hr"];
$dl=$_REQUEST["dl"];
mysql_query("INSERT INTO marks (name,wt,c,hr,dl)VALUES('$name','$wt','$c','$hr','$dl')");
echo "added";
?>
<script>
alert("data added to DB");
document.location="removedata.php";
</script>
<?php
}

/*if (isset($_REQUEST['delete'])){
  echo "going to remove";
  ?>
  <script>
  alert("going to remove");
  document.location="removedata.php";
  </script>

  <?php
}*/
?>
<body style="background-color:#00ccff">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <img src="1.png"/>
    </div>
    <div class="col-md-4"></div>
  </div>
  <form class="form-horizontal" method="post">
    <div class="form-group">
      <label for="name" class="col-sm-4 control-label">Name</label>
    <div class="col-sm-8">
    <input type="text" name="name" class="form-control" placeholder="Enter your name"/>
  </div>
</div>
    <div class="form-group">
      <label for="wt" class="col-sm-4 control-label">Marks in Web Technologies</label>
    <div class="col-sm-8">
      <input type="text" name="wt" class="form-control" placeholder="Enter your Web Technologies mark"/>
    </div>
  </div>
  <div class="form-group">
    <label for="c" class="col-sm-4 control-label">Marks in C programming </label>
  <div class="col-sm-8">
    <input type="text" name="c" class="form-control" placeholder="Enter your C Programming mark"/>
  </div>
</div>
<div class="form-group">
  <label for="hrm" class="col-sm-4 control-label">Marks in HRM</label>
<div class="col-sm-8">
    <input type="text" name="hr" class="form-control" placeholder="Enter your HRM mark"/>
  </div>
</div>
<div class="form-group">
  <label for="dl" class="col-sm-4 control-label">Marks in Digital Logic</label>
<div class="col-sm-8">
    <input type="text" name="dl" class="form-control" placeholder="Enter your Digital Logic mark"/>
  </div>
</div>
  <div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
  <input class="btn btn-default" type="submit" name ="sub" value="ADD Data" >
</div>
</div>
  </form>
</body>
</html
