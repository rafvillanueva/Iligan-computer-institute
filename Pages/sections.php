
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
        <span class="fa fa-sitemap"></span><b> List of Sections</b></b>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li> 
        <li class="active"><span class=""></span> Sections</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content"> 
      <div class="row">
        <div class="col-xs-12"> 
          <div class="box">
            <div class="box-header with-border">
              <a href="Sections-add" type="button" class="btn btn-primary btn-md"><i class="fa fa-plus"></i> Add Section</a>
            </div>
            <div class="box-body">
                    <table id="example1" class="table table-striped">
                              <thead>
                                  <tr>
                                      <th> Options</th>
                                      <th> Section Name</th>
                                      <th> Strands</th>
                                      <th> Maximum Student</th>
                                      <th> Level</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  $result = $db->prepare("SELECT * FROM tbl_section WHERE Status = '' ORDER BY sec_name ASC");
                                  $result->execute();
                                  for($i=0; $row = $result->fetch(); $i++){
                                      ?>

                                  <tr onclick="window.location='Sections-view?id=<?= $row['id_section']?>&type=section-view';" class="record">
                                          <td style="padding: 0px; padding-left:5px;">
                                            <img src="../img/Settings_96px.png" height="30" style="margin-left:20px;">
                                          </td>
                                          <td><?php echo $row['sec_name']; ?></td>
                                          <td><?php echo $row['a_strand']; ?></td>
                                          <td><?php echo $row['max_stu']; ?></td>
                                          <td><?php echo $row['a_level']; ?></td>
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
