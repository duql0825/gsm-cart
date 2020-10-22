<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>회원가입</title>
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

	<div id ="member">
			<a href="./menu.php">
			<img src="./img/logo.png" alt="" class="Project-Logo" align ="left"  style="width:130px;"><br>
			</a>
		<div class="form">
			<form action="join_ok.php" method="post">
				<input type="text" name="name" placeholder="Name *" required>
				<input type="text" name="id" placeholder="ID ( E-Mail ) *" required>
				<input type="password" name="pw"placeholder="Password *" required>
				<input type="password" name="pw2" placeholder="Password Check *" required>
				<input type="text" name="phone" placeholder="Phone Number">
				<input type="text" name="address" placeholder="Address">
				<input type="submit" value="회원가입">
			</form>
		</div>
	</div>

</body>
</html>
