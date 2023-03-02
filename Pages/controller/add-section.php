<?php 
include('../../config/dbcon.php');
// Adding Data to table - #Accounts 
if(isset($_POST['id_section'])){
  $id = $_POST['id_section'];
  $sec_name = strtoupper($_POST['sec_name']);
  $max_stu = $_POST['max_stu'];
  $a_level = $_POST['a_level'];
  $a_strand = $_POST['a_strand']; 
  
  if(empty($id) || empty($sec_name) || empty($max_stu) || empty($a_level) || empty($a_strand)){ 
?>
<script type="text/javascript">
            swal("Warning!", "Please check the Empty Field.", "warning"); 
</script>
<?php
  }else{
    $exist = "SELECT count(*) as e,id_section,sec_name,a_strand,a_level FROM tbl_section WHERE a_level like '$a_level' AND sec_name like '$sec_name' AND a_strand like '$a_strand'";
    $exist_sql = mysqli_query($mysqli, $exist);
    $exist_row = mysqli_fetch_array($exist_sql);
    if($exist_row['e'] == 0){
      $query = "INSERT INTO tbl_section(id_section,sec_name,a_strand,max_stu,a_level) VALUES('$id','$sec_name','$a_strand','$max_stu','$a_level')";
      $sql = mysqli_query($mysqli, $query);
      echo '
      <div class="alert alert-success samuel animated shake alert-dismissable">
        <strong><span class="fa fa-check"></span> Success!</strong> 
        New Section <strong>'.$sec_name.' ,'.$a_strand.' for '.$a_level.'</strong> has been added.
      </div><hr>
      ';
?>
      <script type="text/javascript">
        setTimeout(function(){ 
         window.location.reload(1);
      }, 2000);
      </script>
      <?php
    }else{
      echo '
      <div class="alert alert-warning samuel animated shake alert-dismissable">
      <b><span class="fa fa-warning"></span></b><strong> Error!</strong> Section : <strong>'.$sec_name.' , '.$a_strand.' </strong>for '.$a_level.', is Already Exist!
      </div><hr>
      ';
    }
  }
}
?>

