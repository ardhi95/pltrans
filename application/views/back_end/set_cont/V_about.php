<?php $this->load->view('back_end/html/V_menu'); ?>

<div class="panel-body1">
	<div class="tab-content">
		<form action="<?php echo site_url('setting/doAbout'); ?>" method="POST" role="form">
				<legend>About PL Trans</legend>
				
				<textarea name="about" id="content"></textarea>

									<script type="text/javascript">
									    CKEDITOR.replace( 'content',
										    { 
										    toolbar : [{ name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
															{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
    														{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
    														{ name: 'insert', items : [ 'Image','Table','Smiley','Iframe' ] },
    
														],
										    height: 300,
										    /*resize_maxWidth: '%'*/
										    width : '100%'
										    }
									    );	    
								    </script>

			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
		</form>
	</div>
	<br>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>About</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
						if ($about->num_rows()>0) {
							foreach ($about->result() as $key) {
						?>
				<tr>
					<td><?php echo $key->content; ?></td>
					<td>
						<a href="<?php echo site_url('setting/editAbout/')."$key->id_about"; ?>" class="btn btn-info btn-sm">
          					<span class="glyphicon glyphicon-edit"></span> Edit
        				</a>
						
						<a href="<?php echo site_url('setting/deleteAbout/')."$key->id_about"; ?>" class="btn btn-info btn-sm">
          					<span class="glyphicon glyphicon-trash"></span> Delete
        				</a>
					</td>
				</tr>
				<?php }} ?>
			</tbody>
		</table>
	</div>
</div>

<?php $this->load->view('back_end/html/V_end'); ?>