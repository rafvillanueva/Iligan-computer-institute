<!-- Modal #Summary-->
<?php 
  try{
  include'../config/dbcon.php';
  }catch(PDOException$to){
  echo $to->getMessege();
  exit;}

  // FOR ABM G11
  $ABM_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Accountancy, Business and Management (ABM)' AND a_level = 'Grade 11'";
  $ABM_tabs = $get_dbz->query($ABM_query);
  $ABM11 = $ABM_tabs->rowCount();

  $ABMonsite_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Accountancy, Business and Management (ABM)' AND a_level = 'Grade 11' AND mode_of_reg = 'Onsite'";
  $ABMonsite_tabs = $get_dbz->query($ABMonsite_query);
  $ABM11onsite = $ABMonsite_tabs->rowCount();

  $ABMonline_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Accountancy, Business and Management (ABM)' AND a_level = 'Grade 11' AND mode_of_reg = 'Online'";
  $ABMonline_tabs = $get_dbz->query($ABMonline_query);
  $ABM11online = $ABMonline_tabs->rowCount();

  $humss_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Humanities and Social Sciences (HUMSS)' AND a_level = 'Grade 11'";
  $humss_tabs = $get_dbz->query($humss_query);
  $HUMSS11 = $humss_tabs->rowCount();

  $humssonsite_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Humanities and Social Sciences (HUMSS)' AND a_level = 'Grade 11' AND mode_of_reg = 'Onsite'";
  $humssonsite_tabs = $get_dbz->query($humssonsite_query);
  $HUMSSONSITE = $humssonsite_tabs->rowCount();

  $humssonline_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Humanities and Social Sciences (HUMSS)' AND a_level = 'Grade 11' AND mode_of_reg = 'Online'";
  $humssonline_tabs = $get_dbz->query($humssonline_query);
  $HUMSSONLINE = $humssonline_tabs->rowCount();

  $gas_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'General Academic Strand (GAS)' AND a_level = 'Grade 11'";
  $gas_tabs = $get_dbz->query($gas_query);
  $GAS11 = $gas_tabs->rowCount();  

  $gasonsite_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'General Academic Strand (GAS)' AND a_level = 'Grade 11' AND mode_of_reg ='Onsite'";
  $gasonsite_tabs = $get_dbz->query($gasonsite_query);
  $GAS11onsite = $gasonsite_tabs->rowCount();  

  $gasonline_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'General Academic Strand (GAS)' AND a_level = 'Grade 11' AND mode_of_reg ='Online'";
  $gasonline_tabs = $get_dbz->query($gasonline_query);
  $GAS11online = $gasonline_tabs->rowCount();  

  $CE_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Computer Engineering (TVL - CE)' AND a_level = 'Grade 11'";
  $CE_tabs = $get_dbz->query($CE_query);
  $CE11 = $CE_tabs->rowCount(); 

  $CEonsite_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Computer Engineering (TVL - CE)' AND a_level = 'Grade 11' AND mode_of_reg='Onsite'";
  $CEonsite_tabs = $get_dbz->query($CEonsite_query);
  $CE11onsite = $CEonsite_tabs->rowCount(); 

  $CEonline_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Computer Engineering (TVL - CE)' AND a_level = 'Grade 11' AND mode_of_reg='Online'";
  $CEonline_tabs = $get_dbz->query($CEonline_query);
  $CE11online = $CEonline_tabs->rowCount(); 

  $IT_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Information Technology (TVL - IT)' AND a_level = 'Grade 11'";
  $IT_tabs = $get_dbz->query($IT_query);
  $IT11 = $IT_tabs->rowCount(); 

  $ITonsite_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Information Technology (TVL - IT)' AND a_level = 'Grade 11' AND mode_of_reg = 'Onsite'";
  $ITonsite_tabs = $get_dbz->query($ITonsite_query);
  $IT11onsite = $ITonsite_tabs->rowCount(); 

  $ITonline_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Information Technology (TVL - IT)' AND a_level = 'Grade 11' AND mode_of_reg = 'Online'";
  $ITonline_tabs = $get_dbz->query($ITonline_query);
  $IT11online = $ITonline_tabs->rowCount(); 

  $CA_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Culinary Arts (TVL - CA)' AND a_level = 'Grade 11'";
  $CA_tabs = $get_dbz->query($CA_query);
  $CA11 = $CA_tabs->rowCount(); 

  $CAonsite_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Culinary Arts (TVL - CA)' AND a_level = 'Grade 11' AND mode_of_reg='Onsite'";
  $CAonsite_tabs = $get_dbz->query($CAonsite_query);
  $CA11onsite = $CAonsite_tabs->rowCount(); 

  $CAonline_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Culinary Arts (TVL - CA)' AND a_level = 'Grade 11' AND mode_of_reg='Online'";
  $CAonline_tabs = $get_dbz->query($CAonline_query);
  $CA11online = $CAonline_tabs->rowCount(); 

  $ALL_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_level = 'Grade 11'";
  $ALL_tabs = $get_dbz->query($ALL_query);
  $ALL11 = $ALL_tabs->rowCount(); 

  $ALLonsite_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_level = 'Grade 11' AND mode_of_reg='Onsite'";
  $ALLonsite_tabs = $get_dbz->query($ALLonsite_query);
  $ALL11onsite = $ALLonsite_tabs->rowCount(); 

  $ALLonline_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_level = 'Grade 11' AND mode_of_reg='Online'";
  $ALLonline_tabs = $get_dbz->query($ALLonline_query);
  $ALL11online = $ALLonline_tabs->rowCount(); 
  // END FOR G11

  // FOR ABM G12
  $ABM_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Accountancy, Business and Management (ABM)' AND a_level = 'Grade 12'";
  $ABM_tabs = $get_dbz->query($ABM_query);
  $ABM12 = $ABM_tabs->rowCount();

  $ABMonsite_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Accountancy, Business and Management (ABM)' AND a_level = 'Grade 12' AND mode_of_reg = 'Onsite'";
  $ABMonsite_tabs = $get_dbz->query($ABMonsite_query);
  $ABM12onsite = $ABMonsite_tabs->rowCount();
  
  $ABMonline_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Accountancy, Business and Management (ABM)' AND a_level = 'Grade 12' AND mode_of_reg = 'Online'";
  $ABMonline_tabs = $get_dbz->query($ABMonline_query);
  $ABM12online = $ABMonline_tabs->rowCount();

  $humss_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Humanities and Social Sciences (HUMSS)' AND a_level = 'Grade 12'";
  $humss_tabs = $get_dbz->query($humss_query);
  $HUMSS12 = $humss_tabs->rowCount();

  $humssonsite_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Humanities and Social Sciences (HUMSS)' AND a_level = 'Grade 12' AND mode_of_reg = 'Onsite'";
  $humssonsite_tabs = $get_dbz->query($humssonsite_query);
  $HUMSS12ONSITE = $humssonsite_tabs->rowCount();

  $humssonline_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Humanities and Social Sciences (HUMSS)' AND a_level = 'Grade 12' AND mode_of_reg = 'Online'";
  $humssonline_tabs = $get_dbz->query($humssonline_query);
  $HUMSS12ONLINE = $humssonline_tabs->rowCount();

  $gas_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'General Academic Strand (GAS)' AND a_level = 'Grade 12'";
  $gas_tabs = $get_dbz->query($gas_query);
  $GAS12 = $gas_tabs->rowCount();  

  $gasonsite_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'General Academic Strand (GAS)' AND a_level = 'Grade 12' AND mode_of_reg ='Onsite'";
  $gasonsite_tabs = $get_dbz->query($gasonsite_query);
  $GAS12onsite = $gasonsite_tabs->rowCount();  

  $gasonline_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'General Academic Strand (GAS)' AND a_level = 'Grade 12' AND mode_of_reg ='Online'";
  $gasonline_tabs = $get_dbz->query($gasonline_query);
  $GAS12online = $gasonline_tabs->rowCount();  

  $CE_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Computer Engineering (TVL - CE)' AND a_level = 'Grade 12'";
  $CE_tabs = $get_dbz->query($CE_query);
  $CE12 = $CE_tabs->rowCount(); 

  $CEonsite_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Computer Engineering (TVL - CE)' AND a_level = 'Grade 12' AND mode_of_reg='Onsite'";
  $CEonsite_tabs = $get_dbz->query($CEonsite_query);
  $CE12onsite = $CEonsite_tabs->rowCount(); 

  $CEonline_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Computer Engineering (TVL - CE)' AND a_level = 'Grade 12' AND mode_of_reg='Online'";
  $CEonline_tabs = $get_dbz->query($CEonline_query);
  $CE12online = $CEonline_tabs->rowCount(); 

  $IT_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Information Technology (TVL - IT)' AND a_level = 'Grade 12'";
  $IT_tabs = $get_dbz->query($IT_query);
  $IT12 = $IT_tabs->rowCount(); 

  $ITonsite_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Information Technology (TVL - IT)' AND a_level = 'Grade 12' AND mode_of_reg = 'Onsite'";
  $ITonsite_tabs = $get_dbz->query($ITonsite_query);
  $IT12onsite = $ITonsite_tabs->rowCount(); 

  $ITonline_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Information Technology (TVL - IT)' AND a_level = 'Grade 12' AND mode_of_reg = 'Online'";
  $ITonline_tabs = $get_dbz->query($ITonline_query);
  $IT12online = $ITonline_tabs->rowCount(); 

  $CA_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Culinary Arts (TVL - CA)' AND a_level = 'Grade 12'";
  $CA_tabs = $get_dbz->query($CA_query);
  $CA12 = $CA_tabs->rowCount(); 

  $CAonsite_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Culinary Arts (TVL - CA)' AND a_level = 'Grade 12' AND mode_of_reg='Onsite'";
  $CAonsite_tabs = $get_dbz->query($CAonsite_query);
  $CA12onsite = $CAonsite_tabs->rowCount(); 

  $CAonline_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_strand = 'Culinary Arts (TVL - CA)' AND a_level = 'Grade 12' AND mode_of_reg='Online'";
  $CAonline_tabs = $get_dbz->query($CAonline_query);
  $CA12online = $CAonline_tabs->rowCount(); 

  $ALL_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_level = 'Grade 12'";
  $ALL_tabs = $get_dbz->query($ALL_query);
  $ALL12 = $ALL_tabs->rowCount(); 

  $ALLonsite_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_level = 'Grade 12' AND mode_of_reg='Onsite'";
  $ALLonsite_tabs = $get_dbz->query($ALLonsite_query);
  $ALL12onsite = $ALLonsite_tabs->rowCount(); 

  $ALLonline_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND a_level = 'Grade 12' AND mode_of_reg='Online'";
  $ALLonline_tabs = $get_dbz->query($ALLonline_query);
  $ALL12online = $ALLonline_tabs->rowCount(); 

   // END FOR G12

