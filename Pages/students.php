
<?php 
       include 'includes/header.php';
       require_once('../config/dbcon.php');
       require_once('includes/session-b.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<link rel="stylesheet" type="text/css" href="css/raf-style.css">
<script src="../dist/js/sweetalert.min.js"></script> 
<div class="wrapper">
  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <span class="fa fa-id-card"></span> <b>Student Enrollment (<small style="color:#D72958; font-size:22px; font-weight:bold;">SY: <?php echo date("Y")."-".date("Y",strtotime("+1 year")); ?></small>)</b></b>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><span class=""></span> Students list</li>
      </ol>
    </section>
    <!-- Main content -->  
    <section class="content">

  <form method="POST" action="includes/assigned.php">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <!-- <a href="#" type="button" class="btn btn-primary btn-md btn-flat" data-toggle="modal" data-target="#exampleModal"> View Section</a> --> 
              <a href="student_registration" type="button" class="btn btn-primary btn-md"><i class="fa fa-plus"></i> Register</a>
                  <!-- Assign input and Button -->
                  <div class="pull-left">
                    <select class="label-control input-sm" name="id_section" required>
                        <option selected disabled value="">-- Select Block --</option>
                          <?php
                              $s_name = mysqli_query($mysqli, "SELECT * FROM tbl_section WHERE Status='' ORDER BY sec_name AND a_level ASC");
                              while($Sec_row = mysqli_fetch_array($s_name)){
                          ?>
                          <option value="<?= $Sec_row['id_section'] ?>" required><?= $Sec_row['sec_name'] ?><?php echo "  "; ?>(<?= $Sec_row['a_level'] ?>)</option>
                          <?php } ?>
                    </select>
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-check"></span> Assigned</button>&nbsp;|&nbsp;
                  </div>

                  <div class="pull-right">
                      <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#Summary"><span class="fa fa-bar-chart"></span> Report</button>
                      <a href="includes/export/exportallstud.php" type="button" class="btn btn-success btn-md"><span class="fa fa-file-excel-o"></span> Excel</a>
                      <!-- <a href="Reporting" type="button" class="btn btn-default btn-md"><span class="fa fa-bar-chart"></span> Reporting</a> 
<!--                       
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Report
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#">HTML</a></li>
                          <li><a href="#">CSS</a></li>
                          <li><a href="#">JavaScript</a></li>
                        </ul>
                      </div>
                   -->
                  </div>
                  <!-- End Assign input and Button -->
            </div>
            <div class="box-body">
                    <table id="example1" class="table table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th> Student Name <small><i style="color:red;">(Lastname, Firstname, Middlename)</i></small></th>
                            <th>Age</th>
                            <th> Contact Number</th>
                            <th>Grade Level</th>
                            <th> Preferred Strand</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $result = $db->prepare("SELECT * FROM tbl_student WHERE a_status='Registered' ORDER BY l_name ASC");
                            $result->execute();
                            for($i=0; $row = $result->fetch(); $i++){
                        ?>  

                        <tr class="record">
                                <td><center><input type="checkbox" value="<?php echo $row['stud_id']; ?>" name="stud_id[]"></center></td>
                                </form>
                                <td style="padding: 0px; padding-left: 15px;">
                                    <?php 
                                          if($row['gender'] == "Male"){
                                    ?>
                                          <img src="../img/user1.png" height="32">
                                    <?php
                                          }else{
                                    ?>
                                          <img src="../img/user2.png" height="32">
                                    <?php
                                          }
                                    ?> 
                                  <?php echo $row['l_name']; ?>, <?php echo $row['f_name']; ?>, <?php echo $row['m_name']; ?>
                                </td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['s_contact_num']; ?></td>
                                <td><?php echo $row['a_level']; ?></td>
                                <td><?php echo $row['a_strand']; ?></td>
                                <td><button type="button" onclick="window.location='Enrollment-view?id=<?= $row['stud_id']?>&type=Enrollment-view';" class="btn btn-primary btn-sm">View</button></td>
                        </tr>   
                        <?php } ?>
                    </tbody>
                  </table>
                  <?php //include'assets/modal/view.section.php'; ?>
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
<?php 
include 'includes/scripts.php'; 
include'assets/modal/kraf.php';
?>
</body>
</html>
