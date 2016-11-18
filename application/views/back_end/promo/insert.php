<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo site_url('Promo/insertData'); ?>" method="post" enctype="multipart/form-data">
		id_promo <input type="text" name="id_promo"><br>
		judul <input type="text" name="judul"><br>
		deskripsi <input type="text" name="deskripsi"><br>
		foto <input type="file" name="foto"><br>
		link <input type="text" name="link"><br>
		<input type="submit" value="add">
	</form>
</body>
</html>