<?php
	
	require_once('db.php');
	require_once('includes/header.php');
?>
	
	<div class="container">
		<h4 class="text-center mt-3 welcome-text">Welcome to Our Resume Generator This Generator Get your input and Make your resume easily..!</h4>
		<form method="POST" action="StoreEducationData.php" id="form-container" enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-11">
					<p class="mt-5 side-heading"><b>Education Details :</b></p>
				</div>
				<div class="col-lg-1">
					<button type="button" class="btn btn-primary mt-5 ml-2" id="education-add"><i class="fa fa-plus" aria-hidden="true"></i></button>
				</div>
			</div>
			
			<table class="table table-bordered mt-3 mb-5">
				<tbody>
					<tr>
						<td><input type="text" id="course" class="form-control" name="course" placeholder="Course Name"></td>
						<td><input type="text" id="institute" class="form-control" name="institute" placeholder="Institute"></td>
						<td><input type="text" id="board" class="form-control" name="board" placeholder="Board/University"></td>
						<td><input type="text" id="period" class="form-control" name="Period" placeholder="period"></td>
						<td><input type="text" id="marks" class="form-control" name="marks" placeholder="Marks"></td>
						<td><button class="btn btn-danger remove"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
					</tr>
				</tbody>
			</table>
			<button type="submit" name="submit" class="btn btn-primary m-auto d-block submit-btn">Next</button>
		</form>
	</div>
	<div class="col-lg-12  mt-3" style="margin-bottom:60px"><hr></div>
<?php
	require_once('includes/footer.php');
?>