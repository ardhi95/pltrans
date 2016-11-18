<?php $this->load->view('back_end/html/V_menu'); ?>
<?php foreach ($query as $key) { ?>
<div class="panel-body1">
	<div class="tab-content">
		<div class="tab-pane active" id="horizontal-form">
			<form class="form-horizontal" action="<?php echo site_url('PaketWisata/editData/')."$key->id_paket"; ?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id_info">				
				
				<div class="form-group">
					<!-- <label for="focusedinput" class="col-sm-2 control-label">Nama Paket Wisata</label> -->
					<div class="col-sm-5">
						<input type="text" class="form-control1" id="focusedinput" placeholder="Nama Paket Wisata" name="nama_paket" value="<?php echo $key->nama_paket; ?>">
					</div>
					<div class="col-sm-5">
						<input type="text" class="form-control1" id="focusedinput" placeholder="Harga Paket Wisata" name="harga" value="<?php echo $key->harga; ?>">
					</div>
					<div class="col-sm-2" border=>
						<button type="submit" class="btn-success btn">Simpan</button>
					</div>
				</div>

				<div class="form-group">
						<div class="col-sm-12">
							<textarea name="deskripsi" id="content"><?php echo $key->deskripsi; ?></textarea>

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
							
						</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php } ?>
<?php $this->load->view('back_end/html/V_end'); ?>