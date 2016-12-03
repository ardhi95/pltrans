<?php $this->load->view('back_end/html/V_menu'); ?>

<div class="panel-body1">
	<div class="tab-content">
		<form action="<?php echo site_url('setting/doHomeSlide'); ?>" method="POST" role="form" enctype="multipart/form-data">
				<legend>Home Slide</legend>
				<input type="file" name="image" id="">
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
		</form>
	</div>
</div>

<?php $this->load->view('back_end/html/V_end'); ?>