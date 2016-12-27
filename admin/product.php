<?php 
require_once("../inc/config.php");

$pageTitle = "Halaman Admin";
$section = "admin";
include(ROOT_PATH . 'inc/header.php'); ?>

<div class="section page">

	<h1>M E D I SHOP</h1>

	<ul class="box">
		<a href="<?php echo BASE_URL; ?>admin/delete.php"><li>Delete products</li></a>
		<a href="<?php echo BASE_URL; ?>admin/edit.php"><li>Update products</li></a>
		<a href="<?php echo BASE_URL; ?>admin/insert.php"><li>Insert products</li></a>
		<a href="<?php echo BASE_URL; ?>user/delete.php"><li>Delete User</li></a>
	</ul>

</div>

<?php include(ROOT_PATH . 'inc/footer.php') ?>