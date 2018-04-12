<!doctype html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<title>Datepicker</title>
<script src="js/jquery.min.js" type="text/javascript"></script>
<!-- <link href="css/test.css" rel="stylesheet" type="text/css"> -->
<script src="js/lc_switch.min.js" type="text/javascript"></script>
<link href="lc_switch.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div>switch</div>
	<div class="switch-area">
		<form>
			<span class="swap-deco" id="swap_text">SWAP</span>	
			<div class="lcs_wrap" id="swap_select">
				<input type="checkbox" name="sample" value="1" class="switch">
				<div class="lcs_switch lcs_checkbox_switch lcs_off">
					<div class="lcs_cursor"></div>
					<div class="lcs_label lcs_label_on">보이기</div>
					<div class="lcs_label lcs_label_off">숨김</div>
				</div>
			</div>
		</form>
	</div>
</body>
<script>

$(function() {
	$("input .switch").lc_switch();
//	$('input').lcs_on();
	
//	$("#swap_select").on("click", function() {
//		console.log($(this).html());
//		console.log($("#swap_select").hasClass(".lcs_wrap"));
//	});
	/*
	$("input .switch").lcs_on();


	// triggered each time a field changes status
	$('body').delegate('.lcs_check', 'lcs-statuschange', function() {
		var status = ($(this).is(':checked')) ? 'checked' : 'unchecked';
		console.log('field changed status: '+ status );
	});
		
		
	// triggered each time a field is checked
	$('body').delegate('.lcs_check', 'lcs-on', function() {
		 console.log('field is checked');
	});
		

	// triggered each time a field is unchecked
	$('body').delegate('.lcs_check', 'lcs-off', function() {
		 console.log('field is unchecked');
	});
	*/
});
</script>
</html>