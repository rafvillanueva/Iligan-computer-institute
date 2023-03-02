<?php 
include('../../config/dbcon.php');
// Adding Data to table - #Accounts 
if(isset($_POST['user_id'])){
  $id = $_POST['user_id']; 
  $a_Complete = $_POST['a_Complete'];
  $username = $_POST['username']; 
  $password = $_POST['password'];
  $type = $_POST['type'];
  if(empty($id) || empty($a_Complete) || empty($username) || empty($password) || empty($type)){ 
?>
    <div class="alert alert-danger samuel animated shake alert-dismissable">
      <strong><span class="fa fa-warning"></span> Warning!</strong> Please enter the following.
    </div><hr>
<?php
  }else{
    $exist = "SELECT count(*) as e,user_id,username FROM user WHERE username like '$username'";
    $exist_sql = mysqli_query($mysqli, $exist);
    $exist_row = mysqli_fetch_array($exist_sql);
    if($exist_row['e'] == 0){
      $password=md5($password);
      $query = "INSERT INTO user(User_id,a_Complete,username,password,type) VALUES('$id','$a_Complete','$username','$password','$type')";
      $sql = mysqli_query($mysqli, $query);
      echo '
      <div class="alert alert-success samuel animated shake alert-dismissable">
        <strong><span class="fa fa-check"></span> Success!</strong> 
        New Account Member <a href="#" class="alert-link">'.$a_Complete.'</a> has been added.
      </div><hr>
      ';
      ?>
      <script type="text/javascript">
        setTimeout(function(){ 
         window.location.reload(1);
      }, 2000);
      </script> 
      <?php
    }else{
      echo '
      <div class="alert alert-warning samuel animated shake alert-dismissable">
      <b><span class="fa fa-warning"></span></b> Username : <strong>'.$username.'</strong> is Already Exist!
      </div><hr>
      ';
    }
  }
}
?>

