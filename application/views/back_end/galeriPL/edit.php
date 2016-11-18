<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($sql as $key) { ?>
	<form action="<?php echo site_url('galeri_pl/processEdit'); ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $key->id_galeri_pl; ?>">
		photo <input type="file" name="upload" value="<?php echo $key->nama_pl; ?>">
		<input type="submit" value="Upload">
	</form>
	<?php } ?>
</body>
</html>