<?php session_start() ?>
<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>favicon.ico">


</head>
<body>
	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="<?php echo BASE_URL; ?>">M E D I SHOP</a></h1>

			<ul class="nav">
				<li class="admin <?php if ($section == "admin") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>admin/">Admin</a></li>
				<li class="shoes <?php if ($section == "shoes") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>shoes/">Shoes</a></li>
				<li class="contact <?php if ($section == "contact") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>contact/">Contact</a></li>
				<li class="search <?php if ($section == "search") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>search/">Search</a></li>
				<?php if(!(isset($_SESSION['login']) or isset($_SESSION['admin']))){?><li class="user <?php if ($section == "user") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>user/">User</a></li>
				<?php } ?>

		<?php if(isset($_SESSION['login']) or isset($_SESSION['admin'])){?>
		<li class="cart"><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=7QNQ3VWRDMQTA&amp;display=1">Cart</a></li>
		<li class="logout"><a href="<?php echo BASE_URL; ?>user/logout.php">Logout</a></li>
		<?php } ?>
			</ul>

		</div>

	</div>

	<div id="content">