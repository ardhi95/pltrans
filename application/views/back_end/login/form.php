<!DOCTYPE html>
<html lang="en">
<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap Login Form</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?=base_url()?>assets/front_end/css/bootstrap.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?=base_url()?>assets/front_end/css/styles.css" rel="stylesheet">
    <style type="text/css">
      body{
        background-image: url(maxresdefault.jpg);
        background-repeat:no-repeat;
        background-size: 1370px 700px;
        display: compact;
      }
    </style>
	</head>
	<body>
<!--login modal-->
<!-- <img src="<?= base_url(); ?>assets/back_end/images/maxresdefault.jpg" width="100%" height="auto" class="img-responsive"> -->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <h1 class="text-center" style="color: white">Login</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" action="<?php echo site_url('login/processLogin'); ?>" method="POST">
            <div class="form-group">
              <input name="username" type="text" class="form-control input-lg" placeholder="Username">
            </div>
            <div class="form-group">
              <input name="password" type="password" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Sign In</button>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
		  </div>	
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="<?=base_url()?>assets/front_end/js/jquery.min.js"></script>
		<script src="<?=base_url()?>assets/front_end/js/bootstrap.min.js"></script>
	</body>
</html>