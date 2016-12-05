<?php $this->load->view('front_end/html/V_first'); ?>
	<div class="banner"></div>
	<?php $this->load->view('front_end/html/V_menu'); ?>
		<!-- header -->		
		<div class="content">
			<div class="rooms-rates">
				<div class="container">
					<h3 class="tittle">Paket Wisata</h3>
					<?php foreach ($sql as $key) { ?>
					<div class="rates-grids">
						<div class="rates-grid">
							<img src="<?= base_url() ?>assets/front_end/images/s.jpg" class="img-responsive gray" alt=""/>
						</div>
						<div class="rates-text">
							<h4><?php echo $key->nama_paket; ?></h4>
							<p><?php $a = $key->deskripsi;
										$b = strip_tags($a);
										$c = substr($b, 0,650);
										echo $c;
							 			?></p>
							<h5>$260.00 <span class="small">/ Night</span></h5>
						</div>
					<?php } ?>
					</div>
					<div class="rates-grids rate1">
						<div class="rates-grid1">
							<img src="<?= base_url() ?>assets/front_end/images/ga2.jpg" class="img-responsive gray" alt=""/>
						</div>
						<div class="rates-text1">
							<h4>Single Room</h4>
							<p>Located in the heart of Aspen with a unique blend of contemporary luxury and historic heritage, deluxe accommodations, superb amenities, genuine hospitality and dedicated service. Located in the heart of </p>
							<h5>$260.00 <span class="small">/ Night</span></h5>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
<?php $this->load->view('front_end/html/V_footer'); ?>