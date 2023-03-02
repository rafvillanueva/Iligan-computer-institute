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
      <li class="header">DETAILS AND OPERATIONS</li>  
      <?php 
      if($_SESSION["type"]=='Administrator'){?>
                <li><a href="Dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                <li><a href="Enrollment"><i class="fa fa-solid fa-child"></i> <span>Enrollment</span></a></li>
                <li><a href="Records"><i class="fa fa-users"></i> <span>Students </span></a></li>
                <li><a href="Sections"><i class="fa fa-sitemap"></i> <span>Sections</span></a></li>
                 <li class="header">REPORTS</li>
                <li><a href="#"><i class="fa fa-user-times"></i> <span>Dropped</span></a></li>
                <li><a href="#"><i class="fa fa-paper-plane-o"></i> <span>Transferred</span></a></li>
                <li><a href="Withdraw"><i class="fa fa-remove"></i> <span>Withdrawn</span></a></li> 
                <li><a href="#"><i class="fa fa-graduation-cap"></i> <span>Alumni</span></a></li>
                <li class="header">RECORD ENTRIES</li>
                <li><a href="student_registration"><i class="fa fa-user-plus"></i> <span>Registration</span></a></li>
                <li class="header">OTHERS</li>
                <li><a href="user-account"><i class="fa fa-user-circle"></i> <span>User Accounts</span></a></li>
                <li><a href="change_password"><i class="fa fa-key"></i> <span>Change Password</span></a></li>
      <?php }elseif($_SESSION["type"]=='Faculty'){ ?>
                <li><a href="Dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>   
                <li><a href="Fac-Advisory"><i class="fa fa-address-book-o"></i> <span>Advisory</span></a></li>         
                <li><a href="change_password"><i class="fa fa-key"></i> <span>Change Password</span></a></li>            
                
      <?php } ?>
    </ul>
  </section>
  <!-- /.sidebar --> 
</aside>