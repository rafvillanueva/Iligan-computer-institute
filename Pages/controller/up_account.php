<?php 
include('../../config/dbcon.php');
// Updating Data to table - #Accounts
if(isset($_POST['idx'])){
  $idz = $_POST['idx'];
  $a_Complete = $_POST['a_Complete'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $type = $_POST['type'];
 
  if(empty($a_Complete) || empty($username) || empty($idz) || empty($type)){
    echo '
    <div class="alert alert-danger samuel animated shake alert-dismissable">
      <strong><span class="fa fa-warning"></span> Warning!</strong> Please enter the following.
    </div>
    '; 
  }else{
    $exist = "SELECT count(*) as e,username FROM user WHERE username like '$username' AND User_id != '$idz'";
    $exist_sql = mysqli_query($mysqli, $exist);
    $exist_row = mysqli_fetch_array($exist_sql);

    if($exist_row['e'] == 0){
      if(empty($password)){
        $query = "UPDATE user SET a_Complete = '$a_Complete', username = '$username', type = '$type' WHERE User_id = '$idz'";
        $sql = mysqli_query($mysqli, $query);
        echo '
        <div class="alert alert-success samuel animated shake alert-dismissable">
          <strong><span class="fa fa-check"></span> Success!</strong> 
          Account Member <a href="#" class="alert-link">'.$a_Complete.'</a> is now updated.
        </div>
        ';
?>
      <script type="text/javascript">
        setTimeout(function(){ 
         window.location.reload(1);
      }, 2000);
      </script>
<?php
      }else{
        $password = md5($password);
        $query = "UPDATE user SET a_Complete = '$a_Complete', username = '$username', password = '$password', type = '$type' WHERE User_id = '$idz'";
        $sql = mysqli_query($mysqli, $query);       
        echo '
        <div class="alert alert-success samuel animated shake alert-dismissable">
          <strong><span class="fa fa-check"></span> Success!</strong> 
          Account Member <a href="#" class="alert-link">'.$a_Complete.'</a> is now updated.
        </div>
        ';
?>
      <script type="text/javascript">
        setTimeout(function(){ 
         window.location.reload(1);
      }, 2000);
      </script>
<?php        
     ?>
        <script type="text/javascript">
            setTimeout(function(){
            window.location.reload(1);
            }, 2000);
        </script>
     <?php } ?>
      <script type="text/javascript">
        setTimeout(function(){
         window.location.href = "accounts-edit?id=" + <?= $a_Complete ?>;
      }, 2000);
      </script>
      <?php
    }else{
      echo '
      <div class="alert alert-warning samuel animated shake alert-dismissable">
      <b><span class="fa fa-warning"></span></b> Username : <strong>'.$username.'</strong> is Already Exist!
      </div>
      ';
?>

      <script type="text/javascript">
          setTimeout(function(){
          window.location.reload(1);
          }, 2000);
      </script>

<?php
    }
  }
}
?>