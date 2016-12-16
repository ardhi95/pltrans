		<a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
		<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<div class="footer-section">
			<div class="container">
				<div class="footer-grids">
					<?php foreach ($contact as $key) { ?>
					<div class="col-md-3 footer-grid">
						<h4>Contact Us</h4>
						<ul>
							
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Office : <?php echo $key->office; ?></li>
							<li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : <?php echo $key->mobile; ?></li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <?php echo $key->email; ?></li>
							<!-- <li><i class="glyphicon glyphicon-print" aria-hidden="true"></i> Fax : 0091-789-456100</li> -->
						
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<div class="social-icons">
							<a href="<?php echo $key->facebook; ?>" target="_blank"><i class="ic_fb"></i></a>
							<a href="<?php echo $key->instagram; ?>" target="_blank"><i class="ic_insta"></i></a>
							<a href="<?php echo $key->twitter; ?>" target="_blank"><i class="ic_twit"></i></a>
							<a href="#"><i class="icon2"></i></a>							
						</div>
					</div>
					<?php } ?>
					<div class="col-md-6 footer-grid">
						  <form class="form-horizontal">
						    <div class="form-group">
						      <div class="col-sm-10">
						        <input type="email" class="form-control" id="email" placeholder="Enter email">
						      </div>
						    </div>
						    <div class="form-group">
						      <div class="col-sm-10">
						        <textarea class="form-control" rows="4" id="comment" placeholder="Comment"></textarea>
						      </div>
						    </div>
						    <div class="form-group">
						      <div class="col-sm-offset-8 col-sm-2">
						        <button type="submit" class="btn btn-default">Send</button>
						      </div>
						    </div>
						  </form>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>
		</div>	
		<!--footer-->
		<!-- <section id="contact" class="contact-section"> -->
			<div class="copy-section">
				<div class="container">
					<div class="footer-top">
					<section id="contact"></section>
						<p>&copy; 2016 PL Trans | Design by <a href="http://thppl.net">Thppl</a></p>
					</div>	
					
						<!-- <div class="social-icons">
						<a href="#"><i class="icon"></i></a>
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
						<a href="#"><i class="icon3"></i></a>
					</div> -->	
					</div>
			</div>
		<!-- </section> -->
	<!--footer-->
	
</body>
</html>