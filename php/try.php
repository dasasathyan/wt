<html>
<head>
<style>
.invisi{
  display: none;
}

</style>
  <script src="jquery.js"></script>
  <script>
  $(document).ready(function(){
    $(".show").click(function(){
  		$(".invisi").show(00);
  	});
    $(".show").click(function(){
  		$(".visi").hide(2000);
  	});
  });
  </script>
</head>
<body>
<form method="get" class="visi">
Firsts Name<input type="text" name="first" placeholder="First Name"/>
Last Name<input type="text" name="last" placeholder="Last Name"/><br>	<br></div>
Email<input type="email" name="email"/>
<input type="submit" class="show" name="sub"/>
<p>how are u </p>
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
</script>
<?php } ?>

<form method="post" class="invisi">
  Mobile Number: <input type="text" name="mobno" placeholder="Enter ur mobile no."/>
  Bank account : <input type="text" name="acc" placeholder="Enter ur account no."/>
  Password:<input type="password" name="password" placeholder="enter ur password"/>
  <input type="submit" name="pos">
</form>
<?php
if(isset($_REQUEST['pos'])){
  $mobile=$_REQUEST['mobno'];
  $accNo=$_REQUEST['acc'];
  $password=$_REQUEST['password'];
  echo "We said it for fun..We have hacked your ".$accNo." having ".$password;
}
  ?>

</body>
</html>