?> 

<div class="modal fade" id="Summary" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel" style="font-weight:bold;">Report</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="container-fluid">



  <table class="table table-responsive">
    <thead>
      <tr>
        <th colspan="6" style="background-color:rgb(51,203,204); border-color: rgb(59, 180, 188); letter-spacing:1px;"><h2><center><b>ICI-CDO PRE-REGISTRATION UPDATES</b></center></h2></th>
      </tr>
      <tr>
        <th style="background-color:rgb(59, 200, 199);" colspan="2" width="10px">
          <center>
            <?php 
              //date('Y-m-d', strtotime('-1 day'));
              date_default_timezone_set("Asia/Manila"); 
              $DayToday = date("m/d/Y"); 
              $today_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND time_encoded = '$DayToday'";
              $today_tabs = $get_dbz->query($today_query);
              $Todaycount = $today_tabs->rowCount(); 
            ?>
            <h3 style="background-color:white; padding:15px; width:70%; border-style: solid; border-color: rgb(235, 153, 0);">
              <b style="font-size:17px;">TODAY</b><br>
              <b style="font-size:40px;"><?php echo "$Todaycount"; ?></b>
            </h3>
          </center>
        </th>

        <th style="background-color:rgb(59, 200, 199);" colspan="2" width="20px">
          <center>
            <h3 style="margin-top:-45%;">
              <b><?php echo $today = date("F j, Y"); date_default_timezone_set("Asia/Manila"); echo" ";date("l"); ?></b>
            </h3>
          </center>
        </th>
 
        <th style="background-color:rgb(59, 200, 199);" colspan="2" width="10px">
          <center>
            <?php 
            
              date_default_timezone_set("Asia/Manila"); 
              $PreviousToday = date("m/d/Y", strtotime('-1 day'));
              $PreviousSunday = date("m/d/Y", strtotime('-2 days'));
              $PreviousFriday = date("m/d/Y", strtotime('-3 days'));

              
              $Previous_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND time_encoded = '$PreviousToday' AND a_level = 'Grade 11'";
              $Previous_tabs = $get_dbz->query($Previous_query);
              $Previouscount = $Previous_tabs->rowCount(); 
            
              $Sunday_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND time_encoded = '$PreviousSunday' AND a_level = 'Grade 11'";
              $Sunday_tabs = $get_dbz->query($Sunday_query);
              $Sundaycount = $Sunday_tabs->rowCount(); 

              $Friday_query = "SELECT * FROM tbl_student WHERE a_status='Registered' AND time_encoded = '$PreviousFriday' AND a_level = 'Grade 11'";
              $Friday_tabs = $get_dbz->query($Friday_query);
              $Fridaycount = $Friday_tabs->rowCount(); 

            ?>
            <h3 style="background-color:white; padding:15px; width:70%; border-style: solid; border-color: rgb(235, 153, 0);">
            <b style="font-size:17px;">PREVIOUS</b><br>

            <?php 
               $dayraf = date("l");
               if($dayraf == "Monday"){
            ?>
            <b style="font-size:40px;"><?php echo "$Fridaycount"; ?></b>
            <?php }elseif($dayraf == "Sunday"){ ?>
            <b style="font-size:40px;"><?php echo "$Sundaycount"; ?></b>
            <?php }else{ ?>
              <b style="font-size:40px;"><?php echo "$Previouscount"; ?></b>
            <?php } ?>
            </h3>
          </center>
        </th>        
      </tr>
        <style type="text/css">
          #header{
            background-color:red;
          }
        </style>
  </table>
