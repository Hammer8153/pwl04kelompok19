<?php

	require_once("../inc/config.php");
	require_once(ROOT_PATH . "inc/function.php");

	if (empty($_GET["pg"])) {
		$current_page = 1;
	} else {
		$current_page = $_GET["pg"];
	}
	$con = new crud;

	$current_page = intval($current_page);

	$total_products = $con->get_products_count();
	$products_per_page = 8;
	$total_pages = ceil($total_products / $products_per_page);


	if ($current_page > $total_pages) {
		header("Location: ./?pg=" . $total_pages);
	}

	if ($current_page < 1) {
		header("Location: ./");
	}

	$start = (($current_page - 1) * $products_per_page) + 1;
	$end = $current_page * $products_per_page;
	if ($end > $total_products) {
		$end = $total_products;
	}

	$products = $con->get_products_subset($start,$end);

?><?php 
$pageTitle = "M E D I SHOP";
$section = "shoes";
include(ROOT_PATH . 'inc/header.php'); ?>

		<div class="section shirts page">

			<div class="wrapper">

				<h1>M E D I SHOP</h1>

                <?php
                	$message = '<p>Hi there! Welcome to our shop please login first to continue shopping.</p>';
                    if (!isset($_SESSION['login'])) {
                        echo $message;
                    } else {
                        echo '<p>Happy Shopping!</p>';
                    }
                ?>

				<?php include(ROOT_PATH . "inc/partial-list-navigation.html.php"); ?>

				<ul class="products">
					<?php
                        foreach($products as $product) {
                            include(ROOT_PATH . "inc/partial-product-list-view.html.php");
                        }
                    ?>
				</ul>

				<?php include(ROOT_PATH . "inc/partial-list-navigation.html.php"); ?>

			</div>

		</div>

<?php include(ROOT_PATH . 'inc/footer.php') ?>