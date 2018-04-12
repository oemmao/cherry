<!doctype html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<title>Datepicker</title>
<script src="js/jquery.min.js" type="text/javascript"></script>
<!-- <link href="css/test.css" rel="stylesheet" type="text/css"> -->
<style>
li {
	margin: 10px 0;
	padding: 10px;
	list-style: none;
}
.name {
	background:#fff;
	display: inline-block;
	width: 150px;
	
}
.name > input{
	background:transparent;
	width: 50%;
	border : 0;
	padding: 5%;
	font-size: 17px;
}
.name .modifyMode{
	background:#fff;
	width: 90%;
	border : 1px #ddd solid;
	padding: 5%;
}
.name .btn_modifyChk {
	display : none;
}
</style> 
</head>
<body>
	<div>double Click</div>
	<div id="list_show">list show!</div>
	<div class="list">
		<ul id="rack_list">
		</ul>
	</div>
</body>
<script>
function all_list() {
	var listArr = new Array();
	for (var i=0; i<5; i++) {
		listArr[i] = new Array();
		listArr[i]['name'] = "name_"+i;
		listArr[i]['date'] = "2018-03-11_"+i;
	}
	
	console.log(listArr);
	var list = '';

	for (var j=0; j<listArr.length; j++) {
		list += '<li>';
		list += '<span class="name"><input type="text" class="modifyName" value="'+listArr[j]['name']+'" disabled/> <button class="btn_modifyChk">확인</button></span>';
		list += '<span class="date">'+listArr[j]['date']+'</span>';
		list += '</li>';
	}
	

	$("#rack_list").html(list);
}
$(function() {
	$("#list_show").on("click", function() {
		all_list();

		$(".name").on("dblclick", function() {
			console.log("clickkkk");
			$(this).children("input").attr("disabled",false);
			$(this).children("input").focus();
			$(this).children(".btn_modifyChk").show();
	
			$($(this).children(".btn_modifyChk")).on("click", function() {
				console.log($(this).parent().children("input").val());
				$("input").attr("disabled",true);
				$(this).hide();
			});

		});

	});	

});
</script>
</html>