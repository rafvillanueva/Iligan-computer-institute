
<?php 
       include 'includes/header.php';
       require_once('../config/dbcon.php');
       require_once('includes/session.php'); 
?>
<body class="hold-transition skin-blue sidebar-mini">
<link rel="stylesheet" type="text/css" href="css/raf-style.css">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b> Faculty Advisory</b></b>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li> 
        <li class="active"><span class=""></span> Faculty Advisory</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content"> 
      <div class="row">
        <div class="col-xs-12"> 
          <div class="box">
<!--             <div class="box-header with-border">
              <a href="Sections-add" type="button" class="btn btn-default btn-md btn-flat" style="background-color:#D72958; color:white;"><i class="fa fa-plus"></i> Add Section</a>
            </div> -->
            <div class="box-body">
                    <table id="example1" class="table table-striped">
                              <thead>
                                  <tr>  
                                            <th></th>
                                            <th>Section Name</th>
                                            <th>Strand</th>
                                            <th>Grade Level</th>
                                            <th>No. of Student</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  $IDX = $_SESSION['User_id'];
                                  $result = $db->prepare("SELECT a.semester_year,b.sec_name,b.a_strand,b.a_level FROM tbl_advisory a, tbl_section b WHERE a.id_section=b.id_section AND a.User_id='$IDX'");
                                  $result->execute();
                                  for($i=0; $row = $result->fetch(); $i++){
                                      ?>
                                              <tr class="record">
                                                      <td></td>
                                                      <td><?php echo $row['sec_name']; ?></td>
                                                      <td><?php echo $row['a_strand']; ?></td>
                                                      <td><?php echo $row['a_level']; ?></td>
                                                      <td></td>
                                              </tr>   
                                  <?php } ?>
                              </tbody>
                      </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
  <style type="text/css">
    .td-raf{
      font-weight:bold;
      color:red;
    }
  </style>
<?php 
      include 'includes/footer.php'; 
?>
</div>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
