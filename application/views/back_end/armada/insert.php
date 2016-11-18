<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo site_url('KetArmada/DoInsert') ?>" method="post">
		<input type="hidden" name="id_ket_armada">
		jam <select name="jam">
				<?php foreach ($sql as $key) { ?>
					<option value="<?php echo $key; ?>"><?php echo $key; ?></option>
				<?php } ?>
			</select><br>
		ket_driver <br> <textarea name="ket_driver" id="" cols="30" rows="10"></textarea><br>
		harga <input type="text" name="harga"><br>
		<input type="submit" value="add">
	</form>
</body>
</html>