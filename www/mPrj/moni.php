<!doctype html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<title>Datepicker</title>
<script src="js/jquery.min.js" type="text/javascript"></script>
<!-- <link href="css/test.css" rel="stylesheet" type="text/css"> -->
</head>
<body>
	<div>moni</div>	
	<div>이미지 하나</div>
	<div onclick="img_one()">click!</div>
	<div class="list">
		<ul id="moni_list">
		<!--
			<li id="noImg_1">
				<span>title</span>
				<span>2018-03-02</span>
				<div>
 					<img src="http://blog.jinbo.net/attach/615/200937431.jpg" onError="imgError(noImg_1)" style="width:300px;">
					<img id="img_1" src="http://blog.jinbo.net/attach/615/200937431_111.jpg" onError="imgError(this)" style="width:300px;" />
				</div>
			</li>
			-->
		</ul>
	</div>
	<div>이미지 여러개</div>
	<div onclick="img_all()">click!</div>
	<div>
		<ul id="moni_all_list">
		<!--
			<li id="noImg_all_1">
				<span>title</span>
				<span>2018-03-02</span>
				<div>
					<img id="img_all_1" src="http://www.palnews.co.kr/news/photo/201801/92969_25283_5321.jpg" onError="imgError()" style="width:300px;" />
				</div>
			</li>
			<li id="noImg_all_2">
				<span>title</span>
				<span>2018-03-02</span>
				<div>
					<img src="http://img.insight.co.kr/static/2017/12/28/700/h1x32292p9239571g65q.jpg" onError="" style="width:300px;" />
				</div>
			</li>
			<li id="noImg_all_3">
				<span>title</span>
				<span>2018-03-02</span>
				<div>
					<img src="http://blog.jinbo.net/attach/615/200937431.jpg" onError="" style="width:300px;" />
				</div>
			</li>
			-->
		</ul>
	</div>
</body>
<script>
var errCount = 0;
function imgError(imgValid) {
//	console.log($(imgValid).parent().parent());
	$(imgValid).parent().parent().hide();
	errCount ++;
}

function img_one() {
	var list = '';
	
	list += '<li id="noImg_1">';
	list += '<span>title</span>';
	list += '<span>2018-03-02</span>';
	//list += '<div><img id="img_1" src="http://blog.jinbo.net/attach/615/200937431_111.jpg" style="width:300px;" /></div>';
	list += '<div><img id="img_1" src="http://blog.jinbo.net/attach/615/200937431.jpg" onError="imgError(this)" style="width:300px;" /></div>';
list += '</li>';

	$("#moni_list").html(list);
	$("#moni_list li").hide();

	$("#img_1")
	.on('load', function() {
		console.log("img load");
		console.log($(this).parent().parent());
		$(this).parent().parent().show();
	});
}

function img_all() {
	var all_list = '';

	for (var i=1; i<4; i++) {
		if (i == 1) {
			url = "http://blog.jinbo.net/attach/615/200937431.jpg";
		} else if (i == 2) {
			url = "http://img.insight.co.kr/static/2017/12/28/700/h1x32292p9239571g65q_111.jpg";
		} else if (i == 3) {
			url = "http://www.palnews.co.kr/news/photo/201801/92969_25283_5321.jpg";
		}
	
		all_list += '<li id="noImg_all_'+i+'" class="count">';
		all_list += '<span style="margin-right:10px;">title_'+i+'</span>';
		all_list += '<span>2018-03-02</span>';
		all_list += '<div><img id="img_all_'+i+'" src="'+url+'" onError="imgError(this)" style="width:300px;" /></div>';
		all_list += '</li>';
	}	

	$("#moni_all_list").html(all_list);
	$("#moni_all_list li").hide();
	var isValid = 0;
	
	for (var i=1; i<4; i++) {
		$("#img_all_"+i)
		.on('load', function() {
			console.log("img all load");
			console.log($(this).parent().parent());
			$(this).parent().parent().addClass("show");
//			$(this).parent().parent().show();		
			isValid++;
		});
	}
	
	var isValidCheck = setInterval(function() {
		console.log(errCount, isValid);
		if ((isValid + errCount) == 3) {
			console.log("list 3");
			$("#moni_all_list .show").show();
			clearInterval(isValidCheck);
		}	
	}, 500);	
	

}

$(function() {

	$("#img_all_1")
	.on('load', function() {
		console.log("img all load");
	});

});
</script>
</html>