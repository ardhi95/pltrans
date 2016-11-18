<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<table border="1">
			<tr>
				<td>id_galeri_wisata</td>
				<td>photo</td>
				<td>id_info</td>
				<td>action</td>
			</tr>
			<?php foreach ($sql as $key) { ?>
				<tr>
					<td><?php echo $key->id_galeri_wisata; ?></td>
					<td><img src="<?=base_url()?>uploads/<?php echo $key->nama_galeri_wisata; ?>" width="auto" height="100"></td>

					<td><?php echo $key->id_info; ?></td>
					<td>
						<a href="<?php echo site_url('GaleriWisata/edit/')."$key->id_galeri_wisata"; ?>">edit</a>
						<a href="<?php echo site_url('GaleriWisata/del/')."$key->id_galeri_wisata"; ?>">hapus</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	
</body>
</html>