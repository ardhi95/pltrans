<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($query as $key) { ?>
		<form action="<?php echo site_url('GaleriWisata/editData/')."$key->id_galeri_wisata"; ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id_galeri_wisata" value="<?php echo $key->id_galeri_wisata; ?>">
			photo <input type="file" name="photo" value="<?php echo $key->nama_galeri_wisata; ?>"><br>
			<input type="hidden" name="id_info" value="<?php echo $key->id_info; ?>">
			
			<input type="submit" value="edit">
		</form>
	<?php } ?>
</body>
</html>