
<?php 
       include 'includes/header.php';
       require_once('../config/dbcon.php');
       require_once('includes/session-b.php'); 
?>
<body class="hold-transition skin-blue sidebar-mini">
<link rel="stylesheet" type="text/css" href="../login/css/shake.css">
<link rel="stylesheet" type="text/css" href="css/raf-style.css">
<div class="wrapper"> 

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar-a.php'; ?>
  
      <?php
          //Source code for delete functions 
          if(isset($_GET['id'])){
            $id = $_GET['id']; 
            $edit = mysqli_query($mysqli, "SELECT * FROM user WHERE User_id = '$id'");           
            $row = mysqli_fetch_array($edit);
          }elseif(isset($_GET['del'])){
              $id = $_GET['del'];
              $sql = mysqli_query($mysqli, "UPDATE user SET Status = 'Deleted' WHERE User_id = '$id'");
              echo "<script>alert('Success! Account Deleted.'); window.location='user-account'</script>";
          }
          //End Delete
      ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) --> 
    <section class="content-header">
      <h1>
      <?php 
            if($row['type'] == "Faculty"){
      ?>
            <span class="fa fa-edit"></span> <b>Faculty Information</b></b>
      <?php
            }elseif($row['type'] == "Administrator"){
      ?>
            <span class="fa fa-edit"></span> <b>Administrator Information</b></b>
      <?php
            }
      ?> 
        
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">View Profile</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body"> 
                        <small>
                            <div class="dropdown" id="edit">
                                <a href="javascript:void(0)" style="color: #75A4D2; font-size: 16px;">
                                    <span class="fa fa-gear"></span> More Options
                                </a>
                                <div class="dropdown-content">
                                   <!--  <a href="uploade_profile?id=<?= $_GET['id'] ?>"> Upload New Picture</a> -->
                                    <a href="Profile-Upload?id=<?= $_GET['id'] ?>&type=Profile-uploading"> Upload New Picture</a>
                                </div>
                            </div>
                        </small>
                   <div id="idsp"></div>
                   <form class="form-horizontal" onsubmit="return false" autocomplete="on">
                      <hr>
                        <div class="form-group">
                          <input type="hidden" id="idx" value="<?=$row['User_id']; ?>">
                          <label class="control-label col-sm-3" for="email">Complete Name :</label>
                          <div class="col-sm-9">
                            <input type="text" id="a_Complete" value="<?=$row['a_Complete']; ?>" class="form-control" placeholder="Enter Full name here.." required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-3" for="email">Username :</label>
                          <div class="col-sm-9">
                            <input type="text" id="username" value="<?=$row['username']; ?>" class="form-control" placeholder="Enter user account here.." required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-3">New Password : </label>
                                <div class="col-sm-8">
                                  <input type="text" id="password" class="form-control"  placeholder="Enter New Password here..">
                                </div>
                                <div class="col-sm-1">
                                   <span onclick="password_default()" class="btn btn-default pull-right">Default</span>
                                </div>
                        </div>  

                        <div class="form-group">
                          <label class="control-label col-sm-3" for="email">Account type :</label>
                          <div class="col-sm-9">
                            <select id="type" class="form-control" required>
                                  <option selected><?= $row['type'] ?></option>
                                  <option value="" disabled>---</option>
                                  <option value="Administrator">Administrator</option>
                                  <option value="Faculty">Faculty</option>
                                  <option value="Registrar">Registrar</option>
                            </select>
                          </div>
                        </div>
                            <hr>
                            <?php 
                                if($row['type'] == "Faculty"){
                            ?>
                              <button onclick="updatedata()" class="btn btn-default active pull-left" id="btn-ici"><span class="fa fa-save"></span> Save Changes</button>

                              <a href="?del=<?php echo $_GET['id'] ?>" onclick="return confirm('Are you sure you want to delete this Account ?');" style="margin-left:3px;" class="btn btn-default pull-left"><span class="glyphicon glyphicon-trash"></span> Removed</a> 

                              <a href="Advisory?id=<?= $row['User_id']?>" type="button" class="btn btn-default pull-right"><span class="fa fa-universal-access"></span> View Advisory</a>

                            <?php
                                }else{
                            ?>
                              <a href="?del=<?php echo $_GET['id'] ?>" onclick="return confirm('Are you sure you want to delete this Account ?');" style="margin-left:3px;" class="btn btn-default pull-right"><span class="glyphicon glyphicon-trash"></span> Delete</a> 
                              <button onclick="updatedata()" class="btn btn-default active pull-right" id="btn-ici"><span class="fa fa-check"></span> Save Changes</button>
                            <?php
                                }
                            ?> 
                    </form> 
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
      include 'includes/scripts.php';
?>
<script src="../dist/js/command/rafjas.js"></script>
</div>
</body>
</html>





