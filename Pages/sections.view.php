
<?php 
       include 'includes/header.php';
       require_once('../config/dbcon.php');
       require_once('includes/session-b.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar-a.php'; ?>
<link rel="stylesheet" type="text/css" href="../login/css/shake.css">
<link rel="stylesheet" type="text/css" href="css/raf-style.css">
<script src="../dist/js/sweetalert.min.js"></script> 


<style type="text/css">
  th{ 
    color:white;
  }
</style>
<?php
      if(isset($_GET['id'])){
        $id = $_GET['id'];
        $edit = mysqli_query($mysqli, "SELECT * FROM tbl_section WHERE id_section = '$id'");
        $row = mysqli_fetch_array($edit);
      }elseif(isset($_GET['del'])){
          $id = $_GET['del'];
          $sql = mysqli_query($mysqli, "UPDATE tbl_section SET Status = 'Deleted' WHERE id_section = '$id'");
          echo "<script>alert('Success! Section Deleted.'); window.location='Sections'</script>";
      } 
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <span class="fa fa-edit"></span> <b>Edit Section Information</b></b>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Section</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box"><br>
            <div class="box-body">
                    <form class="form-horizontal" onsubmit="return false" autocomplete="off">
                              <div id="idsp"></div>
                              <input type="hidden" id="idx" value="<?=$row['id_section']; ?>">
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Section Name :</label>
                                <div class="col-sm-10">
                                  <input type="text" id="sec_name" value="<?=$row['sec_name']; ?>" class="form-control" placeholder="Enter Section Name here.." required>
                                </div>
                              </div>
                               <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Maximum Student :</label>
                                        <div class="col-sm-5">
                                          <input type="text" id="max_stu" value="<?=$row['max_stu']; ?>" class="form-control" placeholder="Maximum Population here.." maxlength="2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                        </div>

                                      <label class="control-label col-sm-2" for="email">Offer at :</label>
                                      <div class="col-sm-3">
                                            <select id="a_level" class="form-control" required>
                                                  <option selected><?= $row['a_level'] ?></option>
                                                  <option value="" disabled>-- Select Grade Level --</option>
                                                  <option value="Grade 11">Grade 11</option>
                                                  <option value="Grade 12">Grade 12</option>

                                            </select>
                                      </div>
                                </div>
                              <div class="form-group">
                                      <label class="control-label col-sm-2" for="email">Strand :</label>
                                      <div class="col-sm-10">
                                            <select id="a_strand" class="form-control" required>
                                                  <option selected><?= $row['a_strand'] ?></option>
                                                  <option value="" disabled>-- Select Strand --</option>
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
                        <button class="btn btn-default pull-left"><span class="fa fa-users"></span> View Student</button> 
                        <a href="?del=<?php echo $_GET['id'] ?>" onclick="return confirm('Are you sure you want to delete this Section ?');" style="margin-left:3px;" class="btn btn-default pull-right"><span class="glyphicon glyphicon-trash"></span> Delete</a> 
                        <button  onclick="updatesection()" class="btn btn-default" id="btn-ici"><span class="fa fa-save"></span> Save Changes</button> </form>
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




