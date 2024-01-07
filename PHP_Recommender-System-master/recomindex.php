<?php

include("header.php");
include("db.php");

?>

<div class="panel panel-default">
	
	<div class = "panel-heading">
		<h2>
			<a class = "btn btn-success" href = "adduser.php">Add Users</a>
			<a class = "btn btn-info pull-right" href = "recomindex.php">Back</a>

		</h2>
	</div>
	
	<div class="panel-body">
		<table class="table table-stripped">
			<th> NGO Name</th>
			<th> Add Restaurant</th>
			<th> Show Restaurant and Rating</th>
			<th> Show Recommendation</th>
			
			<?php $result=mysqli_query($con,"select * from users");
			while($row=mysqli_fetch_array($result))
			{
			?>
			<tr>
				<td><?php echo $row['username']; ?> </td>
				<td>
				<form action="addproduct.php">
				<input type="submit" name="addproduct" class="btn btn primary" value="Add Product">
				<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
				</form>
				</td>
				
				<td>
				<form action="showproduct.php">
				<input type="submit" name="showproduct" class="btn btn primary" value="Show Products">
				<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
				</form>
				</td>
				
				<td>
				<form action="recommendation.php">
				<input type="submit" name="recommendation" class="btn btn primary" value="Show Recommendation">
				<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
				</form>
				</td>
			</tr>
			<?php } ?>
		</table>
	
	</div>
	
	
</div>
