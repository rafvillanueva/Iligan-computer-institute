 <?php include 'controller/GEN-ID.php';?>   
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <h4 id="h5-student-header"><span class="fa fa-volume-up"></span> Instructions: Fill in all the required information. Do not leave an item blank. If item is not applicable, indicate "<i id="i-header">(N/A)</i>".</h4>
          <div class="box">
            <div class="box-header with-border">  
             <!--  <button href="#" data-toggle="modal" data-target="#add-record" class="btn btn-primary btn-md btn-flat"><i class="fa fa-plus"></i> Add Record</button> -->
             <div id="idreg"></div>         
             <i id="i-raf">Student Information*</i> 
            </div>
            <div class="box-body">
                  <form class="form-horizontal" onsubmit="return false" autocomplete="off">
                        <div class="form-group">
                          <div class="col-sm-9">
                            <input type="hidden" id="stud_id" class="form-control" readonly value="Stud-<?php echo $stud_id; ?>" style="width: 25%;">
                            <input type="hidden" id="a_status" value="<?php echo "Registered";?>">
                          </div>
                        </div>
                        <input type="hidden" id="time_encoded" value="<?php echo date("m/d/Y"); date_default_timezone_set("Asia/Manila"); echo" ";date("l") ?>">
                        <div class="form-group"> 
                                <label class="control-label col-sm-2" for="email">Last Name :</label>
                                <div class="col-sm-2">
                                  <input type="text" id="l_name" class="form-control" placeholder="Enter Last Name here..">
                                </div>

                                <label class="control-label col-sm-2" for="email">First Name :</label>
                                <div class="col-sm-2">
                                  <input type="text" id="f_name" class="form-control" placeholder="Enter First Name here..">
                                </div>

                                <label class="control-label col-sm-2" for="email">Middle Name :</label>
                                <div class="col-sm-2">
                                  <input type="text" id="m_name" class="form-control" placeholder="Enter Middle Name here..">
                                </div>
                        </div>


                        <div class="form-group">

                              <label class="control-label col-sm-2" for="email">Extension Name :</label>
                              <div class="col-sm-2">
                                <input type="text" id="x_name" class="form-control" placeholder="Enter Extension Name here..">
                              </div>

                              <label class="control-label col-sm-2" for="email">LRN :</label>
                              <div class="col-sm-2">
                                <input type="text" id="lrn" maxlength="12" class="form-control" oninput="this.value = this.value.replace(/[^0-9.Nn/Aa]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter LRN here..">
                              </div>

                              <label class="control-label col-sm-2" for="email">Contact Number :</label>
                              <div class="col-sm-2">
                                <input type="text" id="s_contact_num" maxlength="11" oninput="this.value = this.value.replace(/[^0-9.Nn/Aa]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" placeholder="Enter Contact Number here..">
                              </div>

                        </div>
                          

                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Birthdate :</label>
                              <div class="col-sm-2">
                                <input type="date" id="birthdate" class="form-control">
                              </div>

                              <label class="control-label col-sm-2" for="email">Gender :</label>
                              <div class="col-sm-2">
                                    <select id="gender" class="form-control">
                                          <option value="" selected disabled>--</option>
                                          <option value="Male">Male</option>
                                          <option value="Female">Female</option>
                                    </select>
                              </div>
                        
                              <label class="control-label col-sm-2" for="email">Religion :</label>
                              <div class="col-sm-2">
                                    <select id="religion" class="form-control">
                                          <option value="" selected disabled>----</option>
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
                                    <select class="form-control" id="ip" onchange="ip_setting()">
                                          <option value="" selected disabled>--</option>
                                          <option value="Yes">Yes</option>
                                          <option value="No">No</option>
                                    </select>
                              </div>

                              <label class="control-label col-sm-2">Specify :</label>
                              <div class="col-sm-4">
                                      <input type="text" id="s_ip" style="display: none;" placeholder="Specify Indigenous Group" class="form-control">
                              </div>
                        </div>


                        <div class="form-group">
                              <label class="control-label col-sm-4">Mother Tongue :</label>
                              <div class="col-sm-2">
                                    <select class="form-control" id="mt" onchange="mt_setting()">
                                          <option value="" selected disabled>--</option>
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
                                      <input type="text" id="s_mt" style="display: none;" placeholder="Specify Mother Tongue" class="form-control">
                              </div>
                        </div>

                            <script type="text/javascript">
                                function ip_setting(){
                                  var ip_group = document.getElementById("ip").value;
                                  if(ip_group === "Yes"){
                                    document.getElementById("s_ip").style.display = "block";
                                  }else{
                                    document.getElementById("s_ip").style.display = "none";                                    
                                  }
                                }

                                function mt_setting(){
                                  var mt = document.getElementById("mt").value;
                                  if(mt === "Other"){
                                    document.getElementById("s_mt").style.display = "block";
                                  }else{
                                    document.getElementById("s_mt").style.display = "none";                                    
                                  }
                                }
                            </script>



                          <hr>
                              <i id="i-raf">Student Address*</i>
                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Region :</label>
                              <div class="col-sm-4">
                                        <select class="form-control" id="regCode" onchange="getprovince()">
                                          <option disabled selected value="">--</option>
                                          <?php
                                            $province = mysqli_query($mysqli, "SELECT * FROM refregion ORDER BY regDesc ASC");
                                            while($row = mysqli_fetch_array($province)){
                                              ?>
                                              <option value="<?= $row['regCode'] ?>"><?= $row['regDesc'] ?></option>
                                              <?php
                                            }
                                          ?>
                                        </select>
                              </div>
                              <label class="control-label col-sm-2" for="email">Province :</label>
                              <div class="col-sm-4">
                                          <select class="form-control" id="provCode" onchange="getMunicity()">
                                                <option disable selected value="">--</option>
                                          </select>
                              </div>
                        </div>

                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">City/Municipality :</label>
                              <div class="col-sm-4">
                                          <select class="form-control" id="citymunCode" onchange="getBrgy()">
                                            <option disable selected value="">--</option>
                                          </select>
                              </div>
                              <label class="control-label col-sm-2" for="email">Barangay :</label>
                              <div class="col-sm-4">
                                          <select class="form-control" id="brgyCode">
                                            <option disable selected value="">--</option>
                                          </select>
                              </div>
                        </div>



                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email" style="color:orange;">Address Line 2 :</label>
                              <div class="col-sm-4">
                                <input type="text" id="address" class="form-control" placeholder="House No. | Street | Building Number here..">
                              </div>

                              <label class="control-label col-sm-2" for="email">Mode of Registration :</label>
                              <div class="col-sm-4">
                                          <select class="form-control" id="mode_of_reg">
                                            <option value="" selected disabled>----</option>
                                            <option value="Online">Online</option>
                                            <option value="Onsite">Onsite</option>
                                          </select>
                              </div>
                        </div>
                        <hr>
 
                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Previous School :</label>
                              <div class="col-sm-10">
                                <input type="text" id="current_school" class="form-control" placeholder="Enter Previous/Current School here..">
                              </div>
                        </div>
                        
                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Type of School :</label>
                              <div class="col-sm-4">
                                    <select id="school_type" class="form-control">
                                          <option value="" selected disabled>----</option>
                                          <option value="Public">Public</option>
                                          <option value="Private">Private</option>
                                          <option value="ALS">ALS</option> 
                                    </select>
                              </div>

                              <label class="control-label col-sm-2" for="email">Year Graduated :</label>
                              <div class="col-sm-4">
                                <input type="text" id="year_grad" class="form-control" placeholder="Enter year graduated here..">
                              </div>
                        </div>



 
                       <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Preferred Strand :</label>
                              <div class="col-sm-6">
                                    <select id="a_strand" class="form-control">
                                          <option value="" selected disabled>----</option>
                                          <option value="Accountancy, Business and Management (ABM)">Accountancy, Business and Management (ABM)</option>
                                          <option value="Humanities and Social Sciences (HUMSS)">Humanities and Social Sciences (HUMSS)</option>
                                          <option value="General Academic Strand (GAS)">General Academic Strand (GAS)</option>
                                          <option value="Computer Engineering (TVL - CE)">Computer Engineering (TVL - CE)</option>
                                          <option value="Information Technology (TVL - IT)">Information Technology (TVL - IT)</option>
                                          <option value="Culinary Arts (TVL - CA)">Culinary Arts (TVL - CA)</option>
                                    </select>
                              </div>
                              <label class="control-label col-sm-2" for="email">Grade Level to Enroll:</label>
                              <div class="col-sm-2">
                                    <select id="a_level" class="form-control">
                                          <option value="" selected disabled>----</option>
                                          <option value="Grade 11">Grade 11</option>
                                          <option value="Grade 12">Grade 12</option>
                                    </select>
                              </div>
                        </div>
  

                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">FB Account Name :</label>
                              <div class="col-sm-10">
                                <input type="text" id="fb_account" class="form-control" placeholder="Enter Facebook Account Name/Link here..">
                              </div>
                        </div>
          
                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Grant Type :</label>
                              <div class="col-sm-6">
                                    <select id="grant_type" class="form-control">
                                          <option value="" selected disabled>---</option>
                                          <option value="Qualified Voucher Recipient (QVR)">Qualified Voucher Recipient (QVR)</option>
                                          <option value="Education Service Contracting (ESC)">Education Service Contracting (ESC)</option>
                                          <option value="Paying">Paying</option>
                                    </select>
                              </div>

                              <label class="control-label col-sm-2" for="email">Student Type :</label>
                              <div class="col-sm-2">
                                    <select id="student_type" class="form-control" onchange="type_change()">
                                          <option value="" selected disabled>--</option>
                                          <option value="New">New</option>
                                          <option value="Old">Old</option>
                                          <option value="Returning">Returning</option>
                                    </select>
                              </div>
                        <script type="text/javascript">
                                function type_change(){
                                  var student_type = document.getElementById("student_type").value;
                                  if(student_type === "Returning"){
                                    document.getElementById("creturning").style.display = "block";
                                  }else{
                                    document.getElementById("creturning").style.display = "none";                                    
                                  }
                                }
                        </script>
                        </div>


                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Learning Modality :</label>
                              <div class="col-sm-2">
                                    <select id="learning_modality" class="form-control">
                                          <option value="" selected disabled>--</option>
                                          <option value="Modular (Printed)">Modular (Printed)</option>
                                          <option value="Repository (Digital)">Repository (Digital)</option>
                                          <option value="Online">Online</option>
                                    </select>
                              </div>

                              <label class="control-label col-sm-3" for="email">Referred by :</label>
                              <div class="col-sm-5">
                                    <input type="text" id="referred" class="form-control" placeholder="Enter Complete Name here..">
                              </div>
                        </div>

                        <hr>
                        <i id="i-raf">Parent's Information*</i>
                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Father's Name :</label>
                              <div class="col-sm-4">
                                <input type="text" id="fathers_name" class="form-control" placeholder="Enter Father's Name here..">
                              </div>

                              <label class="control-label col-sm-2" for="email">Contact Number :</label>
                              <div class="col-sm-4">
                                <input type="text" id="f_contactnum" maxlength="11" class="form-control" oninput="this.value = this.value.replace(/[^0-9.Nn/Aa]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Contact Number here..">
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Mother's Name :</label>
                              <div class="col-sm-4">
                                <input type="text" id="mothers_name" class="form-control" placeholder="Enter Mother's Name here..">
                              </div>

                              <label class="control-label col-sm-2" for="email">Contact Number :</label>
                              <div class="col-sm-4">
                                <input type="text" id="m_contactnum" class="form-control" maxlength="11" oninput="this.value = this.value.replace(/[^0-9.Nn/Aa]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Contact Number here..">
                              </div>
                        </div>
                        <hr>
                        
                        <i id="i-raf">Guardian Information*</i>
                        <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Guardian Name :</label>
                                <div class="col-sm-2">
                                  <input type="text" id="guardian_name" class="form-control" placeholder="Enter Guadian Name here..">
                                </div>

                                <label class="control-label col-sm-2" for="email"> Relationship :</label>
                                <div class="col-sm-2">
                                  <input type="text" id="guardian_relationship" class="form-control" placeholder="Enter Relationship here..">
                                </div>
                              <label class="control-label col-sm-2" for="email">Contact Number :</label>
                              <div class="col-sm-2">
                                <input type="text" id="guardian_contactnum" class="form-control" maxlength="11" oninput="this.value = this.value.replace(/[^0-9.Nn/Aa]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Contact Number here..">
                              </div>
                        </div>   <hr>  
                        
                        <i id="i-raf">Credentials*</i>              
                        <div class="form-group">
                              <div class="col-sm-12">
                                  <textarea class="form-control" id="credentials" rows="3" placeholder="Enter Credentials here.."></textarea>
                              </div>
                        </div> 

                      <div id="creturning" style="display: none;">
                        <hr>
                        <i id="i-raf">For returning learners (Balik-Aral and Those who shall Transfer/Move-in)*</i>
                        <div class="form-group">
                                <label class="control-label col-sm-2" for="email"><small>Last Level Completed:</small></label>
                                <div class="col-sm-2">
                                      <select id="last_levelcompleted" class="form-control">
                                            <option value="" selected disabled>--</option>
                                            <option value="Grade 10">Grade 10</option>
                                            <option value="Grade 11">Grade 11</option>
                                            <option value="Grade 12">Grade 12</option>
                                            <option value="ALS">ALS</option>
                                      </select>
                                </div>

                                <label class="control-label col-sm-3" for="email"><small>Last School Year Completed:</small></label>
                                <div class="col-sm-2">
                                  <input type="text" id="last_yearcompleted" class="form-control" placeholder="Enter Last School Year Completed/Attended here..">
                                </div>

                                <label class="control-label col-sm-1" for="email"><small>School ID:</small></label>
                                <div class="col-sm-2">
                                  <input type="text" id="school_id" class="form-control" placeholder="Enter School ID here..">
                                </div>
                        </div>  


                        <div class="form-group">
                                <label class="control-label col-sm-4" for="email">School Name Last Attended :</label>
                                <div class="col-sm-8">
                                  <input type="text" id="school_last_attended" class="form-control" placeholder="Enter School Name Last Attended here..">
                                </div>                       
                        </div>


                        <div class="form-group">
                                <label class="control-label col-sm-4" for="email">School Address <small style="color:blue;">(Barangay, City/Municipality, Province)</small></label>
                                <div class="col-sm-8">
                                  <input type="text" id="school_address" class="form-control" placeholder="Enter School Address (Barangay, City/Municipality, Province) here..">
                                </div> 
                        </div>
                      </div>


                  <div class="modal-footer">
                    <button onclick="regdata()" class="btn btn-default" id="btn-ici"><span class="fa fa-save"></span> Register Now!</button></form> 
                  </div> 
            </div>
          </div>
        </div>
      </div>  
    </section>
<?php include'controller/controls.php'; ?> 
<script src="../dist/js/command/rafjas.js"></script>

