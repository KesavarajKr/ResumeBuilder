$(document).ready(function(){

	var html = '<tr><td><input type="text" name="course" class="form-control mt-3"placeholder="Course Name"></td><td><input type="text" name="institition" class="form-control mt-3" placeholder="Institution"></td><td><input type="text" name="board" class="form-control mt-3"placeholder="Board/Institution"></td><td><input type="text" name="period" class="form-control mt-3" placeholder="Period"></td><td><input type="text" name="marks mt-3" class="form-control mt-3" placeholder="Marks"></td><td><button type="button" class="btn btn-danger remove mt-3"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>';
	// var html = '<td><input type="text" name="course" class="form-control"placeholder="Course Name"></td>';
	// var html ='<td><input type="text" name="institition" class="form-control"placeholder="Institution"></td>';
	// var html = '<td><input type="text" name="board" class="form-control"placeholder="Board/Institution"></td>';
	// var html = '<td><input type="text" name="period" class="form-control"placeholder="Period"></td>';
	// var html = '<td><input type="text" name="marks" class="form-control"placeholder="Marks"></td>';
	// var html ='</tr>';					
	$('#education-add').click(function(){

		$('tbody').append(html);
	})

	$(document).on('click','.remove',function(){
		$(this).parents('tr').remove();
	});

});