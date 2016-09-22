<html>
<head>
<style>
p{
	display: none;
}

	</style>
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
	$(".hide").click(function(){ //mouseover mouseenter mouseleave mousedown mouseup hover
		$("p").hide(900);
	});
	$(".show").click(function(){
		$("p").show(900);
	});
	$(".toggle").click(function(){
		$("p").toggle(900);
	});
});
</script>
</head>
<body>
<h2>Heading</h2>
<p>This is a paragraph.</p>
<p>This is also a paragraph.</p>
<button class="hide">Hide</button>
<button class="show">Show</button>
<button class="toggle">Toggle</button>
<!--<input type="submit" class="show" name="sub"/>
<input type="submit" class="hide" name="sub"/>
<input type="submit" class="toggle" name="sub"/>-->
</body>
</html>
