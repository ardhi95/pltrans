<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<table border="1">
			<tr>
				<td>id_armada</td>
				<td>nama_armada</td>
				<td>foto</td>
				<td>deskripsi</td>
				<td>action</td>
			</tr>
			<?php foreach ($query as $key) { ?>
				<tr>
					<td><?php echo $key->id_armada; ?></td>
					<td><?php echo $key->nama_armada; ?></td>
					<td><img src="<?=base_url()?>uploads/<?php echo $key->foto; ?>" width="auto" height="100"></td>
					<td><?php echo $key->deskripsi; ?></td>
					<td>
						<a href="<?php echo site_url('armada/insert/')."$key->id_armada"; ?>">insert</a>
						<a href="<?php echo site_url('armada/edit/')."$key->id_armada"; ?>">edit</a>
						<a href="<?php echo site_url('armada/del/')."$key->id_armada"; ?>">hapus</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	
</body>
</html>