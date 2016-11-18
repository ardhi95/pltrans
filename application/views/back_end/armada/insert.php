<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo site_url('armada/insertData') ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id_armada">
		nama_armada <input type="text" name="nama_armada"><br>
		foto <input type="file" name="upload"><br>
		deskripsi <input type="text" name="deskripsi"><br>
		<input type="submit" value="add">
	</form>
</body>
</html>