                        <!-- Modal -->
                        <div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">Modal title</h4>
                              </div>
                              <div class="modal-body">
                                ...
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal End -->
                        <div class="container-fluid">
                          <form class="form-inline pull-right" method="POST" action="" autocomplete="off">
                            <div class="form-group">
                                <select class="form-control" id="getgradez" onchange="search()">
                                  <option disabled selected value="">-- LEVEL --</option>
                                  <option value="%%">All</option>
                                  <option value="Grade 11">Grade 11</option>
                                  <option value="Grade 12">Grade 12</option>
                                </select>
                            </div>
                            <B style="letter-spacing:1px;">&nbsp; OR &nbsp;</B>
                            <div class="form-group">
                              <input type="text" name="val-search" placeholder="Search here.." class="form-control" required>
                                                        <script type="text/javascript">
                                                          function search() {
                                                            var search_query = document.getElementById("getgradez").value;
                                                            window.location.href = "Records?q=" + search_query;
                                                          }
                                                        </script>
                            </div>
                            <button type="submit" name="btn-search" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                              <B style="letter-spacing:1px;">&nbsp;:&nbsp;</B>
                              <div class="form-group">
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#report">View Report</button>
                              </div>
                          </form>
                        </div>
                        <hr>                    
                        <table class="table table-striped table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <!-- <th>ID Number</th> -->
                                    <th> Student Name <small><i style="color:red;">(Lastname, Firstname, Middlename)</i></small></th>
                                    <th>Age</th>
                                    <th>Contact Number</th>
                                    <th>Grade Level</th>
                                    <th>Preferred Strand</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(isset($_POST['btn-search'])){
                                        $val = $_POST['val-search'];
                                        if(empty($val)){
                                            ?>
                                            <script type="text/javascript">window.location.href = "Records"</script>
                                            <?php
                                        }
                                        $students = "SELECT * FROM tbl_student a, tbl_student_history b WHERE a.stud_id = '$val' OR (a.l_name like '%$val%' OR a.f_name like '%$val%' OR a.m_name like '%$val%' OR a.x_name like '%$val%' OR a.a_level like '%$val%') AND a.a_status='Enrolled' AND a.stud_id = b.stud_id ORDER BY a_level DESC LIMIT 0,$perrow";
                                        $student_query = mysqli_query($mysqli, $students);

                                        if(mysqli_num_rows($student_query) == 0){
                                        ?>
                                            <tr>
                                                  <td colspan="8"><center><b>No matching records found</center></td>
                                            </tr>
                                        <?php
                                        }else{
                                        while($row = mysqli_fetch_array($student_query)){
                                            ?>
                                            <tr>
                                                <!-- <td><?= $row[1] ?></td> -->
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
                                                    <?= $row['l_name'].' , ' . $row['f_name'] .' ' .$row['m_name'] ?>
                                                </td>

                                                <td><?= $row['age'] ?></td>
                                                <td><?= $row['s_contact_num'] ?></td>
                                                <?php
                                                if($row['a_level'] == "Grade 11"){
                                                  $data = "Grade 11";
                                                }elseif($row['a_level'] == "Grade 12"){
                                                  $data = "Grade 12";
                                                }
                                                ?>
                                                <td><?= $data ?></td>
                                                <td><?= $row['a_strand'] ?></td>
                                                <td><button type="button" onclick="window.location='Records-view?id=<?= $row['stud_id']?>&type=Records-view';" class="btn btn-primary btn-sm">View</button></td>
                                            </tr>
                                            <?php
                                        }
                                      }
                                    }else{
                                        if(isset($_GET['q'])){
                                            $g = $_GET['q'];
                                            $rs = mysqli_query($mysqli, "SELECT * FROM tbl_student a, tbl_student_history b WHERE a.stud_id = b.stud_id AND a.a_status='Enrolled' AND a.a_level like '$g' ORDER BY a.a_level DESC LIMIT $p,$perrow");
                                        }else{
                                            $rs = mysqli_query($mysqli, "SELECT * FROM tbl_student a, tbl_student_history b WHERE a.stud_id = b.stud_id AND a.a_status='Enrolled' ORDER BY a_level ASC LIMIT $p,$perrow");
                                        }
                                        if(mysqli_num_rows($rs) == 0){
                                        ?>
                                            <tr>
                                                  <td colspan="8"><center><b>No matching records found</center></td>
                                            </tr>
                                        <?php
                                        }else{
                                        while($row = mysqli_fetch_array($rs)){
                                            ?>
                                            <tr>
                                                <!-- <td><?= $row[1] ?></td> -->
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
                                                    <?= $row['l_name'].' , ' . $row['f_name'] .' ' .$row['m_name'] ?>
                                                </td>
                                                <td><?= $row['age'] ?></td>
                                                <td><?= $row['s_contact_num'] ?></td>
                                                <?php
                                                if($row['a_level'] == "Grade 11"){
                                                  $data = "Grade 11";
                                                }elseif($row['a_level'] == "Grade 12"){
                                                  $data = "Grade 12";
                                                }
                                                ?>
                                                <td><?= $data ?></td>
                                                <td><?= $row['a_strand'] ?></td>
                                                <td><button type="button" onclick="window.location='Records-view?id=<?= $row['stud_id']?>&type=Records-view';" class="btn btn-primary btn-sm">View</button></td>
                                            </tr>
                                            <?php
                                          }
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>