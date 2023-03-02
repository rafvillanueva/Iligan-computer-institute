<?php 
include('../../config/dbcon.php');
// Adding Data to table - #Accounts 
if(isset($_POST['User_id'])){
  $idz = $_POST['User_id'];
  $id_section = $_POST['id_section'];
  $semester_year = $_POST['semester_year']; 
  
  if(empty($id_section)){ 
      //     echo '
      // <div class="alert alert-danger samuel animated shake alert-dismissable">
      //   <strong><span class="fa fa-check"></span> Error!</strong> 
      //   Please Check the Empty Field.
      // </div><hr>
      // ';
?>
 <script type="text/javascript">
            swal("Warning!", "Please check the Empty Field.", "warning"); 
</script>
<?php
  }else{
    $exist = "SELECT count(*) as e, id_section,semester_year FROM tbl_advisory WHERE id_section like '$id_section' AND semester_year like '$semester_year'";
    $exist_sql = mysqli_query($mysqli, $exist);
    $exist_row = mysqli_fetch_array($exist_sql);
    if($exist_row['e'] == 0){
      $query = "INSERT INTO tbl_advisory(User_id,id_section,semester_year) VALUES('$idz','$id_section','$semester_year')";
      $sql = mysqli_query($mysqli, $query);
      // echo ' 
      // <div class="alert alert-success samuel animated shake alert-dismissable">
      //   <strong><span class="fa fa-check"></span> Success!</strong> 
      //   Faculty load <strong>'.$Subjectloads.' for '.$Section.'</strong> has been added.
      // </div><hr>
      // ';
?>
       <script type="text/javascript">
        swal("Success!", "New Faculty Advisory added.", "success"); 
        setTimeout(function(){ 
         window.location.reload(1);
      }, 2000);
      </script> 
      <?php
    }else{
      // echo '
      // <div class="alert alert-warning samuel animated shake alert-dismissable">
      // <b><span class="fa fa-warning"></span></b><strong> Error!</strong> Section <strong>'.$id_section.' </strong> for '.$semester_year.', is Already taken!
      // </div><hr>
      // ';
?>
 <script type="text/javascript">
            swal("Error!", "Section you choose is already taken.", "error"); 
</script>
<?php
    }
  }
}
?>

