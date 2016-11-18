<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($sql as $key) { ?>
	<form action="<?php echo site_url('GaleriWisata/prosesInsert'); ?>" method="post" enctype="multipart/form-data">
		id_galeri<input type="text" name="id_galeri"><br>
		photo <input type="file" name="photo"><br>
		id_info<input type="text" name="id_info" value="<?php echo $key->id_info; ?>"><br>
		<input type="submit" value="add">
	</form>
	<?php } ?>
</body>
</html>