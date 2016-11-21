<?php $this->load->view('back_end/html/V_menu'); ?>

<div class="panel-body1">
	<div class="tab-content">
		<div class="tab-pane active" id="horizontal-form">
			<form class="form-horizontal" action="<?php echo site_url('KetArmada/DoInsert') ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id_ket_armada">

			<div class="form-group">
				<label for="disabledinput" class="col-sm-2 control-label">Keterangan Jam</label>
				<div class="col-sm-8">
					<select name="jam" id="selector1" class="form-control1">
						<option>12 Jam</option>
						<option>24 Jam</option>
					</select>
					<!-- <input disabled="" type="text" class="form-control1" id="disabledinput" placeholder="Disabled Input"> -->
				</div>
			</div>
			<div class="form-group">
				<label for="disabledinput" class="col-sm-2 control-label">Keterangan Driver</label>
				<div class="col-sm-8">
					<select id="selector1" class="form-control1" name="ket_driver">
			        <option>Diver</option>
			        <option>Tanpa Driver</option>
			      	</select>
				</div>
			</div>
			<div class="form-group">
				<label for="disabledinput" class="col-sm-2 control-label">Keterangan Harga</label>
				<div class="col-sm-8">
					<input type="text" name="harga">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-8"></div>
				<div class="col-sm-2" >
							<button type="submit" class="btn-success btn">Simpan</button>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>

<?php $this->load->view('back_end/html/V_end'); ?>
