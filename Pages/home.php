
<?php  
       include 'includes/header.php'; 
       require_once('../config/dbcon.php');
       require_once('includes/session.php');  

?>
<link rel="stylesheet" type="text/css" href="css/raf-style.css">
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

<?php 
         date_default_timezone_set("Asia/Manila");
         $month = date("F"); // Get the number of the month, 1-12
         if($month <= 6) { 
           $SemToNow = date("Y",strtotime("-1 year"))."-".date("Y");
         }else{
           $SemToNow = date("Y")."-".date("Y",strtotime("+1 year"));
         }
 ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b>Dashboard (<b>SY: <?php echo $SemToNow ?></b>)</b>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard </li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <?php include'includes/sms.daily.php'; ?>
        <div style="background-color: #e5e5e5; padding: 9px;">
            <span class="fa fa-volume-up"></span> Hello! and Welcome, <b><?= $_SESSION['a_Complete']; ?></b> as [ <b><?= $_SESSION['type']; ?></b> ]. <?= $msg ?>
        </div> <br>
      <!-- Small boxes (Stat box) -->

      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#28ACB5;">
            <div class="inner">
              <?php 
                  try{
                  include'../config/dbcon.php';
                  }catch(PDOException$to){
                  echo $to->getMessege();
                  exit;}
                  $tabz_query = "SELECT * FROM tbl_student_history a, tbl_studentinfo b, tbl_student c WHERE a.stud_id = b.stud_id AND b.stud_id = c.stud_id AND b.learning_modality='Modular (Printed)' AND s_year='$SemToNow' AND c.a_status='Enrolled'";
                  $get_tabs = $get_dbz->query($tabz_query);
                  $Prin_stud = $get_tabs->rowCount();
              ?>   
              <h3 style="color:white;"><?php echo "$Prin_stud"; ?></h3>              
              <p style="color:white;"><small>Printed Module</small></p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer" style="background-color:#D72958;">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#28ACB5;">
            <div class="inner">  
              <?php 
                  try{
                  include'../config/dbcon.php';
                  }catch(PDOException$to){
                  echo $to->getMessege();
                  exit;}
                  $tabz_query = "SELECT * FROM tbl_student_history a, tbl_studentinfo b, tbl_student c WHERE a.stud_id = b.stud_id AND b.stud_id = c.stud_id AND b.learning_modality='Online' AND s_year='$SemToNow' AND c.a_status='Enrolled'";

                  $get_tabs = $get_dbz->query($tabz_query);
                  $GoogleClass_stud = $get_tabs->rowCount();
              ?>   
              <h3 style="color:white;"><?php echo "$GoogleClass_stud"; ?></h3>               
              <p style="color:white;"><small>Google Classroom</small></p>
            </div>
            <div class="icon">
              <i class="fa fa-google-plus"></i>
            </div>
            <a href="#" class="small-box-footer" style="background-color:#D72958;">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#28ACB5;">
            <div class="inner">
              <?php 
                  try{
                  include'../config/dbcon.php';
                  }catch(PDOException$to){
                  echo $to->getMessege();
                  exit;}
                  $tabz_query = "SELECT * FROM tbl_student_history a, tbl_studentinfo b, tbl_student c WHERE a.stud_id = b.stud_id AND b.stud_id = c.stud_id AND b.learning_modality='Repository (Digital)' AND s_year='$SemToNow' AND c.a_status='Enrolled'";
                  $get_tabs = $get_dbz->query($tabz_query);
                  $Digital_stud = $get_tabs->rowCount();
              ?>   
              <h3 style="color:white;"><?php echo "$Digital_stud"; ?></h3>    
              <p style="color:white;"><small>Digital</small></p>
            </div>
            <div class="icon">
              <i class="fa fa-mobile"></i>
            </div>
            <a href="#" class="small-box-footer" style="background-color:#D72958;">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#28ACB5;">
            <div class="inner">
              <?php 
                  try{
                  include'../config/dbcon.php';
                  }catch(PDOException$to){
                  echo $to->getMessege();
                  exit;}
                  $tabz_query = "SELECT * FROM tbl_student a,tbl_student_history b WHERE a.stud_id=b.stud_id AND a.a_status='Enrolled' AND s_year='$SemToNow'";
                  $get_tabs = $get_dbz->query($tabz_query);
                  $NumStud = $get_tabs->rowCount();
              ?>
              <h3 style="color:white;"><?php echo "$NumStud"; ?></h3>
              <p style="color:white;"><small>No. of Students</small></p>
            </div>
            <div class="icon">
              <i class="fa fa-id-badge"></i>
            </div>
            <a href="" class="small-box-footer" style="background-color:#D72958;">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

      <div class="row">
                <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#28ACB5;">
            <div class="inner">     
              <?php 
                  try{
                  include'../config/dbcon.php';
                  }catch(PDOException$to){
                  echo $to->getMessege();
                  exit;}
                  $tabz_query = "SELECT * FROM tbl_student_history a, tbl_studentinfo b, tbl_student c WHERE a.stud_id = b.stud_id AND a.stud_id = c.stud_id AND b.grant_type='Qualified Voucher Recipient (QVR)' AND s_year='$SemToNow' AND c.a_status='Enrolled'";
                  $get_tabs = $get_dbz->query($tabz_query);
                  $QVR = $get_tabs->rowCount();
              ?>   
              <h3 style="color:white;"><?php echo "$QVR"; ?></h3> 
              <p style="color:white;"><small>Qualified Voucher Recipient</small></p>
            </div>
            <div class="icon">
              <i class="fa fa-dropbox"></i>
            </div>
            <a href="" class="small-box-footer" style="background-color:#D72958;">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#28ACB5;">
            <div class="inner"> 
              <?php 
                  try{
                  include'../config/dbcon.php';
                  }catch(PDOException$to){
                  echo $to->getMessege();
                  exit;}
                  $tabz_query = "SELECT * FROM tbl_student_history a, tbl_studentinfo b, tbl_student c WHERE a.stud_id = b.stud_id AND a.stud_id = c.stud_id AND b.grant_type='Paying' AND s_year='$SemToNow' AND c.a_status='Enrolled'";
                  $get_tabs = $get_dbz->query($tabz_query);
                  $Paying = $get_tabs->rowCount();
              ?>   
              <h3 style="color:white;"><?php echo "$Paying"; ?></h3>     
              <p style="color:white;"><small>Paying</small></p>
            </div>
            <div class="icon">
              <i class="fa fa-google-wallet"></i>
            </div>
            <a href="" class="small-box-footer" style="background-color:#D72958;">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#28ACB5;">
            <div class="inner">  
              <?php 
                  try{
                  include'../config/dbcon.php';
                  }catch(PDOException$to){
                  echo $to->getMessege();
                  exit;}
                  $tabz_query = "SELECT * FROM tbl_student_history a, tbl_studentinfo b, tbl_student c WHERE a.stud_id = b.stud_id AND a.stud_id=c.stud_id AND b.grant_type='Education Service Contracting (ESC)' AND s_year='$SemToNow' AND c.a_status='Enrolled'";
                  $get_tabs = $get_dbz->query($tabz_query);
                  $esc = $get_tabs->rowCount();
              ?>   
              <h3 style="color:white;"><?php echo "$esc"; ?></h3>   
              <p style="color:white;"><small>Educational Service Contracting</small></p>
            </div>
            <div class="icon">
              <i class="fa fa-subscript"></i>
            </div>
            <a href="" class="small-box-footer" style="background-color:#D72958;">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#28ACB5;">
            <div class="inner">  
              <?php 
                  try{
                  include'../config/dbcon.php';
                  }catch(PDOException$to){
                  echo $to->getMessege();
                  exit;}
                  $tabz_query = "SELECT * FROM user WHERE type='Faculty'";
                  $get_tabs = $get_dbz->query($tabz_query);
                  $Facnums = $get_tabs->rowCount();
              ?>   
              <h3 style="color:white;"><?php echo "$Facnums"; ?></h3>
              <p style="color:white;"><small>No. of Faculty</small></p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="" class="small-box-footer" style="background-color:#D72958;">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        <div class="col-xs-12">
          <h3>
            <span class="pull-right">
              <!-- <a href="print.php" class="btn btn-success btn-sm btn-flat"><span class="glyphicon glyphicon-print"></span> Print</a> -->        

            </span>
          </h3>
        </div>
      </div>

<?php 
        // date_default_timezone_set("Asia/Manila");
        // $month = date("F"); // Get the number of the month, 1-12
        // if($month <= 6) { 
        // $SemToNow = date("Y",strtotime("-1 year"))."-".date("Y");
        // echo $SemToNow;
        // }else{
        // $SemToNow = date("Y")."-".date("Y",strtotime("+1 year"));
        // echo $SemToNow;
        // }
 ?>
      </section>
    </div>
  	<?php include 'includes/footer.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
    </script>
</body>
</html>
