
<?php 
       include 'includes/header.php';
       require_once('../config/dbcon.php');
       require_once('includes/session-b.php'); 
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  
<link rel="stylesheet" type="text/css" href="../login/css/shake.css">
<link rel="stylesheet" type="text/css" href="css/raf-style.css">
<script src="../dist/js/sweetalert.min.js"></script>

      <!-- GET FUNCTIONS -->
      <?php
            if(isset($_GET['id'])){
              $id = $_GET['id'];
              $showrec = mysqli_query($mysqli, "SELECT * FROM tbl_student a,tbl_withdrawal b WHERE a.stud_id = b.stud_id AND a.stud_id = '$id'");
              $xrow = mysqli_fetch_array($showrec);
            }
      ?>
  
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
      <li class=""><a href="Withdraw"><i class="fa fa-arrow-left"></i> <span>Return</span></a></li>
      <li class=""><a data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-power-off"></i> <span>Log-out</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include'includes/modal_logs.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <b>Withdrawal History</b>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Withdrawal History</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row"> 
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border"><br>
                <div class="container">
                  <div class="media">
                    <div class="media-left">
                        <?php if($xrow['gender'] == "Male"){ ?>
                            <div class="media-left">
                              <img src="<?php echo (!empty($row['image_location'])) ? 'uploads/'.$xrow['image_location'] : '../img/unuser1.png'; ?>" class="thumbnail" alt="User Image" style="width:110px; height:115px;">
                            </div> 
                        <?php }else{ ?>
                            <div class="media-left">
                              <img src="<?php echo (!empty($row['image_location'])) ? 'uploads/'.$xrow['image_location'] : '../img/unuser2.png'; ?>" class="thumbnail" alt="User Image" style="width:110px; height:115px;">
                            </div> 
                        <?php } ?> 
                    </div>
                    <div class="media-body">
                      <h3 class="media-heading"><b><?=$xrow['l_name']; ?>, <?=$xrow['f_name']; ?> <?=$xrow['m_name']; ?> <?=$xrow['x_name']; ?></b><small> &nbsp;<i>Date Encoded : <?=$xrow['time_encoded']; ?></i></small></h3>
                      <h4>Strand : <b><?=$xrow['a_strand']; ?></b></h4>
                      <h4>Contact Number : <b><?=$xrow['s_contact_num']; ?></b></h4>
                      <h4>Grade Level : <b><?=$xrow['a_level']; ?></b></h4>
                    </div>
                  </div>
                </div><hr>
                <div class="container-fluid">
                  <form method="POST" autocomplete="off">
                    <input type="hidden" name="date_withdrawal" value="<?php echo $today = date("F j, Y"); date_default_timezone_set("Asia/Manila"); echo" ";date("l") . "<br>"; echo date("h:i a"); ?>">
                    <input type="hidden" name="confirmed_by" value="<?php echo $_SESSION['a_Complete']; ?>">
                    <input type="hidden" name="stud_id" value="<?=$row['stud_id']; ?>">
                    <label for="comment" style="font-size:20px;"><span class="fa fa-history"></span> Withdrawal history</label>
                    <button class="btn btn-default pull-right" type="button"><span class="fa fa-print"></span> Print</button>
                      <br><br>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Withdrawal Date</th>
                            <th>Reason</th>
                            <th>Confirmed by</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                              $students = "SELECT * FROM tbl_withdrawal WHERE stud_id = '$id'";
                              $student_query = mysqli_query($mysqli, $students);
                              while($row = mysqli_fetch_array($student_query)){
                           ?>

                          <tr>
                            <td><?= $row['date_withdrawal'] ?></td>
                            <td><?= $row['w_reason'] ?></td>
                            <td><?= $row['confirmed_by'] ?></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    <br>
            
                    <!-- Modal -->
                    <div class="modal fade" id="withdrawal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLongTitle">Recover student ...</h4>
                          </div>
                          <div class="modal-body">
                             <p style="font-size:16px;">Are you sure you want to restore <b><?=$xrow['l_name']; ?>, <?=$xrow['f_name']; ?> <?=$xrow['m_name']; ?> <?=$xrow['x_name'];?></b>?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-danger pull-right" name="w_restored" type="submit" style="letter-spacing:1px;">Confirm</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#withdrawal"><span class="fa fa-undo"></span> Restore student
                    </button>
                    <!-- End Button trigger modal -->
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
<?php 
      include 'controller/controls.php'; 
      include 'includes/footer.php'; 
      include 'includes/scripts.php';
?>
</div>
</body>
</html>







