<?php $this->load->view('front_end/html/V_first'); ?>
<body>
	<?php $this->load->view('front_end/html/V_menu'); ?>
	<?php $this->load->view('front_end/html/V_homeslide'); ?>
    
			 
		<div class="content">
			<!-- Info Wisata -->
			<div class="welcome">
				<div class="container">
					<h2 class="tittle">Info Wisata</h2>
					<div class="wel-grids">
						<?php foreach ($query as $key) { ?>
						<div class="col-md-3 wel-grid">
							<img src="<?= base_url(); ?>uploads/<?php echo $key->foto; ?>" class="img-responsive gray"/>
							<h4><?php echo $key->nama_info; ?></h4>
							<?php $a = $key->blog;
									$b = strip_tags($a);
									$c = substr($b, 0,100);
									echo $c;
							 ?>
							 <a href="#">Read more..</a>
						</div>
						<?php } ?>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!-- about --> 
			<div class="about-section">
				<div class="container">
					<h2 class="tittle">About PL Trans</h2>
					<div class="about-grids">
						<div class="col-md-6"><img src="<?= base_url(); ?>assets/front_end/images/about.png" class="img-responsive"></div>
						<div class="col-md-6 wel-grid" align="justify">
							<?php
					foreach ($about->result() as $key) {
					echo $key->content;	} ?>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
<?php $this->load->view('front_end/html/V_footer'); ?>