<style type="text/css">
  #th-raf{border: 1px solid black; font-size:17px; background-color: rgb(206,255,254);}
  #th-raftotal{border: 1px solid black; font-size:17px; background-color:rgb(52,203,254); font-weight:bold;}
  #th-track{border: 1px solid black; font-weight:bold; font-size:16px; background-color:rgb(203,237,254);}
  #th-raft{background-color:rgb(203,237,254);border: 1px solid black;font-size:17px;}
  #th-rafr{background-color:rgb(203,237,254);border: 1px solid black;font-size:17px;}
  #th-rafx {border: 1px solid black; font-size:18px; background-color:rgb(250,204,153);}
  #th-trackt{border: 1px solid black; color: black; font-weight:bold;}
</style>
<?php 
$abm_target = 200;
$gas_target = 250;
$humss_target = 250;
$culinary_target = 100;
$infotech_target = 200;
$comeng_target = 100;
$total = $abm_target + $gas_target + $humss_target + $culinary_target + $infotech_target + $comeng_target;
 ?>
  <table class="table table-bordered table-responsive" style="border-color:black; margin-top:-22px;">
    <thead>
      <tr>
        <th id="th-rafx" width="15%"><center>SHS TRACK</center></th>
        <th id="th-rafx"><center><h3><b>ONLINE</b></h3></center></th>
        <th id="th-rafx"><center><h3><b>ONSITE</b></h3></center></th>
        <th id="th-rafx"><center><h3><b>TOTAL</b></h3></center></th>
        <th id="th-rafx"><center><h3><b>TARGET</b></h3></center></th>
        <th id="th-rafx"><center><h3><b>REMAINING</b></h3></center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="th-track"><center><i>ABM</i></center></td>
        <td id="th-raf"><center><?php echo $ABM11online; ?></center></td>
        <td id="th-raf"><center><?php echo $ABM11onsite ?></center></td>
        <td id="th-raf"><center><?php echo $ABM11; ?></center></td>
        <td id="th-raft"><center><?php echo $abm_target; ?></center></td>
        <?php 
         $ABM_REMAINING = $abm_target - $ABM11;
        ?>
        <td id="th-rafr"><center><?php echo $ABM_REMAINING; ?></center></td>
      </tr>
      <tr>
        <td id="th-track"><center><i>GAS</i></center></td>
        <td id="th-raf"><center><?php echo $GAS11online; ?></center></td>
        <td id="th-raf"><center><?php echo $GAS11onsite; ?></center></td>
        <td id="th-raf"><center><?php echo $GAS11; ?></center></td>
        <td id="th-raft"><center><?php echo $gas_target ?></center></td>
        <?php 
         $GAS_REMAINING = $gas_target - $GAS11;
        ?>
        <td id="th-rafr"><center><?php echo $GAS_REMAINING; ?></center></td>
      </tr>
      <tr>
        <td id="th-track"><center><i>HUMSS</i></center></td>
        <td id="th-raf"><center><?php echo $HUMSSONLINE; ?></center></td>
        <td id="th-raf"><center><?php echo $HUMSSONSITE; ?></center></td>
        <td id="th-raf"><center><?php echo $HUMSS11; ?></center></td>
        <td id="th-raft"><center><?php echo $humss_target ?></center></td>
        <?php 
         $HUMSS_REMAINING = $humss_target - $HUMSS11;
        ?>
        <td id="th-rafr"><center><?php echo $HUMSS_REMAINING; ?></center></td>
      </tr>
      <tr>
        <td id="th-track"><center><i>CULINARY</i></center></td>
        <td id="th-raf"><center><?php echo $CA11online; ?></center></td>
        <td id="th-raf"><center><?php echo $CA11onsite ?></center></td>
        <td id="th-raf"><center><?php echo $CA11; ?></center></td>
        <td id="th-raft"><center><?php echo $culinary_target; ?></center></td>
        <?php 
         $CA_REMAINING = $culinary_target - $CA11;
        ?>
        <td id="th-rafr"><center><?php echo $CA_REMAINING; ?></center></td>
      </tr>
      <tr>
        <td id="th-track"><center><i>INFO TECH</i></center></td>
        <td id="th-raf"><center><?php echo $IT11online; ?></center></td>
        <td id="th-raf"><center><?php echo $IT11onsite; ?></center></td>
        <td id="th-raf"><center><?php echo $IT11 ?></center></td>
        <td id="th-raft"><center><?php echo $infotech_target ?></center></td>
        <?php 
         $IT_REMAINING = $infotech_target - $IT11;
        ?>
        <td id="th-rafr"><center><?php echo $IT_REMAINING; ?></center></td>
      </tr>
      <tr>
        <td id="th-track"><center><i>COM ENG</i></center></td>
        <td id="th-raf"><center><?php echo $CE11online; ?></center></td>
        <td id="th-raf"><center><?php echo $CE11onsite; ?></center></td>
        <td id="th-raf"><center><?php echo $CE11; ?></center></td>
        <td id="th-raft"><center><?php echo $comeng_target; ?></center></td>
        <?php 
         $CE_REMAINING = $comeng_target - $CE11;
        ?>
        <td id="th-rafr"><center><?php echo $CE_REMAINING; ?></center></td>
      </tr>
      <tr>
        <td id="th-raftotal" style="font-size:20px;"><center>TOTAL</center></td>
        <td id="th-raftotal" style="font-size:20px;"><center><b><?php echo $ALL11online; ?></b></center></td>
        <td id="th-raftotal" style="font-size:20px;"><center><b><?php echo $ALL11onsite; ?></b></center></td>
        <td id="th-raftotal" style="font-size:20px;"><center><b><?php echo $ALL11; ?></b></center></td>
        <td id="th-raftotal" style="font-size:20px;"><center><b><?php echo $total; ?></b></center></td>
        <?php 
         $ALL11_REMAINING = $total - $ALL11;
        ?>
        <td id="th-raftotal" style="font-size:20px;"><center><?php echo $ALL11_REMAINING; ?></center></td>
      </tr>
    </tbody>
  </table>



