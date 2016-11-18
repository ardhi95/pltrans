<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo site_url('armada/insertData') ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id_armada">
		jam <input type="text" name="jam"><br>
		ket_driver  <select name="ket_driver">
						<?php foreach ($sql as $key) { ?>
							<option value=""><?php echo $key; ?></option>
						<?php } ?>
					</select>
		<br>harga <input type="text" name="harga"><br>
		<input type="submit" value="add">
	</form>
</body>
</html>