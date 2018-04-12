<!doctype html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<title>list check</title>
<script src="js/jquery.min.js" type="text/javascript"></script>
<style>
.all li{
	width : 300px;
	height : 50px;
	background : gray;
	margin : 5px 0;
}

.on {
	background : red !important;
}
</style>
</head>
<body>
<ul class="all">
	<li class="on" id="click_1"></li>
	<li id="click_2">
		<span id="test_2"></span>
	</li>
	<li id="click_3"></li>
	<li id="click_4"></li>
	<li id="click_5"></li>
</ul>
</body>
<script>
	
	$(".all li").on("click", function() {
		$(".all li").removeClass("on");
		$(this).addClass("on");
	});

	$("#test_2").click();

</script>
</html>