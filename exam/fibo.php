<html>
<head>
  <script>
function fibo(){
//alert("going in");
var num=document.getElementById("num").value;
var first=0,second=1,temp;
for(var i=0;i<num;i++){
  temp=first+second;
  first=second;
  second=temp;
console.log("The fibo series are " +second);
}
}
</script>
</head>
<body>
<input type="text" id="num"/>
<input type="submit" onmouseover="fibo()"/>
</body>
</html>
