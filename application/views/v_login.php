<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>INAGRO | Login</title>

	<link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/font-awesome/css/font-awesome.css" rel="stylesheet">

	<link href="<?php echo base_url() ?>asset/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">
	<div class="middle-box text-center loginscreen animated fadeInDown">
		<div class="ibox-content">
			<div>

				<h1 class="logo-name"><img src="<?php echo base_url() ?>asset/img/_inagro/inagro.png" alt=""></h1>

			</div>
			<h3>Welcome to INAGRO</h3>
			<p>Located in 80 hectares land of Ciseeng, Bogor, Inagro is a perfect area for recreational activities for families and private events.
				<!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
			</p>
			<form action="<?php echo base_url('login/masuk'); ?>" method="post">
				<div class="form-group">
					<input type="text" name="username" class="form-control" placeholder="Username" required="">
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Password" required="">
				</div>
				<button type="submit" class="btn btn-primary block full-width m-b">Login</button>
			</form>
			<p class="m-t"> <small>INAGRO &copy; 2019</small> </p>
		</div>
	</div>
	</div>

	<!-- Mainly scripts -->
	<script src="<?php echo base_url() ?>asset/js/jquery-2.1.1.js"></script>
	<script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>

</body>

</html>