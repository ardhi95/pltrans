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

	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Office</th>
					<th>Mobile</th>
					<th>e-mail</th>
					<th>Fax</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($contact as $key) { ?>
					<tr>
						<td><?php echo $key->office; ?></td>
						<td><?php echo $key->mobile; ?></td>
						<td><?php echo $key->email; ?></td>
						<td><?php echo $key->fax; ?></td>
						<td>
							<a href="<?php echo site_url('setting/editContact/')."$key->id_contact"; ?>" class="btn btn-info btn-sm">
		          				<span class="glyphicon glyphicon-edit"></span> Edit
		        			</a>
								
							<a href="<?php echo site_url('setting/deleteContact/')."$key->id_contact"; ?>" class="btn btn-info btn-sm">
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