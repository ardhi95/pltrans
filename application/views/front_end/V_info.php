<?php $this->load->view('front_end/html/V_first'); ?>
	<div class="banner"></div>
	<?php $this->load->view('front_end/html/V_menu'); ?>
	
	<div class="content">
			<div class="restaurant">
				<div class="container">
					<h2 class="tittle">Info Wisata</h2>
					<div class="rest-grids">
						<div class="col-md-12 rest-grid">
						<?php foreach ($sql as $key) { ?>
							<div class="rest-top">
								<h3 align="center"><?php echo $key->nama_info; ?></h3>
								
								<img src="<?= base_url() ?>uploads/<?php echo $key->foto; ?>" class="img-responsive gray" style="margin: 0 auto;"/>
								
								<p align="justify">
										<?php $a = $key->blog;
										$b = strip_tags($a);
										$c = substr($b, 0,650);
										echo $c;
							 			?>
							 			<a href="#" class="btn btn-primary btn-xs pull-right">
         									<span class="glyphicon glyphicon-search"></span> Read more
        								</a>
								</p>
								<div class="clearfix"></div>
							</div>
							<?php } ?>
							<div class="rest-bottom">
							<?php foreach ($query as $key) { ?> 
								<div class="col-md-4 rest-left">
									<a href="#"><img src="<?= base_url() ?>uploads/<?php echo $key->foto; ?>" class="img-responsive gray" alt=""/></a>
									<h4><?php echo $key->nama_info; ?></h4>
									<p>
										<?php $a = $key->blog;
										$b = strip_tags($a);
										$c = substr($b, 0,150);
										echo $c;
							 			?>
							 			<a href="#" class="btn btn-primary btn-xs">
         									<span class="glyphicon glyphicon-search"></span> Read more
        								</a>
									</p>
								</div>
								<?php } ?>
								<div class="clearfix"></div>
							</div>
						</div>
						
						
				</div>
			</div>
		</div>
</body>
<?php $this->load->view('front_end/html/V_footer'); ?>