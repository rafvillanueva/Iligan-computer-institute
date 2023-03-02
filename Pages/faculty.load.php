
<?php 
       include 'includes/header.php';
       require_once('../config/dbcon.php');
       require_once('includes/session-b.php');  
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include 'includes/navbar.php'; ?>
<script src="../dist/js/sweetalert.min.js"></script> 
<link rel="stylesheet" type="text/css" href="../login/css/shake.css">
<link rel="stylesheet" type="text/css" href="css/raf-style.css">

      <!-- GET FUNCTIONS -->
      <?php
            if(isset($_GET['id'])){
              $id = $_GET['id'];
              $edit = mysqli_query($mysqli, "SELECT * FROM user WHERE User_id = '$id'");
              $row = mysqli_fetch_array($edit);
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
<?php include'includes/modal_logs.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         <b><span class="fa fa-file"></span> 
              List of Grade Section to Load 
                  (<b style="color:#D72958;">
                    <?php  
                            //echo $today = date("F j, Y");
                            date_default_timezone_set("Asia/Manila");
                            $month = date("F"); // Get the number of the month, 1-12
                            if($month <= 6) { 
                              echo "2nd Semester"; echo " "; echo date("Y",strtotime("-1 year")); echo "-"; echo date("Y");
                            }else{
                              echo "1st Semester"; echo " "; echo date("Y"); echo "-"; echo date("Y",strtotime("+1 year"));
                            }
                    ?>
                  </b>)
         </b>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Faculty Loads</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
                      <div id="idsp"></div>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th width="20%">Grade Level</th>
                            <th width="50%">Subject</th>
                            <th width="20%">Section</th>
                            <th><center>Actions</center></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Grade 11</td>
                            <form class="form-horizontal" onsubmit="return false" autocomplete="off">

                              <?php        //echo $today = date("F j, Y");
                                           date_default_timezone_set("Asia/Manila");
                                           $month = date("F"); // Get the number of the month, 1-12
                                           if($month <= 6) { 
                              ?>
                                         <input type="hidden" id="Semester_year" value="<?="2nd Semester"; echo " "; echo date("Y",strtotime("-1 year")); echo "-"; echo date("Y"); ?>">
                              <?php }else{ ?>
                                         <input type="hidden" id="Semester_year" value="<?="1st Semester"; echo " "; echo date("Y"); echo "-"; echo date("Y",strtotime("+1 year")); ?>">
                              <?php } ?>

                                          <input type="hidden" id="idx" value="<?=$row['User_id']; ?>">
                                          <input type="hidden" id="a_level" value="Grade 11">
                            <td>         
                              <select id="Subjectloads" class="form-control" required>
                                        <option value="" selected disabled>----</option>
                                        <?php
                                          $Subject = mysqli_query($mysqli, "SELECT * FROM tbl_subjects WHERE Offer_at='Grade 11' AND Status='' ORDER BY Description ASC");
                                          while($subject_row_g11 = mysqli_fetch_array($Subject)){
                                        ?>
                                          <option value="<?= $subject_row_g11['subject_id'] ?>" required><?= $subject_row_g11['Subject_Code'] ?></option>
                                        <?php
                                          }
                                        ?>
                              </select>
                            </td>
                            <td>
                              <select id="Section" class="form-control" required>
                                          <option value="" selected disabled>----</option>
                                        <?php
                                          $s_name = mysqli_query($mysqli, "SELECT * FROM tbl_section WHERE Status='' AND a_level='Grade 11'  ORDER BY sec_name ASC");
                                          while($Sec_row = mysqli_fetch_array($s_name)){
                                        ?>
                                          <option value="<?= $Sec_row['id_section'] ?>" required><?= $Sec_row['sec_name'] ?></option>
                                        <?php
                                          }
                                        ?>
                              </select>
                            </td>
                            <td><center><button onclick="insertfacload()" class="btn btn-primary btn-sm" style="padding: 5px 25px;"><span class="fa fa-plus"></span> Load</button></center></td>
                            </form>
                          </tr>



                          <tr>
                            <td>Grade 12</td>
                            <form class="form-horizontal" onsubmit="return false" autocomplete="off">

                              <?php        //echo $today = date("F j, Y");
                                           date_default_timezone_set("Asia/Manila");
                                           $month = date("F"); // Get the number of the month, 1-12
                                           if($month <= 6) { 
                              ?>
                                         <input type="hidden" id="Semester_year" value="<?="2nd Semester"; echo " "; echo date("Y",strtotime("-1 year")); echo "-"; echo date("Y"); ?>">
                              <?php }else{ ?>
                                         <input type="hidden" id="Semester_year" value="<?="1st Semester"; echo " "; echo date("Y"); echo "-"; echo date("Y",strtotime("+1 year")); ?>">
                              <?php } ?>

                                          <input type="hidden" id="idx" value="<?=$row['User_id']; ?>">
                                          <input type="hidden" id="a_level" value="Grade 12">
                            <td>         
                              <select id="Subjectloads" class="form-control" required>
                                        <option value="" selected disabled>----</option>
                                        <?php
                                          $Subject = mysqli_query($mysqli, "SELECT * FROM tbl_subjects WHERE Offer_at='Grade 12' AND Status='' ORDER BY Description ASC");
                                          while($subject_row_g12 = mysqli_fetch_array($Subject)){
                                        ?>
                                          <option value="<?= $subject_row_g12['subject_id'] ?>" required><?= $subject_row_g12['Subject_Code'] ?></option>
                                        <?php
                                          }
                                        ?>
                              </select>
                            </td>
                            <td>
                              <select id="Section" class="form-control" required>
                                          <option value="" selected disabled>----</option>
                                        <?php
                                          $s_name = mysqli_query($mysqli, "SELECT * FROM tbl_section WHERE Status='' AND a_level='Grade 12'  ORDER BY sec_name ASC");
                                          while($Sec_row = mysqli_fetch_array($s_name)){
                                        ?>
                                          <option value="<?= $Sec_row['id_section'] ?>" required><?= $Sec_row['sec_name'] ?></option>
                                        <?php
                                          }
                                        ?>
                              </select>
                            </td>
                            <td><center><button onclick="insertfacload()" class="btn btn-primary btn-sm" style="padding: 5px 25px;"><span class="fa fa-plus"></span> Load</button></center></td>
                            </form>
                          </tr>
                        </tbody>
                      </table>
                  </form>
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





