<html>
<head>
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
	$("input").focus(function(){
	$(this).css("background-color","blue");
	});
	$("input").blur(function(){
	$(this).css("background-color","white");
	});
});
</script>
</head>
<body>
Name<input type="text" name="First Name"/><br>
MAIL ID<input type="mail" name="Mail ID"/>
</body>
</html>