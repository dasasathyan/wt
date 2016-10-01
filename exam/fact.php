<html>
<head>
  <script>
function fact(){
//alert("going in");
var num=document.getElementById("num").value;
var fact=1;
for(var i=1;i<=num;i++){
  fact*=i;
}
alert("The factorial of " +num+ " is "+fact);
}
</script>
</head>
<body>
<input type="text" id="num"/>
<input type="submit" onmouseover="fact()"/>
</body>
</html>
