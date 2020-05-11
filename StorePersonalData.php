<?php
	
	require_once('db.php');
?>
<?php
	
	if(isset($_POST['submit']))
	{
		$file = $_FILES['employeeimage']['name'];
  		$file_loc = $_FILES['employeeimage']['tmp_name'];
 		$file_size = $_FILES['employeeimage']['size'];
 		$file_type = $_FILES['employeeimage']['type'];
 		$target="uploads/";
 		move_uploaded_file($file_loc,$target.$file);

 		$name = $_POST['name'];
 		$pnumber = $_POST['pnumber'];
 		$email = $_POST['email'];
 		$address = $_POST['address'];
 		$dob = $_POST['dob'];
 		$designation = $_POST['designation'];
 		$website = $_POST['website'];

		$sql = "INSERT INTO personaldata (`Name`,`phonenumber`,`email`,`address`,`dob`,`designation`,`website`,`Image`) VALUES ('$name','$pnumber','$email','$address','$dob','$designation','$website','$file')";
 		$query = mysqli_query($con,$sql);

 		if($query)
 		{
 			echo "<script>alert('Data Saved')</script>";
 			echo "<script>window.location = 'educationInfo.php'</script>";
 		}
 		else
 		{
 			echo "Data not Inserted".mysqli_error($con);
 		}
	}
?>