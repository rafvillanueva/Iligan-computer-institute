<?php 
include('../../config/dbcon.php');
// Adding Data to table - #Accounts 
if(isset($_POST['stud_id'])){
  $id = $_POST['stud_id']; 
  $mode_of_reg = $_POST['mode_of_reg'];
  $time_encoded = $_POST['time_encoded'];
  $l_name = ucwords($_POST['l_name']); 
  $f_name = ucwords($_POST['f_name']);  
  $m_name = ucwords($_POST['m_name']);
  $lrn = $_POST['lrn'];
  $s_contact_num = $_POST['s_contact_num'];
  $birthdate = $_POST['birthdate'];
  $gender = $_POST['gender'];
  $religion = $_POST['religion'];
  $a_status = $_POST['a_status'];
  $regCode = $_POST['regCode'];
  $provCode = $_POST['provCode'];
  $citymunCode = $_POST['citymunCode'];
  $brgyCode = $_POST['brgyCode'];
  $address = strtoupper($_POST['address']);
  $current_school = ucwords($_POST['current_school']);
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






  // $grant_type = $_POST['grant_type'];
  // $student_type = $_POST['student_type'];   


  // if(empty($id) || empty($l_name) || empty($f_name) || empty($m_name) || empty($lrn) || empty($s_contact_num) || empty($birthdate) || empty($gender) || empty($religion) || empty($regCode) || empty($provCode) || empty($citymunCode) || empty($address) || empty($current_school) || empty($school_type) || empty($a_strand) || empty($a_level) || empty($grant_type) || empty($student_type) || empty($fb_account) || empty($a_status)){ 
  if(empty($id) || empty($l_name) || empty($f_name) || empty($m_name) || empty($birthdate) || empty($a_strand) || empty($a_level) || empty($student_type) || empty($mode_of_reg)){ 
?>
<!--     
      <div class="alert alert-danger samuel animated shake alert-dismissable">
      <strong><span class="fa fa-warning"></span> Warning!</strong> Please enter the following.
      </div><hr>  
-->
<script type="text/javascript">
            swal("Warning!", "Please check the Empty Field.", "warning"); 
</script>
<?php
  }else{
    $exist = "SELECT count(*) as e,stud_id,l_name,f_name,m_name FROM tbl_student WHERE l_name like '$l_name' AND f_name like '$f_name' AND m_name like '$m_name' AND birthdate like '$birthdate' OR l_name like '$l_name' AND f_name like '$f_name' AND birthdate like '$birthdate' OR l_name like '$l_name' AND f_name like '$f_name' AND m_name like '$m_name' OR f_name like '$l_name' AND l_name like '$f_name' AND birthdate like '$birthdate'";    
    $exist_sql = mysqli_query($mysqli, $exist);
    $exist_row = mysqli_fetch_array($exist_sql);
    if($exist_row['e'] == 0){
      $query1 = "INSERT INTO tbl_student(stud_id,mode_of_reg,time_encoded,l_name,f_name,m_name,x_name,age,lrn,s_contact_num,birthdate,gender,religion,a_status,regCode,provCode,citymunCode,brgyCode,address,current_school,school_type,year_grad,a_strand,a_level,fb_account,ip,s_ip,mt,s_mt) VALUES('$id','$mode_of_reg','$time_encoded','$l_name','$f_name','$m_name','$x_name','$age','$lrn','$s_contact_num','$birthdate','$gender','$religion','$a_status','$regCode','$provCode','$citymunCode','$brgyCode','$address','$current_school','$school_type','$year_grad','$a_strand','$a_level','$fb_account','$ip','$s_ip','$mt','$s_mt')";
      $query2 = "INSERT INTO tbl_studentinfo(stud_id,grant_type,student_type,learning_modality,referred,last_levelcompleted,last_yearcompleted,school_id,school_last_attended,school_address,fathers_name,f_contactnum,mothers_name,m_contactnum,guardian_name,guardian_relationship,guardian_contactnum,credentials) VALUES('$id','$grant_type','$student_type','$learning_modality','$referred','$last_levelcompleted','$last_yearcompleted','$school_id','$school_last_attended','$school_address','$fathers_name','$f_contactnum','$mothers_name','$m_contactnum','$guardian_name','$guardian_relationship','$guardian_contactnum','$credentials')";
      $sql1 = mysqli_query($mysqli, $query1);
      $sql2 = mysqli_query($mysqli, $query2);
      // echo '
      // <div class="alert alert-success samuel animated shake alert-dismissable">
      //   <strong><span class="fa fa-check"></span> Success!</strong> 
      //   New Student <a href="#" class="alert-link">'.$l_name.' , '.$f_name.' '.$m_name.'</a> has been added.
      // </div>
      // ';
      ?>
<script type="text/javascript">
            swal("Success!", "New Student has been added.", "success");   
            setTimeout(function(){ 
            window.location.reload(1);
            }, 2000);   
</script>
<!-- 
       <script type="text/javascript">
       setTimeout(function(){ 
       window.location.reload(1);
       }, 2000);
       </script>   
--> 
      <?php
    }else{
?>      
<!--  echo '
      <div class="alert alert-warning samuel animated shake alert-dismissable">
        <strong><span class="fa fa-warning"></span> Error! '.$exist_row['stud_id'].'</strong> is Already Exist! Owned by : " '.$exist_row['l_name'].' , ' . $exist_row['f_name'] . ' ' . $exist_row['m_name']. '"
      </div>
      '; 
-->
<script type="text/javascript">
            swal("Error!", "Student is Already Exist.", "error"); 
</script>

<?php
    }
  }
}
?>

