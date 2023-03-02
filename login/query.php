<?php 
require_once('../config/dbcon.php');
if(isset($mysqli,$_POST['submit'])){
    $username = mysqli_real_escape_string($mysqli,$_POST['username']);
    $password = mysqli_real_escape_string($mysqli,$_POST['password']);
    $password=md5($password);
    $query1=mysqli_query($mysqli,"SELECT User_id,username,password,type,a_Complete,image_location FROM user WHERE Status=''");
	while($row=mysqli_fetch_array($query1))
	{ 
		$db_User_id=$row["User_id"];
		$db_username=$row["username"];
		$db_password=$row["password"]; 
		$db_type=$row["type"];
		$db_a_Complete=$row["a_Complete"];
		$db_image_location=$row["image_location"];
		if($username==$db_username && $password==$db_password){
			session_start();
			$_SESSION["User_id"]=$db_User_id;
			$_SESSION["username"]=$db_username;
			$_SESSION["type"]=$db_type;
			$_SESSION["a_Complete"]=$db_a_Complete;
			$_SESSION["image_location"]=$db_image_location;
			if($_SESSION["type"]=='Administrator'){
				header("Location:../Pages/Dashboard");
			}
			if($_SESSION["type"] =='Faculty'){
				header("Location:../Pages/Dashboard");
			}
		}
		else{ 
?>
<script type="text/javascript">
            swal("Error!", "Invalid Username/Password, Please try again.", "error"); 
</script>
<?php
		}
    }
}
?>
