<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo site_url('galeri_pl/processUpload'); ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id">
		photo <input type="file" name="upload" id="">
		<input type="submit" value="Upload">
	</form>
</body>
</html>