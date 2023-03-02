<script type="text/javascript">
  function getprovince(){
        var regCode = $("#regCode").val();
        $.ajax(
            {
                type:"post",
                url: "controller/index.php",
                data: {"regCode": regCode},
                success:function(response)
                {
                    $("#provCode").html(response);
                }
            }
        );
  }

  function getMunicity(){
        var citymunCode = $("#provCode").val();
        $.ajax(
            {
                type:"post",
                url: "controller/index.php",
                data: {"citymunCode": citymunCode},
                success:function(response)
                {
                    $("#citymunCode").html(response);
                }
            }
        );
  }

  function getBrgy(){
        var citymunCode = $("#citymunCode").val();
        $.ajax(
            {
                type:"post",
                url: "controller/index.php",
                data: {"citymunCodez": citymunCode},
                success:function(response)
                {
                    $("#brgyCode").html(response);
                }
            }
        );
  }
</script>


<!--Fac/Admin/Req Upload Profile Picture to the table -->
<?php
//for update*********
  if (isset($_POST['save_profile'])){
  //Images holder for download attach img//
  move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);             
  $location=$_FILES["image"]["name"];
  //End here!!..
  mysqli_query($mysqli,"UPDATE user set image_location='$location' WHERE User_id='$id'");
  echo "<script>alert('Success! Profile Picture Uploaded!'); window.location='user-account'</script>";
    }
?>
<!-- #End Upload -->




<!-- Student Upload Profile Picture to the table -->
<?php
//for update*********
  if (isset($_POST['stu_profile_save'])){
  //Images holder for download attach img//
  move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);             
  $location=$_FILES["image"]["name"];
  //End here!!..
  mysqli_query($mysqli,"UPDATE tbl_student set image_location='$location' WHERE stud_id='$id'");
  echo "<script>alert('Success! Profile Picture Uploaded!'); window.location='Records'</script>";
    }
?>
<!-- #End Upload -->

<!-- #Student withdrraw -->
<?php 
  if(isset($_POST['x_withdraw'])){ 
    $date_withdrawal=$_POST['date_withdrawal'];
    $confirmed_by=$_POST['confirmed_by'];
    $stud_id=$_POST['stud_id'];
    $w_reason=$_POST['w_reason'];
    mysqli_query($mysqli,"INSERT into tbl_withdrawal(date_withdrawal,confirmed_by,stud_id,w_reason)values('$date_withdrawal','$confirmed_by','$stud_id','$w_reason')");
    $sql = mysqli_query($mysqli, "UPDATE tbl_student SET a_status = 'Withdrawn' WHERE stud_id = '$id'");
?>
    <script>
      window.alert('Success! New Student Withdrawn Enrollment.');
      window.location.href='Records';
    </script>
<?php
  }
?> 
<!-- #End withdrraw -->


<!-- #Recover withdrraw -->
<?php 
  if(isset($_POST['w_restored'])){ 
    $sql = mysqli_query($mysqli, "UPDATE tbl_student SET a_status = 'Enrolled' WHERE stud_id = '$id'");
?>
    <script>
      window.alert('New student successfully recovered.');
      window.location.href='Withdraw';
    </script>
<?php
  }
?> 
<!-- #End Recover withdrraw -->