
<?php 
       include 'includes/header.php';
       require_once('../config/dbcon.php');
       require_once('includes/session-b.php'); 
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>
<link rel="stylesheet" type="text/css" href="../login/css/shake.css">
<link rel="stylesheet" type="text/css" href="css/raf-style.css">
<script src="../dist/js/sweetalert.min.js"></script> 
<style type="text/css">
  #i-raf{
    color:red; 
    font-size:13px;
    font-weight: bold; 
  }
  #h5-student-header{
    letter-spacing:0.5px; 
  }
  #i-header{
    color:orange; 
  }
</style>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <span class="fa fa-edit"></span> <b>Student Registration</b></b>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Student Registration</li>
      </ol>
    </section>
    <!-- Main content -->
          <?php include'includes/registration.php'; ?>  
    <!-- End Content   -->    
  </div>
          <?php include 'includes/footer.php'; ?>
</div>
          <?php include 'includes/scripts.php'; ?>
</body>
</html>


<!--                           <script type="text/javascript">
                                function school_setting(){
                                  var acc_level = document.getElementById("s_type").value;
                                  if(acc_level === "Public"){
                                    document.getElementById("staff_group1").style.display = "block";
                                    document.getElementById("staff_group3").style.display = "none";
                                  }else if(acc_level === "Private"){
                                    document.getElementById("staff_group1").style.display = "block";
                                    document.getElementById("staff_group3").style.display = "none";
                                  }else if(acc_level === "ALS"){
                                    document.getElementById("staff_group3").style.display = "block";
                                    document.getElementById("staff_group1").style.display = "none";
                                  } else{
                                    document.getElementById("staff_group1").style.display = "none";                                    
                                    document.getElementById("staff_group2").style.display = "none";
                                  }
                                }
                            </script> -->







