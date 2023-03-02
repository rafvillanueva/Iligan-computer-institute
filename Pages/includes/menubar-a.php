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


<?php 

          if(isset($_GET['id'])){
            $id = $_GET['id']; 
            $edit = mysqli_query($mysqli, "SELECT * FROM user WHERE id = '$id'");           
            $row = mysqli_fetch_array($edit);
          }


 ?>


        <?php
              if(isset($_GET['type'])){
                $type = $_GET['type'];
                if($type == "user-account"){
                   $link = "user-account";}
                elseif($type == "Enrollment-view"){
                   $link = "Enrollment";}        
                elseif($type == "section-view"){
                   $link = "Sections";}  
                elseif($type == "Profile-uploading"){
                   $link = "user-account";} 
                elseif($type == "Records-view"){
                   $link = "Records";} 
              }
        ?>


      <li class=""><a href="<?= $link ?>"><i class="fa fa-arrow-left"></i> <span>Return</span></a></li>
      <li class=""><a data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-power-off"></i> <span>Log-out</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<!-- Modal -->
<?php include'includes/modal_logs.php'; ?>
<!-- end modal -->