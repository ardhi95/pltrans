<?php $this->load->view('front_end/html/V_first'); ?>
	<div class="banner"></div>
	<?php $this->load->view('front_end/html/V_menu'); ?>
	
	<div class="content">
			<div class="restaurant">
				<div class="container">
					<h2 class="tittle">Info Wisata</h2>
					<div class="rest-grids">
						<div class="col-md-8 rest-grid">
						<?php foreach ($sql as $key) { ?>
							<div class="rest-top">
								<h3><?php echo $key->nama_info; ?></h3>
								<img src="<?= base_url() ?>uploads/<?php echo $key->foto; ?>" class="img-responsive gray" align="center"/>
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

							</div>
							<?php } ?>
							<div class="rest-bottom">
							<?php foreach ($query as $key) { ?> 
								<div class="col-md-6 rest-left">
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
						
						<div class="col-md-4 rest-grid1">
							<h3>Calendar</h3>
							<div class="reser-grid1">
								<div id="my-calendar"></div>
							</div>
							<div class="lastest">
								<div class="lastest-top">
								<img src="<?= base_url() ?>assets/front_end/images/w5.jpg" class="img-responsive gray" alt=""/>
									<h4>Luxury Resort</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown .</p>
								</div>
								<div class="lastest-top">
								<img src="<?= base_url() ?>assets/front_end/images/ga7.jpg" class="img-responsive gray" alt=""/>
									<h4>Swinging Pool</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown .</p>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
</body>
<?php $this->load->view('front_end/html/V_footer'); ?>