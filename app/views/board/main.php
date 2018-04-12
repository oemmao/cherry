<div>
    <section>
        <article class="col-xs-12">
            <div>
                <h3>
                <span>게시판 리스트</span>
                </h3>
                <table class="table">
					<thead>
					<tr>
						<th class="col-xs-1 text-center">No.</th>
						<th class="col-xs-4 text-center">제목</th>
						<th class="col-xs-2 text-center">작성</th>
						<th class="col-xs-3 text-center">작성일</th>
						<th class="col-xs-2 text-center">조회</th>
					</tr>
					</thead>
				</table>
			</div>
		</article>
    </section>
</div>
<form>
	<div class="btn-deco">
		<button type="button" class="btn btn-info" id="write" onclick="writeGo()">글쓰기</button>
	</div>
</form>
<script type="text/javascript">
function writeGo() {
	document.location.href="/board/write";
}
$(function() {
//	$("#write").on("click", function() {
//		console.log("button click white");
//	});
});
</script>