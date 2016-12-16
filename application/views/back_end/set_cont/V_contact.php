<?php $this->load->view('back_end/html/V_menu'); ?>

<div class="panel-body1">
	<div class="tab-content">
		<form action="<?php echo site_url('setting/doContact'); ?>" method="POST" role="form">
				<legend>Contact</legend>
				<div class="pull-right">
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
				</div></br>
				
				<?php foreach ($contact as $key) { ?>
				<div class="form-group"> <span class="glyphicon glyphicon-earphone"></span>
					<label for="">Office</label>
					<input type="text" name="office" class="form-control1" value="<?php echo $key->office; ?>">
				</div>

				<div class="form-group"> </label> <span class="glyphicon glyphicon-phone"></span>
					<label for="">Mobile</label>
					<input type="text" name="mobile" class="form-control1" value="<?php echo $key->mobile; ?>">
				</div>
				
				<div class="form-group"> <span class="glyphicon glyphicon-envelope"></span>
					<label for="">e-mail</label>
					<input type="text" name="email" class="form-control1" value="<?php echo $key->email; ?>">
				</div>

				<div class="form-group"> <i class="fa fa-facebook-square"></i>
					<label for="">facebook</label>
					<input type="text" name="facebook" class="form-control1" value="<?php echo $key->facebook; ?>">
				</div>

				<div class="form-group"> <i class="fa fa-instagram"></i>
					<label for="">instagram</label>
					<input type="text" name="instagram" class="form-control1" value="<?php echo $key->instagram; ?>">
				</div>

				<div class="form-group"> <i class="fa fa-twitter"></i>
					<label for="">twitter</label>
					<input type="text" name="twitter" class="form-control1" value="<?php echo $key->twitter; ?>">
				</div>
				<!-- <div class="form-group"> <span class="glyphicon glyphicon-phone-alt"></span>
					<label for="">Fax</label>
					<input type="text" name="fax" class="form-control1" value="<?php echo $key->fax; ?>">
				</div> -->
				<?php } ?>
			
		</form>
	</div>

<?php $this->load->view('back_end/html/V_end'); ?>