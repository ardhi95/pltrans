<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($query as $key) { ?>
		<form action="<?php echo site_url('promo/editData/')."$key->id_promo"; ?>" method="post" enctype="multipart/form-data">
			id_promo <input type="hidden" name="id_promo" value=""><br>
			judul <input type="text" name="judul" value="<?php echo $key->judul; ?>"><br>
			deskripsi <input type="text" name="deskripsi" value="<?php echo $key->deskripsi; ?>"><br>
			foto <input type="file" name="foto" value="<?php echo $key->foto; ?>"><br>
			link <input type="text" name="link" value="<?php echo $key->link; ?>"><br>
			<input type="submit" value="edit">
		</form>
	<?php } ?>
</body>
</html>