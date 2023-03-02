<?php 
include('../../config/dbcon.php');
// Updating Data to table - #Accounts
if(isset($_POST['idx'])){
  $idz = $_POST['idx'];
  $sec_name = strtoupper($_POST['sec_name']);
  $max_stu = $_POST['max_stu'];
  $a_level = $_POST['a_level'];
  $a_strand = $_POST['a_strand']; 

 if(empty($sec_name) || empty($max_stu) || empty($a_level) || empty($a_strand)){ 
  ?>
      <script type="text/javascript">
                  swal("Warning!", "Please check the Empty Field.", "warning"); 
      </script>
  <?php
  }else{
    $exist = "SELECT count(*) as e,id_section,sec_name,a_level,a_strand FROM tbl_section WHERE sec_name like '$sec_name' AND a_level like '$a_level' AND a_strand like '$a_strand'"; 
    $exist_sql = mysqli_query($mysqli, $exist);
    $exist_row = mysqli_fetch_array($exist_sql);

    if($exist_row['e'] == 0){

        $query = "UPDATE tbl_section SET sec_name = '$sec_name', max_stu = '$max_stu', a_level = '$a_level', a_strand = '$a_strand' WHERE id_section = '$idz'";
        $sql = mysqli_query($mysqli, $query);
?>

<!--         echo '
        <div class="alert alert-success samuel animated shake alert-dismissable">
          <strong><span class="fa fa-check"></span> Success!</strong> 
          Account Member <a href="#" class="alert-link">'.$a_Complete.'</a> is now updated.
        </div>
        '; -->
        <script type="text/javascript">
                    swal("Success!", "Section is now updated.", "success");   
                    setTimeout(function(){ 
                    window.location.reload(1);
                    }, 2000);   
        </script>
<?php  
      }else{
      $query1 = "UPDATE tbl_section SET sec_name = '$sec_name', max_stu = '$max_stu', a_level = '$a_level', a_strand = '$a_strand' WHERE id_section = '$idz'";
      $sql1 = mysqli_query($mysqli, $query1);

     ?>
        <script type="text/javascript">
                    swal("Success!", "Section is now updated.", "success");    
                    setTimeout(function(){ 
                    window.location.reload(1);
                    }, 2000);   
        </script>

     <?php } ?>
      <script type="text/javascript">
        setTimeout(function(){
         window.location.href = "accounts-edit?id=" + <?= $f_name ?>;
      }, 2000);
      </script>
      <?php

?>
<?php
    
  }
}
?>

