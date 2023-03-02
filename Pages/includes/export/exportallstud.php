<?php
 
    date_default_timezone_set("Asia/Manila");
    $month = date("F"); // Get the number of the month, 1-12
    if($month <= 6) { 
      $Semgen = date("Y",strtotime("-1 year"))."-".date("Y");
    }else{
      $Semgen = date("Y")."-".date("Y",strtotime("+1 year"));
    }
 
	include'../semester-gen.php';
    try{
    include'../../../config/dbcon.php';
    }catch(PDOException$to){
    echo $to->getMessege();
    exit;}
    $tabz_query = "SELECT * FROM tbl_student WHERE a_status='Registered'";
    $get_tabs = $get_dbz->query($tabz_query);
    $CountAllstud = $get_tabs->rowCount();

	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=ICI-CDO_SY:$SemToNow'.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
	require_once '../../../config/dbcon.php';

	$output = ""; 
	$output .="
		<table>
			<h3>ILIGAN COMPUTER INSTITUTE - CDO BRANCH (SY: ".$Semgen.")</h3>
			<h3>TOTAL NUMBER OF STUDENTS : ".$CountAllstud." </h3>
			<thead>
				<tr>
					<th>Grade Level</th>
					<th>Track</th>
					<th>TVL</th>
					<th>Academic</th>
					<th>Learning Mode</th>
					<th>LRN Available</th>
					<th>PSA Birth Certificate No. (If available upon registration)</th>
					<th>Learners Reference Number (LRN)</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Extension Name (Jr., II., III., if applicable)</th>
					<th>Date of Birth</th>
					<th>Sex</th>
					<th>Age</th>
					<th>Student's Contact Number </th>
					<th>IP</th>
					<th>Mother Tongue</th>
					<th>Academic Honors Received (if there is any)</th>
					<th>House Number and Street</th>
					<th>Province/Country</th>
					<th>For those who are not from Cagayan de Oro or Misamis Oriental, please fill-in the City or Municipality of your address.</th>
					<th>City/Municipality</th>
					<th>Barangay</th>
					<th>Are you currently enrolled?</th>
					<th>If you are currently enrolled, what is the name of your School?</th>
					<th>Your School's Address (Barangay, City/Municipality, Province)</th>
					<th>Your School's ID</th>
					<th>Last Grade Level Completed</th>
					<th>Last School Year Completed/Attended</th>
					<th>School Name Last Attended</th>
					<th>School ID No.</th>
					<th>Father's Name (Firstname, Middlename, Lastname)</th>
					<th>Mother's Name (Firstname, Middlename, Lastname)</th>
					<th>Guardian's Name (Firstname, Middlename, Lastname)</th>
					<th>Parent's/Guardian's Contact Number</th>
					<th>Date of Registration</th>
					<th>Referred by:</th>
					<th>Onsite/Online</th>
				</tr>
			<tbody>
	";
	
	$query = $mysqli->query("SELECT * FROM tbl_student a, tbl_studentinfo b WHERE a.a_status='Registered' AND a.stud_id = b.stud_id ORDER BY a.time_encoded ASC") or die(mysqli_error());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['a_level']."</center></td>

					". if($fetch['a_strand'] == 'Accountancy, Business and Management (ABM)'){
					echo '<td><center>ACADEMIC</center></td>';
					echo '<td><center></center></td>';
					echo '<td><center>ABM</center></td>';
					} ."




					<td><center>".$fetch['a_strand']."</center></td>

				</tr>
	";
	}
	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>