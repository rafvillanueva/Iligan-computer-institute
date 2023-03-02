
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

<!-- GET FUNCTIONS -->
<?php
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $tbl_student = mysqli_query($mysqli, "SELECT * FROM tbl_student WHERE stud_id = '$id'");
    $row = mysqli_fetch_array($tbl_student);
    $stud_info = mysqli_query($mysqli, "SELECT * FROM tbl_studentinfo WHERE stud_id = '$id'");
    $info_row = mysqli_fetch_array($stud_info);
    }elseif(isset($_GET['del'])){
      $id = $_GET['del']; 
      $sql = mysqli_query($mysqli, "UPDATE tbl_student SET a_status = 'Deleted' WHERE stud_id = '$id'");
      echo "<script>alert('Success! Student Deleted.'); window.location='Records'</script>";
    }
?> 
<!-- END GET -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <span class="fa fa-user"></span> <b>Student Profile </b>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Student Details </li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
             <!--  <button href="#" data-toggle="modal" data-target="#add-record" class="btn btn-primary btn-md btn-flat"><i class="fa fa-plus"></i> Add Record</button> -->
                        <small>
                            <div class="dropdown" id="edit">
                                <a href="javascript:void(0)" style="color: #75A4D2; font-size: 16px;">
                                    <span class="fa fa-gear"></span> More Operations
                                </a>
                                <div class="dropdown-content">
                                    <a href="Withdraw-Enrollment?id=<?= $_GET['id'] ?>&type=Withdraw-enrollment"> Withdraw enrollment</a>
                                    <a href="students-drop?id=<?= $_GET['id'] ?>&type=students-drop"> Transfer Out</a>
                                    <a href="Transfer-out-form?id=<?= $_GET['id'] ?>&type=transfer-out"> Reassign</a>
                                    <a href="Uploading?id=<?= $_GET['id']?>">Upload New Picture</a>
                                  </div>
                            </div>
                        </small>
             <div id="idreq"></div>
              <hr>
             <i id="i-raf">Student Information*</i>
            </div>
            <div class="box-body">
                 <form class="form-horizontal" onsubmit="return false" autocomplete="on">
                        <div class="form-group">
                                <input type="hidden" id="idx" value="<?=$row['stud_id']; ?>">
                                <label class="control-label col-sm-2" for="email">Last Name :</label>
                                <div class="col-sm-2">
                                  <input type="text" id="l_name" class="form-control" value="<?=$row['l_name']; ?>" placeholder="Enter Last Name here..">
                                </div>

                                <label class="control-label col-sm-2" for="email">First Name :</label>
                                <div class="col-sm-2">
                                  <input type="text" id="f_name" class="form-control" value="<?=$row['f_name']; ?>" placeholder="Enter First Name here..">
                                </div>

                                <label class="control-label col-sm-2" for="email">Middle Name :</label>
                                <div class="col-sm-2">
                                  <input type="text" id="m_name" class="form-control" value="<?=$row['m_name']; ?>" placeholder="Enter Middle Name here..">
                                </div>
                        </div>

                        <div class="form-group">

                              <label class="control-label col-sm-2" for="email">Extension Name :</label>
                              <div class="col-sm-2">
                                <input type="text" id="x_name" value="<?=$row['x_name']; ?>" class="form-control" placeholder="Enter Extension Name here..">
                              </div>

                              <label class="control-label col-sm-2" for="email">LRN :</label>
                              <div class="col-sm-2">
                                <input type="text" id="lrn" class="form-control" value="<?=$row['lrn']; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter LRN here..">
                              </div>

                              <label class="control-label col-sm-2" for="email">Contact Number :</label>
                              <div class="col-sm-2">
                                <input type="text" id="s_contact_num" value="<?=$row['s_contact_num']; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" placeholder="Enter Contact Number here..">
                              </div>
                        </div>
                        
                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Birthdate :</label>
                              <div class="col-sm-2">
                                <input type="date" id="birthdate" value="<?=$row['birthdate']; ?>" class="form-control">
                              </div>

                              <label class="control-label col-sm-2" for="email">Gender :</label>
                              <div class="col-sm-2">
                                    <select id="gender" class="form-control">
                                          <option selected><?= $row['gender'] ?></option>
                                          <option value="" disabled>----</option>
                                          <option value="Male">Male</option>
                                          <option value="Female">Female</option>
                                    </select>
                              </div>
                        
                              <label class="control-label col-sm-2" for="email">Religion :</label>
                              <div class="col-sm-2">
                                    <select id="religion" class="form-control">
                                          <option selected><?= $row['religion'] ?></option>
                                          <option value="" disabled>----</option>
                                          <option value="Roman Catholic">Roman Catholic</option>
                                          <option value="Islam">Islam</option>
                                          <option value="Evangelicals (PCEC)">Evangelicals (PCEC)</option>
                                          <option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
                                          <option value="Non-Roman Catholic and Protestant (NCCP)">Non-Roman Catholic and Protestant (NCCP)</option>
                                          <option value="Aglipayan">Aglipayan</option>
                                          <option value="Seventh-day Adventist">Seventh-day Adventist</option>
                                          <option value="Bible Baptist Church">Bible Baptist Church</option>
                                          <option value="United Church of Christ in the Philippines">United Church of Christ in the Philippines</option>
                                          <option value="Jehovah's Witnesses">Jehovah's Witnesses</option>
                                          <option value="None">None</option>
                                    </select>
                              </div>
                        </div>
                        <hr>
                        <div class="form-group">
                              <label class="control-label col-sm-4">Belonging to any Indigenous People (IP) :</label>
                              <div class="col-sm-2">
                                    <select class="form-control" id="ip">
                                          <option selected><?= $row['ip'] ?></option>
                                          <option disabled>--</option>
                                          <option value="Yes">Yes</option>
                                          <option value="No">No</option>
                                    </select>
                              </div>

                              <label class="control-label col-sm-2">Specify (IP) :</label>
                              <div class="col-sm-4">
                                      <input type="text" id="s_ip" value="<?= $row['s_ip'] ?>" placeholder="Specify Indigenous Group" class="form-control">
                              </div>
                        </div>


                        <div class="form-group">
                              <label class="control-label col-sm-4">Mother Tongue :</label>
                              <div class="col-sm-2">
                                    <select class="form-control" id="mt">
                                          <option selected><?= $row['mt'] ?></option>
                                          <option value="" disabled>--</option>
                                          <option value="Bisaya/Cebuano">Bisaya/Cebuano</option>
                                          <option value="Maranao">Maranao</option>
                                          <option value="Ilonggo">Ilonggo</option>
                                          <option value="Hiligaynon">Hiligaynon</option>
                                          <option value="Tagalog">Tagalog</option>
                                          <option value="Other">Other</option>
                                    </select>
                              </div>
                              <label class="control-label col-sm-2">Specify :</label>
                              <div class="col-sm-4">
                                      <input type="text" id="s_mt" value="<?=$row['s_mt']; ?>" placeholder="Specify Mother Tongue" class="form-control">
                              </div>
                        </div>



                        <hr>
                        <i id="i-raf">Student Address*</i>
                        <div class="form-group">  
                              <label class="control-label col-sm-2" for="email">Region :</label>
                              <div class="col-sm-4">
                                        <select class="form-control" id="regCode" onchange="getprovince()">
                                          <?php
                                            $code = $row['regCode'];
                                            $d_address = mysqli_query($mysqli, "SELECT * FROM refregion WHERE regCode = '$code'");
                                            $r_address = mysqli_fetch_array($d_address);
                                          ?>
                                          <option selected value="<?= $code ?>"><?= $r_address['regDesc'] ?></option>
                                          <option disabled value="">--</option>
                                          <?php
                                            $province = mysqli_query($mysqli, "SELECT * FROM refregion ORDER BY regDesc ASC");
                                            while($rowz = mysqli_fetch_array($province)){
                                              ?>
                                              <option value="<?= $rowz['regCode'] ?>"><?= $rowz['regDesc'] ?></option>
                                              <?php
                                            }
                                          ?>
                                        </select>
                              </div>
                              <label class="control-label col-sm-2" for="email">Province :</label>
                              <div class="col-sm-4">
                                        <select class="form-control" id="provCode" onchange="getMunicity()">
                                                    <?php
                                                      $code = $row['provCode'];
                                                      $d_address = mysqli_query($mysqli, "SELECT * FROM refprovince WHERE provCode = '$code'");
                                                      $r_address = mysqli_fetch_array($d_address);
                                                    ?>
                                                    <option selected value="<?= $code ?>"><?= $r_address['provDesc'] ?></option>
                                                    <option disable value="">--</option>
                                        </select>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">City/Municipality :</label>
                              <div class="col-sm-4">
                                        <select class="form-control" id="citymunCode" onchange="getBrgy()">
                                                    <?php
                                                      $code = $row['citymunCode'];
                                                      $d_address = mysqli_query($mysqli, "SELECT * FROM refcitymun WHERE citymunCode = '$code'");
                                                      $r_address = mysqli_fetch_array($d_address);
                                                    ?>
                                                    <option selected value="<?= $code ?>"><?= $r_address['citymunDesc'] ?></option>
                                                    <option disable value="">--</option>
                                        </select>
                              </div>
                              <label class="control-label col-sm-2" for="email">Barangay :</label>
                              <div class="col-sm-4">
                                        <select class="form-control" id="brgyCode" >
                                                    <option selected><?= $row['brgyCode'] ?></option>
                                                    <option disable value="">--</option>
                                        </select>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email" style="color:orange;">Address Line 2 :</label>
                              <div class="col-sm-4">
                                <input type="text" class="form-control" value="<?=$row['address']; ?>" placeholder="Enter Street, Zone, Unit, Building here.." id="address">
                              </div>

                              <label class="control-label col-sm-2" for="email">Mode of Registration :</label>
                              <div class="col-sm-4">
                                          <select class="form-control" id="mode_of_reg">
                                            <option selected><?= $row['mode_of_reg'] ?></option>
                                            <option value="" disabled>----</option>
                                            <option value="Online">Online</option>
                                            <option value="Onsite">Onsite</option>
                                          </select>
                              </div>

                        </div>
                        <hr>

                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Previous School :</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?=$row['current_school']; ?>" placeholder="Enter Previous/Current School here.." id="current_school">
                              </div>


                        </div>


                        
                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Type of School :</label>
                              <div class="col-sm-4">
                                    <select id="school_type" class="form-control">
                                          <option selected><?= $row['school_type'] ?></option>
                                          <option value="" disabled>----</option>
                                          <option value="Public">Public</option>
                                          <option value="Private">Private</option>
                                          <option value="ALS">ALS</option> 
                                    </select>
                              </div>

                              <label class="control-label col-sm-2" for="email">Year Graduated :</label>
                              <div class="col-sm-4">
                                <input type="text" id="year_grad" value="<?=$row['year_grad']; ?>" class="form-control" placeholder="Enter year graduated here..">
                              </div>
                        </div>


                       <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Preferred Strand :</label>
                              <div class="col-sm-6">
                                    <select id="a_strand" class="form-control">
                                          <option selected><?= $row['a_strand'] ?></option>
                                          <option value="" disabled>--Select Strand--</option>
                                          <option value="Accountancy, Business and Management (ABM)">Accountancy, Business and Management (ABM)</option>
                                          <option value="Humanities and Social Sciences (HUMSS)">Humanities and Social Sciences (HUMSS)</option>
                                          <option value="General Academic Strand (GAS)">General Academic Strand (GAS)</option>
                                          <option value="Computer Engineering (TVL - CE)">Computer Engineering (TVL - CE)</option>
                                          <option value="Information Technology (TVL - IT)">Information Technology (TVL - IT)</option>
                                          <option value="Culinary Arts (TVL - CA)">Culinary Arts (TVL - CA)</option>
                                    </select>
                              </div>
                              <label class="control-label col-sm-2" for="email">Grade Level to Enroll :</label>
                              <div class="col-sm-2">
                                    <select id="a_level" class="form-control">
                                          <option selected><?= $row['a_level'] ?></option>
                                          <option value="" disabled>----</option>
                                          <option value="Grade 11">Grade 11</option>
                                          <option value="Grade 12">Grade 12</option>
                                    </select>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">FB Account Name :</label>
                              <div class="col-sm-10">
                                <input type="text"  value="<?=$row['fb_account']; ?>" class="form-control" placeholder="Enter Facebook Account Name/Link here.." id="fb_account">
                              </div>
                        </div>

                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Grant Type :</label>
                              <div class="col-sm-6">
                                    <select id="grant_type" class="form-control">
                                          <option selected><?= $info_row['grant_type'] ?></option>
                                          <option value="" disabled>---</option>
                                          <option value="Qualified Voucher Recipient (QVR)">Qualified Voucher Recipient (QVR)</option>
                                          <option value="Education Service Contracting (ESC)">Education Service Contracting (ESC)</option>
                                          <option value="Paying">Paying</option>
                                    </select>
                              </div>

                              <label class="control-label col-sm-2" for="email">Student Type :</label>
                              <div class="col-sm-2">
                                    <select id="student_type" class="form-control">
                                          <option selected><?= $info_row['student_type'] ?></option>
                                          <option value="" disabled>--</option>
                                          <option value="New">New</option>
                                          <option value="Old">Old</option>
                                          <option value="Old">Returning</option>
                                    </select>
                              </div>
                        </div>

                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Learning Modality :</label>
                              <div class="col-sm-2">
                                    <select id="learning_modality" class="form-control">
                                          <option selected><?= $info_row['learning_modality'] ?></option>
                                          <option value="" disabled>--</option>
                                          <option value="Modular (Printed)">Modular (Printed)</option>
                                          <option value="Repository (Digital)">Repository (Digital)</option>
                                          <option value="Online">Online</option>
                                    </select>
                              </div>

                              <label class="control-label col-sm-3" for="email">Referred by :</label>
                              <div class="col-sm-5">
                                    <input type="text" id="referred" value="<?= $info_row['referred'] ?>" class="form-control" placeholder="Enter Complete Name here..">
                              </div>
                        </div>



                        <hr>
                        <i id="i-raf">Parent's Information*</i>
                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Father's Name :</label>
                              <div class="col-sm-4">
                                <input type="text" value="<?=$info_row['fathers_name']; ?>" class="form-control" placeholder="Enter Father's Name here.." id="fathers_name">
                              </div>

                              <label class="control-label col-sm-2" for="email">Contact Number :</label>
                              <div class="col-sm-4">
                                <input type="text" value="<?=$info_row['f_contactnum']; ?>" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Contact Number here.." id="f_contactnum">
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Mother's Name :</label>
                              <div class="col-sm-4">
                                <input type="text" value="<?=$info_row['mothers_name']; ?>" class="form-control" placeholder="Enter Mother's Name here.." id="mothers_name">
                              </div>

                              <label class="control-label col-sm-2" for="email">Contact Number :</label>
                              <div class="col-sm-4">
                                <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?=$info_row['m_contactnum']; ?>" placeholder="Enter Contact Number here.." id="m_contactnum">
                              </div>
                        </div>
                        <hr>
                        <i id="i-raf">Guardian Information*</i>
                        <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Guardian Name :</label>
                                <div class="col-sm-2">
                                  <input type="text" value="<?=$info_row['guardian_name']; ?>" class="form-control" placeholder="Enter Guadian Name here.." id="guardian_name">
                                </div>

                                <label class="control-label col-sm-2" for="email"> Relationship :</label>
                                <div class="col-sm-2">
                                  <input type="text" value="<?=$info_row['guardian_relationship']; ?>" class="form-control" placeholder="Enter Relationship here.." id="guardian_relationship">
                                </div>

                              <label class="control-label col-sm-2" for="email">Contact Number :</label>
                              <div class="col-sm-2">
                                <input type="text" value="<?=$info_row['guardian_contactnum']; ?>" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Contact Number here.." id="guardian_contactnum">
                              </div>
                        </div>   <hr>         
                        <i id="i-raf">Credentials*</i>              
                        <div class="form-group">
                              <div class="col-sm-12">
                                  <textarea class="form-control" id="credentials" rows="3" placeholder="Enter Credentials here.."><?=$info_row['credentials']; ?></textarea>
                              </div>
                        </div>



                        <i id="i-raf">For returning learners (Balik-Aral and Those who shall Transfer/Move-in)*</i>
                        <div class="form-group">
                                <label class="control-label col-sm-2" for="email"><small>Last Level Completed:</small></label>
                                <div class="col-sm-2">
                                      <select id="last_levelcompleted" class="form-control">
                                            <option selected><?= $info_row['last_levelcompleted'] ?></option>
                                            <option value="" disabled>--</option>
                                            <option value="Grade 10">Grade 10</option>
                                            <option value="Grade 11">Grade 11</option>
                                            <option value="Grade 12">Grade 12</option>
                                            <option value="ALS">ALS</option>
                                      </select>
                                </div>

                                <label class="control-label col-sm-3" for="email"><small>Last School Year Completed:</small></label>
                                <div class="col-sm-2">
                                  <input type="text" id="last_yearcompleted" value="<?= $info_row['last_yearcompleted'] ?>" class="form-control" placeholder="Enter Last School Year Completed/Attended here..">
                                </div>

                                <label class="control-label col-sm-1" for="email"><small>School ID:</small></label>
                                <div class="col-sm-2">
                                  <input type="text" id="school_id" value="<?= $info_row['school_id'] ?>" class="form-control" placeholder="Enter School ID here..">
                                </div>
                        </div>  
                        <div class="form-group">
                                <label class="control-label col-sm-4" for="email">School Name Last Attended :</label>
                                <div class="col-sm-8">
                                  <input type="text" id="school_last_attended" value="<?= $info_row['school_last_attended'] ?>" class="form-control" placeholder="Enter School Name Last Attended here..">
                                </div>                       
                        </div>


                        <div class="form-group">
                                <label class="control-label col-sm-4" for="email">School Address <small style="color:blue;">(Barangay, City/Municipality, Province)</small></label>
                                <div class="col-sm-8">
                                  <input type="text" id="school_address" value="<?= $info_row['school_address'] ?>" class="form-control" placeholder="Enter School Address (Barangay, City/Municipality, Province) here..">
                                </div> 
                        </div>
                        
                     <div class="modal-footer">
                                      <a href="?del=<?php echo $_GET['id'] ?>" onclick="return confirm('Are you sure you want to delete this Student ?');" style="margin-left:3px;" class="btn btn-default pull-right"><span class="glyphicon glyphicon-trash"></span> Delete</a> 
                                        <button onclick="updatereq()" class="btn btn-default" id="btn-ici"><span class="fa fa-check"></span> Save Changes</button> 
                        </form>
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
<?php include'controller/controls.php'; ?> 
<script src="../dist/js/command/rafjas.js"></script>
<script src="../dist/js/sweetalert.min.js"></script>
</div>
</body>
</html>




