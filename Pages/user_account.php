
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
          <h1><span class="fa fa-user-circle"></span> <b>List of Accounts</b></b></h1> 
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User Accounts</li>
          </ol>
      </section>
    <!-- Main content -->
<section class="content">
  <div class="row">
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="user-account-add" type="button" class="btn btn-primary btn-md"><i class="fa fa-user-plus"></i> Create Account</a>
            </div>
            <div class="box-body">
                    <table id="example1" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th> Options</th>
                            <th> Complete Name</th>
                            <th> Username</th>
                            <th> Type</th>
                            <th> Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $db->prepare("SELECT * FROM user WHERE Status='' ORDER BY a_Complete ASC");
                        $result->execute();
                        for($i=0; $row = $result->fetch(); $i++){
                            ?>

                        <tr onclick="window.location='user-account-edit?id=<?= $row['User_id']?>&type=user-account';" class="record">
                                <td style="padding: 0px; padding-left:5px;">
                                      <img src="../img/Settings_96px.png" height="32" style="margin-left:20px;">
                                </td>
                                <td><?php echo $row['a_Complete']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['type']; ?></td>
                                <td class="td-raf">(Encrypted)</td>
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
      include 'includes/scripts.php';
?>
</div>
</body>
</html>
