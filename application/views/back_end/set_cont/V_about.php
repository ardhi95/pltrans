<?php $this->load->view('back_end/html/V_menu'); ?>

<div class="panel-body1">
	<div class="tab-content">
		<form action="<?php echo site_url('setting/doAbout'); ?>" method="POST" role="form">
				<legend>About PL Trans</legend>
				<div class="btn pull-right">
				<button type="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-floppy-disk"></span> Save
				</button>
				</div>
				<textarea name="about" id="content">
					<?php
						foreach ($about->result() as $key) {
							echo $key->content;	
						} 
					?>
				</textarea>
		</form>
	</div>
</div>
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
<?php $this->load->view('back_end/html/V_end'); ?>