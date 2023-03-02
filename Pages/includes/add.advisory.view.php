<!-- Modal -->
<div class="modal fade" id="add-advisory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Add Advisory for <b style="color:#D72958;"><?php echo $SemToNow; ?></b></h4>
        </button>
      </div>
      <form class="form-horizontal" onsubmit="return false" autocomplete="off">
      <div class="modal-body">
       <input type="hidden" id="User_id" value="<?= $id?>">
       <h5><b style="color:#D72958;">Please select block</b></h5>
       <select id="id_section" class="form-control">
          <option selected disabled value="">--</option>
            <?php
                $s_name = mysqli_query($mysqli, "SELECT * FROM tbl_section WHERE Status='' ORDER BY sec_name ASC");
                while($Sec_row = mysqli_fetch_array($s_name)){
            ?>
            <option value="<?= $Sec_row['id_section'] ?>" required><?= $Sec_row['sec_name'] ?><?php echo " - "; ?><?= $Sec_row['a_level'] ?></option>
            <?php } ?>
        </select>
        <input type="hidden" id="semester_year" value="<?= $SemToNow?>">
<!--         <script type="text/javascript">
            function staff_setting(){
              var acc_level = document.getElementById("level").value;
              if(acc_level === "Grade 11"){
                document.getElementById("grade11").style.display = "block";
                document.getElementById("grade12").style.display = "none";
              }else if(acc_level === "Grade 12"){
                document.getElementById("grade11").style.display = "none";
                document.getElementById("grade12").style.display = "block";
              } else{
                document.getElementById("staff_group").style.display = "none";                                    
              }
            }
        </script> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button onclick="insertadvisory()" class="btn btn-primary">Save changes</button></form>
      </div>
    </div>
  </div>
</div>



