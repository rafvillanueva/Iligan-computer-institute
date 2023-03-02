<?php
	include('../../config/dbcon.php');
	if(isset($_POST['stud_id'])){
		foreach ($_POST['stud_id'] as $id):
			$s_year = date("Y")."-".date("Y",strtotime("+1 year"));
			$id_section = $_POST['id_section'];
			$date_enrolled = date("F j, Y"); date_default_timezone_set("Asia/Manila");
			mysqli_query($mysqli,"UPDATE tbl_student SET a_status = 'Enrolled' WHERE stud_id='$id'");
			mysqli_query($mysqli,"INSERT INTO tbl_student_history(date_enrolled,s_year,stud_id,id_section) VALUES('$date_enrolled','$s_year','$id','$id_section')");
			//$query = "INSERT INTO tbl_student_history(User_id,id_section,semester_year) VALUES('$idz','$id_section','$semester_year')";
		endforeach;
		echo "<script>alert('Success! Selected Students are now officially enrolled.'); window.location='../Enrollment'</script>";
	}
	else{ 
		?>
		<script>
			window.alert('Error! No Student Selected. Please try again.');
			window.location.href='../Enrollment';
		</script>
		<?php
	}	
?>