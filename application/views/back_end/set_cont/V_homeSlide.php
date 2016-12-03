<?php $this->load->view('back_end/html/V_menu'); ?>

<div class="panel-body1">
	<div class="tab-content">
		<form action="<?php echo site_url('setting/doHomeSlide'); ?>" method="POST" role="form" enctype="multipart/form-data">
				<legend>Home Slide</legend>
				<input type="file" name="image" id="">
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
		</form>
	</div>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($slider as $key) { ?>
					<tr>
						<td>
							<img src="<?=base_url()?>uploads/<?php echo $key->image; ?>" width="auto" height="50px" alt="">	
						</td>
						<td>
							<a href="<?php echo site_url('setting/editSlider/')."$key->id_slider"; ?>" class="btn btn-info btn-sm">
	          					<span class="glyphicon glyphicon-edit"></span> Edit
	        				</a>
							
							<a href="<?php echo site_url('setting/deleteSlider/')."$key->id_slider"; ?>" class="btn btn-info btn-sm">
	          					<span class="glyphicon glyphicon-trash"></span> Delete
	        				</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<?php $this->load->view('back_end/html/V_end'); ?>