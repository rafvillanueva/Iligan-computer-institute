<?php
	require '../config/dbcon.php';
	if(ISSET($_POST['search'])){
		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$query=mysqli_query($mysqli, "SELECT * FROM tbl_student WHERE date(`time_encoded`) BETWEEN '$date1' AND '$date2' AND a_status='Registered' ORDER BY l_name ASC") or die(mysqli_error());
		$row=mysqli_num_rows($query);
		if($row>0){
			while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
		<td>
			    <?php 
	        	      if($fetch['gender'] == "Male"){
	        	?>
	        	      <img src="../img/user1.png" height="32">
	        	<?php
	        	      }else{
	        	?>
	        	      <img src="../img/user2.png" height="32">
	        	<?php
	        	      }
	        	?>
			<?php echo $fetch['l_name'].$fetch['f_name'].$fetch['m_name'].$fetch['x_name']?>
		</td>
		<td><?php echo $fetch['lrn']?></td>
		<td><?php echo $fetch['age']?></td>
		<td><?php echo $fetch['s_contact_num']?></td>
		<td><?php echo $fetch['a_level']?></td>
		<td><?php echo $fetch['a_strand']?></td>

	</tr>
<?php
			}
		}else{
			echo'
			<tr>
				<td colspan = "6"><center>No matching records found</center></td>
			</tr>';
		}
	}else{
		$query=mysqli_query($mysqli, "SELECT * FROM `tbl_student` WHERE a_status='Registered' ORDER BY l_name ASC") or die(mysqli_error());
		while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
		<td>
        	<?php 
        	      if($fetch['gender'] == "Male"){
        	?>
        	      <img src="../img/user1.png" height="32">
        	<?php
        	      }else{
        	?>
        	      <img src="../img/user2.png" height="32">
        	<?php
        	      }
        	?>
			<?php echo $fetch['l_name'].$fetch['f_name'].$fetch['m_name'].$fetch['x_name']?>
		</td>
		<td><?php echo $fetch['lrn']?></td>
		<td><?php echo $fetch['age']?></td>
		<td><?php echo $fetch['s_contact_num']?></td>
		<td><?php echo $fetch['a_level']?></td>
		<td><?php echo $fetch['a_strand']?></td>

	</tr>
<?php
		}
	}
?>
