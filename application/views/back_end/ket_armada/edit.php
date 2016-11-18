<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($query as $key) { ?>
		<form action="<?php echo site_url('armada/editData'); ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id_armada" value="<?php echo $key->id_armada; ?>">
			nama_armada <input type="text" name="nama_armada" value="<?php echo $key->nama_armada; ?>"><br>
			foto <input type="file" name="foto" value="<?php echo $key->foto; ?>"><br>
			deskripsi <input type="text" name="deskripsi" value="<?php echo $key->deskripsi; ?>"><br>
			<input type="submit" value="edit">
		</form>
	<?php } ?>
</body>
</html>