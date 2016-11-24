<?php $this->load->view('back_end/html/V_menu'); ?>

<div class="panel-body1">
	<div class="tab-content">
		<div class="tab-pane active" id="horizontal-form">
			<form class="form-horizontal" action="<?php echo site_url('info/insertData') ?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id_info">				

				<div class="form-group">
					<!-- <label for="focusedinput" class="col-sm-2 control-label">Nama Info Wisata</label> -->
						<div class="col-sm-5">
							<input type="text" class="form-control1" id="focusedinput" placeholder="Nama Info Wisata" name="nama_info">
						</div>
						<div class="col-sm-5">
							<input type="file" class="form-control1" id="focusedinput" placeholder="Default Input" name="foto">
						</div>
						<div class="col-sm-2" >
							<button type="submit" class="btn-success btn">Simpan</button>
						</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php $this->load->view('back_end/html/V_end'); ?>