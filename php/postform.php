<html>
<body>
  <h1>Enter your confidential data confidentally. We will preserve it.. </h1>
<form method="post">
  Mobile Number: <input type="text" name="mobno" placeholder="Enter ur mobile no."/>
  Bank account : <input type="text" name="acc" placeholder="Enter ur account no."/>
  Password:<input type="password" name="password" placeholder="enter ur password"/>
  <input type="submit" name="sub"/>
</form>
<?php
if(isset($_REQUEST['sub'])){
  $mobile=$_REQUEST['mobno'];
  $accNo=$_REQUEST['acc'];
  $password=$_REQUEST['password'];
  echo "We said it for fun..We have hacked your ".$accNo." having ".$password;
  ?>
  <script>
  alert("Thank you.. ");
  </script>
<?php }
 ?>
</body>
</html>
