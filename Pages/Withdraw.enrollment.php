
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
              $edit = mysqli_query($mysqli, "SELECT * FROM tbl_student WHERE stud_id = '$id'");
              $row = mysqli_fetch_array($edit);
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
      <li class=""><a href="Records-view?id=<?= $_GET['id']?>&type=Records-view"><i class="fa fa-arrow-left"></i> <span>Return</span></a></li>
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
       <b>Withdrawal of Enrollment/Registration</b>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Withdrawal of Enrollment</li>
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
                        <?php if($row['gender'] == "Male"){ ?>
                            <div class="media-left">
                              <img src="<?php echo (!empty($row['image_location'])) ? 'uploads/'.$row['image_location'] : '../img/unuser1.png'; ?>" class="thumbnail" alt="User Image" style="width:110px; height:115px;">
                            </div> 
                        <?php }else{ ?>
                            <div class="media-left">
                              <img src="<?php echo (!empty($row['image_location'])) ? 'uploads/'.$row['image_location'] : '../img/unuser2.png'; ?>" class="thumbnail" alt="User Image" style="width:110px; height:115px;">
                            </div> 
                        <?php } ?> 
                    </div>
                    <div class="media-body">
                      <h3 class="media-heading"><b><?=$row['l_name']; ?>, <?=$row['f_name']; ?> <?=$row['m_name']; ?> <?=$row['x_name']; ?></b><small> &nbsp;<i>Date Encoded : <?=$row['time_encoded']; ?></i></small></h3>
                      <h4>Strand : <b><?=$row['a_strand']; ?></b></h4>
                      <h4>Contact Number : <b><?=$row['s_contact_num']; ?></b></h4>
                      <h4>Withdrawal Date : <b style="color:green;"><?php echo $today = date("F j, Y"); date_default_timezone_set("Asia/Manila"); echo" ";date("l") . "<br>"; echo date("h:i a"); ?></b></h4>
                    </div>
                  </div>
                </div><hr>
                <div class="container-fluid">
                  <form method="POST" autocomplete="off">
                    <input type="hidden" name="date_withdrawal" value="<?php echo $today = date("F j, Y"); date_default_timezone_set("Asia/Manila"); echo" ";date("l") . "<br>"; echo date("h:i a"); ?>">
                    <input type="hidden" name="confirmed_by" value="<?php echo $_SESSION['a_Complete']; ?>">
                    <input type="hidden" name="stud_id" value="<?=$row['stud_id']; ?>">
                    <label for="comment">Reason/s :</label>
                    <textarea class="form-control" rows="4" name="w_reason" placeholder="Reason/s for withdrawal of enrollment must be stated here.." required></textarea>
                    <br>
                    <h4>Confirmed by : <b style="color:green;"><?php echo $_SESSION['a_Complete']; ?></b></h4>

                    <!-- Button trigger modal -->
                    <button id="btn-ici" type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#withdrawal"><span class="glyphicon glyphicon-check"></span> Submit
                    </button>
                    <!-- End Button trigger modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="withdrawal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLongTitle">Confirm student withdrawal</h4>
                          </div>
                          <div class="modal-body">
                             <p style="font-size:16px;">This action <b>cannot</b> be undone. Are you sure you'd like to withdraw <b><?=$row['l_name']; ?>, <?=$row['f_name']; ?> <?=$row['m_name']; ?> <?=$row['x_name'];?></b>?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary pull-right" name="x_withdraw" type="submit" style="letter-spacing:1px;">Withdraw</button>
                          </div>
                        </div>
                      </div>
                    </div>

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







