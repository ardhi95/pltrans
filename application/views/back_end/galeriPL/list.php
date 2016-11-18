<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>id_galeri_pl</td>
			<td>nama_pl</td>
			<td>action</td>
		</tr>
		<?php foreach ($sql as $key) { ?>
		<tr>
			<td><?php echo $key->id_galeri_pl; ?></td>
			<td><img src="<?=base_url()?>uploads/<?php echo $key->nama_pl; ?>" width="auto" height="100"></td>
			<td>
				<a href="<?php echo site_url('galeri_pl/up'); ?>">insert</a>
				<a href="<?php echo site_url('galeri_pl/edit/')."$key->id_galeri_pl"; ?>">edit</a>
				<a href="<?php echo site_url('galeri_pl/delete/')."$key->id_galeri_pl"; ?>">delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>