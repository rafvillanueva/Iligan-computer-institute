
<?php 
       include 'includes/header.php';
       require_once('../config/dbcon.php');
       require_once('includes/session-b.php'); 
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
        <span class="fa fa-users"></span><b> Withdrawn Students</b></b>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li> 
        <li class="active"><span class=""></span> Withdrawn Students</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content"> 
      <div class="row">
        <div class="col-xs-12"> 
          <div class="box">
<!--             <div class="box-header with-border">
                <button class="btn btn-primary"><span class="fa fa-print"></span> Print</button>
            </div> -->
            <div class="box-body">
                    <table id="example1" class="table table-striped">
                              <thead>
                                <tr>
                                    <th width="40%">Student Name <small><i style="color:red;">(Lastname, Firstname, Middlename)</i></small></th>
                                    <th>LRN</th>
                                    <th>Contact Number</th>
                                    <th>Grade Level</th>
                                    <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                            <?php
                                $result = $db->prepare("SELECT * FROM tbl_student WHERE a_status = 'Withdrawn'");
                                $result->execute();
                                for($i=0; $row = $result->fetch(); $i++){
                            ?>  
                            <tr class="record">
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
                                    <td><?php echo $row['lrn']; ?></td>
                                    <td><?php echo $row['s_contact_num']; ?></td>
                                    <td><?php echo $row['a_level']; ?></td>
                                    <td><button type="button" onclick="window.location='Withdraw-view?id=<?= $row['stud_id']?>&type=Withdraw-view';" class="btn btn-primary btn-sm">View</button></td>
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
