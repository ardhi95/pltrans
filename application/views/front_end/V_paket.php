<?php $this->load->view('front_end/html/V_first'); ?>
	<div class="banner"></div>
	<?php $this->load->view('front_end/html/V_menu'); ?>
		<!-- header -->		
		<div class="content">
			<div class="rooms-rates">
				<div class="container">
					<h3 class="tittle">Paket Wisata</h3>
					<?php 
							foreach ($sql as $key) {
								$idnya = $key->id_paket;
								if ($idnya%2 == 0) { ?>
					
					<div class="rates-grids">
						<div class="rates-grid">
							<img src="<?= base_url() ?>uploads/<?php echo $key->foto; ?>" class="img-responsive gray" alt=""/>
						</div>
						<div class="rates-text">
							<h4><?php echo $key->nama_paket; ?></h4>
							<p><?php $a = $key->deskripsi;
										$b = strip_tags($a);
										$c = substr($b, 0,300);
										echo $c;
							 			?></p>
							<h5>IDR <?php echo $key->harga; ?><span class="small"></span></h5>
						</div>
					</div>

					<?php 		}else{ ?>
					<div class="rates-grids rate1">
						<div class="rates-grid1">
							<img src="<?= base_url() ?>uploads/<?php echo $key->foto; ?>" class="img-responsive gray" alt=""/>
						</div>
						<div class="rates-text1">
							<h4><?php echo $key->nama_paket; ?></h4>
							<p><?php $a = $key->deskripsi;
										$b = strip_tags($a);
										$c = substr($b, 0,300);
										echo $c;
							 			?></p>
							<h5>IDR <?php echo $key->harga; ?><span class="small"></span></h5>
						</div>
						<div class="clearfix"></div>
					</div>
					<?php	}	} ?>
						
				</div>
			</div>
		</div>
<?php $this->load->view('front_end/html/V_footer'); ?>
