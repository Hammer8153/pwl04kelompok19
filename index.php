<?php 
require_once("inc/config.php");
include(ROOT_PATH . "inc/function.php");
$con = new crud;
$recent = $con->get_products_recent();

$pageTitle = "M E D I SHOP";
$section = "home";
include(ROOT_PATH . 'inc/header.php'); ?>
        <div class="section banner">

            <div class="wrapper">





            </div>

        </div>

        <div class="section shoes latest">

            <div class="wrapper">

                <h2>M E D I Latest Shoes</h2>

                <ul class="products">
                   <?php
                        foreach(array_reverse($recent) as $product) {
                            include(ROOT_PATH . "inc/partial-product-list-view.html.php");
                        }
                    ?>
                </ul>

            </div>

        </div>

<?php include(ROOT_PATH . 'inc/footer.php') ?>