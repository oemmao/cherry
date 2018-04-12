<p>write</p>

<div>
    <section>
        <article class="col-xs-12 ">
            <div>
                <h3>
                <span>글쓰기</span>
                </h3>
                <form method="post" enctype="multipart/form-data" class="form-horizontal" id="frmWrite" name="frmWrite">
                <div class="form-group">
                    <label for="inputSubject" class="col-sm-2 control-label">제목</label>
                    <div class="col-sm-10">
                        <input type="inputSubject" class="form-control" id="subject" name="subject" placeholder="제목">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputFile" class="col-sm-2 control-label" >파일첨부</label>
                    <div class="col-sm-10">
                        <input type="file" id="fileToUpload" name="fileToUpload">
						<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                        <!-- <p class="help-block">여기에 블록레벨 도움말 예제</p> -->
                    </div>

                </div>
                <div class="form-group">
                    <label for="inputContent" class="col-sm-2 control-label">내용</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="content" name="content" rows="5"></textarea>
                    </div>
                </div>
                <div class="pull-right">
                    <button type="button" class="btn btn-info" id="frmSubmit">확인</button>
                    <button type="button" class="btn btn-warning" id="clear">다시쓰기</button>
                    <button type="button" class="btn btn-success" onclick="mainGo()" >목록</button>
                </div>
                </form>
            </div>

        </article>
    </section>
</div>
<script type="text/javascript">
function mainGo() {
	document.location.href="/board/main";
}

$(function() {
	$("#frmSubmit").on("click", function() {
		var frmData = new FormData($("#frmWrite")[0]);
		
//		var sFrmData = $("#frmWrite").serialize();
//		console.log(sFrmData);

		$.ajax({
			url:"/board/writeSave",
			type: "post",
			dataType: "json",
			processData: false,
			contentType: false,
			data: frmData,
			success: function(response) {
				console.log(response);
			}
		});

	});
});
</script>