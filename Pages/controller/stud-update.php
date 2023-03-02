<?php 
include('../../config/dbcon.php');
// Updating Data to table - #Accounts
if(isset($_POST['idx'])){
  $idz = $_POST['idx'];
  $mode_of_reg = ucwords($_POST['mode_of_reg']);
  $l_name = ucwords($_POST['l_name']); 
  $f_name = ucwords($_POST['f_name']);  
  $m_name = ucwords($_POST['m_name']);
  $lrn = $_POST['lrn'];
  $s_contact_num = $_POST['s_contact_num'];
  $birthdate = $_POST['birthdate'];
  $gender = $_POST['gender'];
  $religion = $_POST['religion'];
  $regCode = $_POST['regCode'];
  $provCode = $_POST['provCode'];
  $citymunCode = $_POST['citymunCode'];
  $brgyCode = $_POST['brgyCode'];
  $address = strtoupper($_POST['address']);
  $current_school = $_POST['current_school'];
  $school_type = $_POST['school_type'];
  $year_grad = $_POST['year_grad'];
  $a_strand = $_POST['a_strand'];
  $a_level = $_POST['a_level'];
  $fb_account = ucwords($_POST['fb_account']);

  $age = date_diff(date_create($_POST['birthdate']), date_create('now'))->y;

  $grant_type = $_POST['grant_type'];
  $student_type = $_POST['student_type'];

  $fathers_name = ucwords($_POST['fathers_name']);
  $f_contactnum = $_POST['f_contactnum'];
  $mothers_name = ucwords($_POST['mothers_name']);
  $m_contactnum = $_POST['m_contactnum'];

  $guardian_name = ucwords($_POST['guardian_name']);
  $guardian_relationship = ucwords($_POST['guardian_relationship']);
  $guardian_contactnum = $_POST['guardian_contactnum'];
  $credentials = ucwords($_POST['credentials']);

  $x_name = $_POST['x_name'];
  $ip = ucwords($_POST['ip']);
  $s_ip = ucwords($_POST['s_ip']);
  $mt = ucwords($_POST['mt']);
  $s_mt = ucwords($_POST['s_mt']);

  $learning_modality = ucwords($_POST['learning_modality']);
  $referred = ucwords($_POST['referred']);
  
  $last_levelcompleted = ucwords($_POST['last_levelcompleted']);
  $last_yearcompleted = ucwords($_POST['last_yearcompleted']);
  $school_id = ucwords($_POST['school_id']);
  $school_last_attended = ucwords($_POST['school_last_attended']);
  $school_address = ucwords($_POST['school_address']);



if(empty($l_name) || empty($f_name) || empty($m_name) || empty($birthdate) || empty($a_strand) || empty($a_level) || empty($student_type) || empty($mode_of_reg)){ 
  ?>
      <script type="text/javascript">
                  swal("Warning!", "Please check the Empty Field.", "warning"); 
      </script>
  <?php
  }else{
    $exist = "SELECT count(*) as e,stud_id,l_name,f_name,m_name FROM tbl_student WHERE l_name like '$l_name' AND f_name like '$f_name' AND m_name like '$m_name' AND birthdate like '$birthdate' OR l_name like '$l_name' AND f_name like '$f_name' AND birthdate like '$birthdate' OR l_name like '$l_name' AND f_name like '$f_name' AND m_name like '$m_name' OR f_name like '$l_name' AND l_name like '$f_name' AND birthdate like '$birthdate'"; 
    $exist_sql = mysqli_query($mysqli, $exist);
    $exist_row = mysqli_fetch_array($exist_sql);

    if($exist_row['e'] == 0){

        $query = "UPDATE tbl_student SET f_name = '$f_name', l_name = '$l_name', m_name = '$m_name', birthdate = '$birthdate' WHERE stud_id = '$idz'";
        $sql = mysqli_query($mysqli, $query);
?>

<!--         echo '
        <div class="alert alert-success samuel animated shake alert-dismissable">
          <strong><span class="fa fa-check"></span> Success!</strong> 
          Account Member <a href="#" class="alert-link">'.$a_Complete.'</a> is now updated.
        </div>
        '; -->
        <script type="text/javascript">
                    swal("Success!", "Student Information is now updated.", "success");   
                    setTimeout(function(){ 
                    window.location.reload(1);
                    }, 2000);   
        </script>
<?php  
      }else{
      $query1 = "UPDATE tbl_student SET mode_of_reg = '$mode_of_reg',l_name = '$l_name', f_name = '$f_name', m_name = '$m_name', x_name = '$x_name', age = '$age', lrn = '$lrn', s_contact_num = '$s_contact_num', birthdate = '$birthdate', gender = '$gender', religion = '$religion', regCode = '$regCode', provCode = '$provCode', citymunCode = '$citymunCode', brgyCode = '$brgyCode', address = '$address', current_school = '$current_school', school_type = '$school_type', year_grad = '$year_grad', a_strand = '$a_strand', a_level = '$a_level',fb_account = '$fb_account',ip='$ip', s_ip='$s_ip', mt = '$mt', s_mt = '$s_mt' WHERE stud_id = '$idz'";

      $query2 = "UPDATE tbl_studentinfo SET school_address = '$school_address',school_last_attended = '$school_last_attended',school_id = '$school_id',last_yearcompleted = '$last_yearcompleted',last_levelcompleted = '$last_levelcompleted',referred = '$referred',learning_modality = '$learning_modality',grant_type = '$grant_type', student_type = '$student_type', fathers_name = '$fathers_name', f_contactnum = '$f_contactnum', mothers_name = '$mothers_name', m_contactnum = '$m_contactnum', guardian_name = '$guardian_name', guardian_relationship = '$guardian_relationship', guardian_contactnum = '$guardian_contactnum', credentials = '$credentials' WHERE stud_id = '$idz'";
      
      $sql1 = mysqli_query($mysqli, $query1);
      $sql2 = mysqli_query($mysqli, $query2);

     ?>
        <script type="text/javascript">
                    swal("Success!", "Student Information is now updated.", "success");   
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

