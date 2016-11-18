<?php $this->load->view('back_end/html/V_menu'); ?>
	<div class="panel-body1">
	
	<?php foreach ($query as $key) { ?>
	<form action="<?php echo site_url('GaleriWisata/prosesInsert'); ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id_galeri">
		<input type="hidden" name="id_info" value="<?php echo $key->id_info; ?>">
	<div class="form-group">
			<div class="col-sm-5">
				<input type="file" class="form-control1"  name="photo">
			</div>
			<div class="col-sm-2" >
				<button type="submit" class="btn-success btn">Simpan</button>
			</div>
	</div>
	</form>
	
	<table class="table">
		<thead>
			<td>#</td>
			<td>Photo</td>
			<td>Action</td>
		</thead>
		<?php $no = 1; foreach ($sql as $key) { ?>
		<tbody>
			<td><?php echo $no++; ?></td>
			<td>
				<img src="<?=base_url()?>uploads/<?php echo $key->nama_galeri_wisata; ?>" width="auto" height="100">
			</td>
			<td>
				<a href="<?php echo site_url('galeriWisata/del/')."$key->id_galeri_wisata"; ?>"class="btn btn-danger btn-sm" onclick="return confirm_delete()"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
			</td>
		</tbody>
		<?php } ?>
	</table>
	<?php } ?>
	</div>
<?php $this->load->view('back_end/html/V_end'); ?>