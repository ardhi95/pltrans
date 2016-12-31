<div class="banner-section">
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<?php 
							$data = $this->db->query("SELECT * FROM slider")->result();
							foreach ($data as $key) {
					?>
					<li>
						<div class="slider-info">
							<img src="<?=base_url()?>uploads/<?php echo $key->image; ?>" class="img-responsive" alt="">
						</div>
						<!-- <div class="container">
							<div class="banner-text">
								<h3>Outdoor & Indoor Luxury</h3>
							</div>
						</div> -->
					</li>
					<?php } ?>
					<!-- <li>
						<div class="slider-info">
							<img src="<?= base_url(); ?>assets/front_end/images/ba2.jpg" class="img-responsive" alt="">
						</div>
						<div class="container">
							<div class="banner-text">
								<h3>Luxury & Oriental Harmony</h3>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-info">
							<img src="<?= base_url(); ?>assets/front_end/images/ba3.jpg" class="img-responsive" alt="">
						</div>
						<div class="container">
							<div class="banner-text">
								<h3>A Brand New Hotel</h3>
							</div>
						</div>
					</li> -->
				</ul>
			</div>
		</section>
			<!-- FlexSlider -->
			<script defer src="<?= base_url(); ?>assets/front_end/js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(function(){
						SyntaxHighlighter.all();
					});
					$(window).load(function(){
					$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
					});
					});
				</script>
			<!-- FlexSlider -->
			<!-- slider -->
	</div>