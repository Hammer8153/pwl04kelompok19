<?php 
require_once("../inc/config.php");
include(ROOT_PATH . "inc/function.php");


$con = new admin();
$data = $con->userview();

if(!isset($_SESSION['admin'])){
header('location:' . BASE_URL . 'admin/product.php');}
else if(isset($_SESSION['admin'])){

$pageTitle = "WLL";
$section = "admin";
include(ROOT_PATH . 'inc/header.php'); ?>

<div class="section page">

	<h1>User Control</h1>

	<form action="" method="post">
		<table>
		<thead>
			<tr>
				<th>sku</th>
				<th>name</th>
				<th>img</th>
				<th>price</th>
				<th>paypal</th>
			</tr>
		</thead>
		<tbody>
			
			<?php  foreach ($data as $record) { ?>
	
			<tr class="active">
				<td><?php echo $record['sku']; ?></td>
				<td><?php echo $record['name']; ?></td>
				<td><input class="btn" name="update" type="submit" value="Up"></td>
				<td><input class="btn" name="delete" type="submit" value="Del"></td>
			</tr>							

				<?php 	

					
					if (isset($_POST['delete'])) {
			       		$as = $record['sku'];	
			       		$con->delproducts($as);
			      	 }
				} ?>  

		</tbody>
		</table>
	</form>
</div>

<?php include(ROOT_PATH . 'inc/footer.php'); } ?>