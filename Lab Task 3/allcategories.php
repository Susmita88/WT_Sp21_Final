<?php include 'admin_header.php';
require_once 'controllers/categoryController.php';
?>
<!--All Categories starts -->

<div class="center">
	<h3 class="text">All Categories</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Product</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<td>1</td>
			<td>Groseries</td>
			<td>50</td>
			<td><a href="editcategory.php" class="btn btn-success">Edit</a></td>
			<td><a class="btn btn-danger">Delete</td>
		</tbody>
	</table>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>