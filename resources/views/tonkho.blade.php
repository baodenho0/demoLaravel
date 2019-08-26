<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Ton kho</h1>
	<form action="/cap-nhat-ton-kho" method="post">
		@csrf()
		<input type="text" name="thang" placeholder="thang">
		<input type="text" name="trangthai" placeholder="trang thai">
		<input type="submit">
	</form>
</body>
</html>