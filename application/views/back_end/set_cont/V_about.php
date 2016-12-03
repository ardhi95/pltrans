<?php $this->load->view('back_end/html/V_menu'); ?>

<div class="panel-body1">
	<div class="tab-content">
		<form action="<?php echo site_url('setting/doAbout'); ?>" method="POST" role="form">
				<legend>About PL Trans</legend>
				
				<textarea name="about" id="" cols="30" rows="10">
					
				</textarea>

			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
		</form>
	</div>
</div>

<?php $this->load->view('back_end/html/V_end'); ?>