<!-- 
              <div class="row">
                <div class="col-sm-4 col-md-4">
                  <h3>Today :<b>&nbsp;<?php //echo "$Todaycount"; ?></b></h3>
                </div>
                <div class="col-sm-4 col-md-4">
                  <h3><b style="color:green;"><?php echo $today = date("F j, Y"); date_default_timezone_set("Asia/Manila"); echo" ";date("l"); ?></b></h3>
                </div>
                <div class="col-sm-4 col-md-4">
                  <h3>Previous :<b>&nbsp;<?php //echo "$Previouscount"; ?></b></h3>
                </div>
              </div> -->
            </div>
<!--           <div class="row">
            <div class="col-sm-6">
                  <div class="panel panel-default">
                    <div class="panel-heading"><b>Grade 11</b></div>
                      <div class="panel-body">
                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>Senior High School Track</th>
                              <th>Onsite</th>
                              <th>Online</th>
                              <th><center>Total</center></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><small>Accountancy, Business and Management (ABM)</small></td>
                              <td><?php echo "$ABM11onsite"; ?></td>
                              <td><?php echo "$ABM11online"; ?></td>
                              <td><?php echo "$ABM11"; ?></td>
                            </tr> 
                            <tr>
                              <td><small>Humanities and Social Sciences (HUMSS)</small></td>
                              <td><?php echo "$HUMSSONSITE"; ?></td>
                              <td><?php echo "$HUMSSONLINE"; ?></td>
                              <td><?php echo "$HUMSS11"; ?></td>
                            </tr>
                            <tr>
                              <td><small>General Academic Strand (GAS)</small></td>
                              <td><?php echo "$GAS11onsite"; ?></td>
                              <td><?php echo "$GAS11online"; ?></td>
                              <td><?php echo "$GAS11"; ?></td>
                            </tr> 
                            <tr>
                              <td><small>Computer Engineering (CE)</small></td>
                              <td><?php echo "$CE11onsite"; ?></td>
                              <td><?php echo "$CE11online"; ?></td>
                              <td><?php echo "$CE11"; ?></td>
                            </tr>
                            <tr>
                              <td><small>Information Technology (IT)</small></td>
                              <td><?php echo "$IT11onsite"; ?></td>
                              <td><?php echo "$IT11online"; ?></td>
                              <td><?php echo "$IT11"; ?></td>
                            </tr>
                            <tr>
                              <td><small>Culinary Arts (CA)</small></td>
                              <td><?php echo "$CA11onsite"; ?></td>
                              <td><?php echo "$CA11online"; ?></td>
                              <td><?php echo "$CA11"; ?></td>
                            </tr>
                            <tr>
                              <td><b>TOTAL</b></td>
                              <td><b><?php echo "$ALL11onsite"; ?></b></td>
                              <td><b><?php echo "$ALL11online" ?></b></td> 
                              <td><b><?php echo "$ALL11"; ?></b></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                  </div>
            </div>
             <div class="col-sm-6">
                  <div class="panel panel-default">
                    <div class="panel-heading"><b>Grade 12</b></div>
                      <div class="panel-body">
                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>Senior High School Track</th>
                              <th>Onsite</th>
                              <th>Online</th>
                              <th><center>Total</center></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><small>Accountancy, Business and Management (ABM)</small></td>
                              <td><?php echo "$ABM12onsite"; ?></td>
                              <td><?php echo "$ABM12online"; ?></td>
                              <td><?php echo "$ABM12"; ?></td>
                            </tr> 
                            <tr>
                              <td><small>Humanities and Social Sciences (HUMSS)</small></td>
                              <td><?php echo "$HUMSS12ONSITE"; ?></td>
                              <td><?php echo "$HUMSS12ONLINE"; ?></td>
                              <td><?php echo "$HUMSS12"; ?></td>
                            </tr>
                            <tr>
                              <td><small>General Academic Strand (GAS)</small></td>
                              <td><?php echo "$GAS12onsite"; ?></td>
                              <td><?php echo "$GAS12online"; ?></td>
                              <td><?php echo "$GAS12"; ?></td>
                            </tr> 
                            <tr>
                              <td><small>Computer Engineering (CE)</small></td>
                              <td><?php echo "$CE12onsite"; ?></td>
                              <td><?php echo "$CE12online"; ?></td>
                              <td><?php echo "$CE12"; ?></td>
                            </tr>
                            <tr>
                              <td><small>Information Technology (IT)</small></td>
                              <td><?php echo "$IT12onsite"; ?></td>
                              <td><?php echo "$IT12online"; ?></td>
                              <td><?php echo "$IT12"; ?></td>
                            </tr>
                            <tr>
                              <td><small>Culinary Arts (CA)</small></td>
                              <td><?php echo "$CA12onsite"; ?></td>
                              <td><?php echo "$CA12online"; ?></td>
                              <td><?php echo "$CA12"; ?></td>
                            </tr>
                            <tr>
                              <td><b>TOTAL</b></td>
                              <td><b><?php echo "$ALL12onsite"; ?></b></td>
                              <td><b><?php echo "$ALL12online" ?></b></td> 
                              <td><b><?php echo "$ALL12"; ?></b></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                  </div>
            </div>
          </div> -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

