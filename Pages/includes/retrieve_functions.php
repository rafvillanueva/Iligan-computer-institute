      <!-- GET FUNCTIONS -->
      <?php
            if(isset($_GET['id'])){
              $id = $_GET['id'];
              $rs_student_info = mysqli_query($mysqli, "SELECT * FROM tbl_student WHERE id_record = '$id'");
              $row = mysqli_fetch_array($rs_student_info);
            }
      ?>
      <!-- END GET -->

      <?php 
          //*Add Drop-out Query
      if (isset($_POST['retrieve_student'])){

                $raf_holder = mysqli_query($mysqli, "UPDATE tbl_student SET a_status = '' WHERE id_record = '$id'");
                $rs_drop = mysqli_query($mysqli, $drop_query);
                
          //*Drop-out end
       ?>

                     <script type="text/javascript">
                          alert("Student Successfully Retrieved.");
                          window.location.href = 'Dropped-Student';
                     </script>
      <?php } ?>