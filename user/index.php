<?php
require('../inc/config.php');

$pageTitle = "user";
$section = "user";

include(ROOT_PATH . 'inc/header.php'); 

?>
<div class="section page">

	<h1>Welcome To Our Store</h1>

	<ul class="box">
		<a href="<?php echo BASE_URL; ?>user/register.php"><li>REGISTER</li></a>
		<a href="<?php echo BASE_URL; ?>user/login.php"><li>LOGIN</li></a>
	</ul>

</div>

<?php include (ROOT_PATH . '/inc/footer.php'); ?>
