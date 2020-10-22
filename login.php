<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
	<title>로그인</title>
		<!-- font awesome -->
		<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.css">

		<!-- style -->
		<link rel="stylesheet" href="./css/style.css">

		<!-- jquery -->
		<script src="./js/jquery-3.2.1.min.js"></script>

		<!-- script -->
		<script src="./js/script.js"></script>

</head>
<body>
	<!-- <?php
	  include_once("./include/header.php");
	?> -->

	<div id="member">
		<a href="./menu.php">
				<img src="./img/logo.png" alt="" class="Project-Logo" align ="left"  style="width:130px;">
		</a>
		<div class="form">
			<form action="login_ok.php" method="post">
				로그인
				&nbsp;&nbsp;&nbsp;<input type="text" placeholder="ID ( E-Mail )" name="id"><br>
				비밀번호
				<input type="password" placeholder="Password" name="pw"><br><br><br>
				<input type="submit" value="로그인"><br>
				계정이 없으시나요?
				<a href="./join.php">
					회원가입
				</a>
			</form>
		</div>
	</div>

</body>
</html>
