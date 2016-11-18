<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<table border="1">
			<tr>
				<td>id_promo</td>
				<td>judul</td>
				<td>deskripsi</td>
				<td>foto</td>
				<td>link</td>
				<td>action</td>
			</tr>
			<?php foreach ($query as $key) { ?>
				<tr>
					<td><?php echo $key->id_promo; ?></td>
					<td><?php echo $key->judul; ?></td>
					<td><?php echo $key->deskripsi; ?></td>
					<td><img src="<?=base_url()?>uploads/<?php echo $key->foto; ?>" width="auto" height="100"></td>
					<td><?php echo $key->link; ?></td>
					<td>
						<a href="<?php echo site_url('promo/insert'); ?>">insert</a>
						<a href="<?php echo site_url('promo/edit/')."$key->id_promo"; ?>">edit</a>
						<a href="<?php echo site_url('promo/del/')."$key->id_promo"; ?>">hapus</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	
</body>
</html>