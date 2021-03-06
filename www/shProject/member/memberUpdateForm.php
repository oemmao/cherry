<?
session_start();
if(!isset($_SESSION['isLogin'])) {
header('Location: http://sflower121.phps.kr/shProject/index.php');
}
header("Content-Type:text/html;charset=utf-8");
include '../db_Info.php';

$idx = $_SESSION['id'];
$sql = "select userID, userName from memberInfo where id='$idx'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<title>welcome to my homepage</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="all_width">
    <? include "../layout/header.php"; ?>
<!--     <? include "../layout/nav.php"; ?> -->
    <section>
        <article class="col-xs-12 article_line">
            <h3>정보수정 페이지</h3><br>
            <form class="form-horizontal" id="memberUpdate" method="post" >
            <div class="form-group">
                <label for="inputID" class="col-md-offset-4 col-sm-2 control-label">아이디</label>
                <div class="col-sm-3">
                    <input type="userid" class="form-control" id="updateID" name="updateID" placeholder="아이디" value="<?= $row['userID']?>" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPW" class="col-md-offset-4 col-sm-2 control-label">비밀번호</label>
                <div class="col-sm-3">
                    <input type="password" class="form-control" id="updatePW" name="updatePW" placeholder="비밀번호">
                </div>
            </div>
            <div class="form-group">
                <label for="updatePWCheck" class="col-md-offset-4 col-sm-2 control-label">비밀번호 재확인</label>
                <div class="col-sm-3">
                    <input type="password" class="form-control" id="updatePWCheck" name="updatePWCheck" placeholder="비밀번호 재확인">
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-md-offset-4 col-sm-2 control-label">이름</label>
                <div class="col-sm-3">
                    <input type="username" class="form-control" id="updateName" name="updateName" value="<?= $row['userName']?>" placeholder="이름">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-md-offset-4 col-sm-2 control-label">성별</label>
                <div class="col-sm-3">
                    <label class="radio-inline">
                    <input type="radio" id="checkGender1" name="checkGender" value="man"> 남자
                    </label>
                    <label class="radio-inline">
                    <input type="radio" id="checkGender2" name="checkGender" value="woman"> 여자
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-5 text-center">
                    <button type="submit" class="btn btn-warning" >정보수정</button>
                    <button type="button" class="btn btn-default" onclick="prevPage()" >이전으로</button>
                </div>

            </div>
            </form>
        </article>
    </section>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/member.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.min.js"></script>

</html>
