<?php 
require_once("../inc/config.php");
include(ROOT_PATH . "inc/function.php");


$con = new admin;
$data = $con->userview();
?>

<form action="" method="post">
		<table>
		<thead>
			<tr>
				<th>id</th>
				<th>Username</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			
			<?php  foreach ($data as $record) { ?>
	
			<tr class="active">
				<td><?php echo $record['id_cust']; ?></td>
				<td><?php echo $record['username']; ?></td>
				<td><input class="btn" name="update" type="submit" value="Up"></td>
				<td><input class="btn" name="<?php $record['id_cust']; ?>" type="submit" value="Del"></td>
			</tr>
			<?php 
				$id $record['id_cust'];
				if((isset($_POST['$record['id_cust'];'])){
			
				} 
			} ?>
		</tbody>
		</table>
	</form>