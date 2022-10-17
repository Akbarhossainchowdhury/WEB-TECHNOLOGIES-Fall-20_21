<?php include 'header.php';?>
<!--editstudent starts -->
<div class="center">
<table>
	
	<td>
		<form class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" class="form-control">
			</div>
			
			<div class="form-group">
				<h4 class="text">ID:</h4> 
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">DOB:</h4> 
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">CREDIT:</h4> 
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">CGPA:</h4> 
				<textarea type="text" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<h4 class="text">DEPT_ID:</h4> 
				<input type="text" class="form-control">
			</div>
			<div class="form-group text-center">
				
				<input type="submit" class="btn btn-success" value="Edit student" class="form-control">
			</div>
		</form>
	</td>
</table>				
</div>

<!--editstudent ends -->
<?php include 'footer.php';?>