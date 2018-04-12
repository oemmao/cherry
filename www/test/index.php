<!doctype html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<title>Datepicker</title>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<!-- <link href="css/test.css" rel="stylesheet" type="text/css"> -->
</head>
<body>
<p>데이터피커</p>
<div class="datepicker_c" id="datepicker_id"></div>
<br>
<div>
<table>
	<thead>
		<tr>
			<th>넘버</th>
			<th>제목</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td id="one" class="num" >11</td>
			<td class="num" >냐냐냐</td>
		</tr>
		<tr>
			<td>22</td>
			<td>두두두</td>
		</tr>
	</tbody>
</table>
</div>
</body>
<script>
var noSunday = function(date) {
	return [(date.getDay() != 0), ''];
}

var date_validate = function(isAfter) {
	var full_date = new Date();
	if (isAfter) {
		full_date.setMonth(full_date.getMonth() + 3);
	}
	var year = full_date.getFullYear();
	var month = full_date.getMonth() + 1;
	var date = full_date.getDate();

	if (month < 10) {
		month = '0'+ month;
	}

	if (date < 10) {
		date = '0'+ date;
	}

	return year + '-' + month + '-' + date;
}

var noToday = function(date) {
	var now_date = date_validate(false);
	console.log('오늘 날짜: ' + now_date);

	var after_date = date_validate(true);
	console.log('오늘 날짜 이후 3개월: ' + after_date);

	var select_date = new Date(date);
	if (date == now_date) {
		console.log('오늘 이후 날짜를 선택하셈');
	//select_date가 토요일이고 (&&) 오늘부터 3개월 이내인지	
	} else if (select_date.getDay() == 6 && date > after_date) {
		console.log('토요일은 3개월 이내로 선택하셈');
	} else {
		return true;
	}
	return false;
}

var noSaturday = function(date) {
}

$(function() {
	$('#datepicker_id').datepicker({
		minDate: 0,
		maxDate: '6m',
		dateFormat: 'yy-mm-dd',	
		beforeShowDay: noSunday,
		onSelect: function(select_date) {
			console.log(select_date); 
			if (noToday(select_date)) {
				alert('ajax 실행해염');
			}
		}
	});
	$('.num').click(function() {
		console.log('click event 실행');
		console.log($(this).text());
		$('.num').css("background", "transparent");
		$(this).css("background", "orange");
	});
});	
</script>
</html>