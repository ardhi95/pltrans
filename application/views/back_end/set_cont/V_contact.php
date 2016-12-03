<?php $this->load->view('back_end/html/V_menu'); ?>

<div class="panel-body1">
	<div class="tab-content">
		<form action="<?php echo site_url('setting/doContact'); ?>" method="POST" role="form">
				<legend>Contact</legend>

				<div class="form-group"> <span class="glyphicon glyphicon-earphone"></span>
					<label for="">Office</label>
					<input type="text" name="office" class="form-control1" placeholder="+62">
				</div>

				<div class="form-group"> </label> <span class="glyphicon glyphicon-phone"></span>
					<label for="">Mobile</label>
					<input type="text" name="mobile" class="form-control1" placeholder="+62">
				</div>
				
				<div class="form-group"> <span class="glyphicon glyphicon-envelope"></span>
					<label for="">e-mail</label>
					<input type="text" name="email" class="form-control1" placeholder="admin@mail.com">
				</div>

				<div class="form-group"> <span class="glyphicon glyphicon-phone-alt"></span>
					<label for="">Fax</label>
					<input type="text" name="fax" class="form-control1" placeholder="+62">
				</div>

			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
		</form>
	</div>
</div>

<?php $this->load->view('back_end/html/V_end'); ?>