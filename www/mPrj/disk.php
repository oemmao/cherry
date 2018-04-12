<!doctype html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<title>Datepicker</title>
<script src="js/jquery.min.js" type="text/javascript"></script>
<!-- <link href="css/test.css" rel="stylesheet" type="text/css"> -->
</head>
<body>
	<div>disk</div>
	<div onclick="all_server()">click!</div>		
	<div class="list">
		<ul id="disk_list">
		</ul>
	</div>	
</body>
<script>
function all_server() {
	var period = new Array();
	period.push("day");
	period.push("week");
	period.push("month");
	
	var list = '';
	
	for (var k=0; k<period.length; k++){
		console.log(k +" => "+ period);
		if (period[k] == "day") {
			period_text = '하루';
		} else if (period[k] == "week") {
			period_text = '1주';
		} else if (period[k] == "month") {
			period_text = '1달';
		}
		
		for (var j=1; j<=3; j++) {
			if (j == 1 && k == 0) {
				if (period[0] == "day") {
					title = '제목추가';		
				} else if (period[0] == "week") {
					title = '제목추가';
				}
				
			} else {
				title = '';
			}

			list += '<li id="list_'+k+'_'+j+'">';
			list += '<span>'+title+'</span>';	
			list += '<div>내용 : '+period_text+'</div>';	
			list += '</li>';	
		}
	}

	
	$("#disk_list").html(list);
		
}
</script>
</html>