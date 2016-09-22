<html>
<head>
<style>
h2{
	cursor:pointer;
}
</style>
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
	$(".veghe").mouseup(function(){ //mouseover mouseenter mouseleave mousedown mouseup hover
		$(".fruits").hide(1000);3
		$(".veg").show(1000);
		$(".veghe").css({"color":"blue","font-size":"25px"});
	});
$(".fruhe").mouseup(function(){
		$(".fruits").show(1000);
		$(".veg").hide(1000);
		$(".fruhe").css({"color":"blue","font-size":"25px"});
	});
});3
</script>
</head>
<body>
<h2 class="fruhe">Fruits</h2>
<ul>
<li class="fruits">Pineapple.</li>
<li class="fruits">Watermelon.</li>
</ul>
<h2 class="veghe">Vegetables</h2>
<ul>
<li class="veg">Potato.</li>
<li class="veg">Yam.</li>
</ul>
</body>
</html>