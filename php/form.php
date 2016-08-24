<html>
<body>

  <form method="get">
Firsts Name<input type="text" name="first" placeholder="First Name"/>
Last Name<input type="text" name="last" placeholder="Last Name"/><br>	<br></div>
Email<input type="email" name="email"/>
<input type="submit" name="sub"/>
</form>

<?php
if(isset($_REQUEST['sub'])){
  $firstname=$_REQUEST['first'];
  $lastname=$_REQUEST['last'];
  $email=$_REQUEST['email'];
  echo  " Thank you ". $firstname ." " . $lastname ;
  ?>
  <script>
  alert("thanks for giving us your details.Now give us your confidential details");
  document.location="postform.php";
  </script>
  <?php } ?>
</body>
</html>
