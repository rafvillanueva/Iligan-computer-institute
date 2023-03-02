<?php 
       include 'includes/header.php';
       include 'includes/semester-gen.php';
       require_once('../config/dbcon.php');
       require_once('includes/session-b.php'); 
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include 'includes/navbar.php'; ?>
<script src="../dist/js/sweetalert.min.js"></script> 
<link rel="stylesheet" type="text/css" href="../login/css/shake.css">
<link rel="stylesheet" type="text/css" href="css/raf-style.css">
<script src="../dist/js/sweetalert.min.js"></script> 

<!-- GET FUNCTIONS -->
<?php
      if(isset($_GET['id'])){
        $id = $_GET['id'];
        $edit = mysqli_query($mysqli, "SELECT * FROM user WHERE User_id = '$id'");
        $row = mysqli_fetch_array($edit);
      }elseif(isset($_GET['del'])){
        $id = $_GET['del'];
        $sql = mysqli_query($mysqli, "DELETE * FROM tbl_advisory WHERE id = '$id'");
        echo "<script>alert('Success! Account Deleted.'); window.location='user-account'</script>";
    }      
    //*Assigned Student Query
?>
 
<style type="text/css">
  #id_raf{
    text-decoration:underline;
    font-weight: bold;
  }
</style>

      <!-- END GET -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">  
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
         <img src="<?php echo (!empty($_SESSION['image_location'])) ? 'uploads/'.$_SESSION['image_location'] : '../img/user-account.png'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $_SESSION['a_Complete']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div> 
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree" style="letter-spacing:1px;">
      <li class="header">c-Panel</li>
      <li class=""><a href="user-account-edit?id=<?= $row['User_id']?>&type=user-account"><i class="fa fa-arrow-left"></i> <span>Return</span></a></li>
      <li class=""><a data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-power-off"></i> <span>Log-out</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php 
    include'includes/modal_logs.php'; 
    include 'includes/add.advisory.view.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         <b><span class="fa fa-file"></span> 
           <b><?= ucwords($row['a_Complete']) ?></b> Advisory
         </b>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">View Advisory</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
                  <button class="btn btn-default" data-toggle="modal" data-target="#add-advisory" style="background-color:#D72958; color:white;"><span class="fa fa-plus"></span> Add Record</button> 
                  <hr> 
                  <div id="idsp"></div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                            <th>Section Name</th>
                                            <th>Strand</th>
                                            <th>Grade Level</th>
                                            <th>School Year</th>
                                            <th><center>Action</center></th>
                                    </tr>
                                    </thead>
                                        <tbody>
                                              <?php
                                                    $result = $db->prepare("SELECT a.semester_year,b.sec_name,b.a_strand,b.a_level FROM tbl_advisory a, tbl_section b WHERE a.id_section=b.id_section AND User_id = '$id'");
                                              $result->execute();
                                              for($i=0; $row = $result->fetch(); $i++){
                                                  ?>
                                              <tr class="record">
                                                      <td><?php echo $row['sec_name']; ?></td>
                                                      <td><?php echo $row['a_strand']; ?></td>
                                                      <td><?php echo $row['a_level']; ?></td>
                                                      <td><?php echo $row['semester_year']; ?></td>
                                                      <td><center>
                                                        <a href="?del=<?php echo $_GET['id'] ?>" onclick="return confirm('Are you sure you want to remove this subject ?');" class="btn btn-danger btn-xs btn-flat"><span class="fa fa-trash"></span> Removed</a>
                                                      </center></td>
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
<?php 
      include 'includes/footer.php'; 
      include 'includes/scripts.php';
?>
<script src="../dist/js/command/rafjas.js"></script>
</div>
</body>
</html>

