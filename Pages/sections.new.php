
<?php 
       include 'includes/header.php';
       require_once('../config/dbcon.php');
       require_once('includes/session-b.php'); 
       include 'controller/GEN-ID.php';
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include 'includes/navbar.php'; ?>
<link rel="stylesheet" type="text/css" href="../login/css/shake.css">
<link rel="stylesheet" type="text/css" href="css/raf-style.css">
<script src="../dist/js/sweetalert.min.js"></script> 
<style type="text/css">
  th{
    color:white;
  } 
</style>
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
              <li class=""><a href="Sections"><i class="fa fa-arrow-left"></i> <span>Return</span></a></li>
              <li class=""><a data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-power-off"></i> <span>Log-out</span></a></li>
            </ul>
          </section>
  <!-- /.sidebar -->
 </aside>
<!-- Modal -->
<?php include'includes/modal_logs.php'; ?>
<!-- end modal -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <span class="fa fa-plus"></span> <b>Add New Section</b></b>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Section</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
        <br>
            <div class="box-body">                    
                    <form class="form-horizontal" onsubmit="return false" autocomplete="off">
                      <div id="idsp"></div>
                              <div class="form-group">
                                <div class="col-sm-9">
                                  <input type="hidden" id="id_section" class="form-control" readonly value="SEC-<?php echo $id_section; ?>" style="width: 25%;">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Section Name :</label>
                                <div class="col-sm-10">
                                  <input type="text" id="sec_name" class="form-control" placeholder="Enter Section Name here.." required>
                                </div>
                              </div>
                               <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Maximum Student :</label>
                                        <div class="col-sm-5">
                                          <input type="text" id="max_stu" class="form-control" placeholder="Maximum Population here.." maxlength="2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                        </div>

                                      <label class="control-label col-sm-2" for="email">Offer at :</label>
                                      <div class="col-sm-3">
                                            <select id="a_level" class="form-control" required>
                                                  <option value="" selected disabled>-- Select Grade Level --</option>
                                                  <option value="Grade 11">Grade 11</option>
                                                  <option value="Grade 12">Grade 12</option>
                                            </select>
                                      </div>
                                </div>
                              <div class="form-group">
                                      <label class="control-label col-sm-2" for="email">Strand :</label>
                                      <div class="col-sm-10">
                                            <select id="a_strand" class="form-control" required>
                                                  <option value="" selected disabled>-- Select Strand --</option>
                                                  <option value="Accountancy, Business and Management (ABM)">Accountancy, Business and Management (ABM)</option>
                                                  <option value="Humanities and Social Sciences (HUMSS)">Humanities and Social Sciences (HUMSS)</option>
                                                  <option value="General Academic Strand (GAS)">General Academic Strand (GAS)</option>
                                                  <option value="Computer Engineering (TVL - CE)">Computer Engineering (TVL - CE)</option>
                                                  <option value="Information Technology (TVL - IT)">Information Technology (TVL - IT)</option>
                                                  <option value="Culinary Arts (TVL - CA)">Culinary Arts (TVL - CA)</option>
                                            </select>
                                      </div>             

                              </div>
                  <div class="modal-footer">
                                  <button onclick="insertsection()" class="btn btn-default" id="btn-ici"><span class="glyphicon glyphicon-check"></span> Save</button> </form>
                  </div> 
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




