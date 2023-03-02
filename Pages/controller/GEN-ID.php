<?php 
    // Generate ID
    $Genid = "SELECT User_id as e FROM user ORDER BY User_id DESC";
    $genid_query = mysqli_query($mysqli, $Genid);
    $genid_row = mysqli_fetch_array($genid_query);
    if($genid_row['e'] == ""){
        $fac_id = "10001";
    }else{
      $str = substr($genid_row['e'], 3);
      $user_id = $str + 1; 
    }

    // Student Generate ID
    $Genid = "SELECT stud_id as e FROM tbl_student ORDER BY stud_id DESC";
    $genid_query = mysqli_query($mysqli, $Genid);
    $genid_row = mysqli_fetch_array($genid_query);
    if($genid_row['e'] == ""){
        $fac_id = "10001";
    }else{
      $str = substr($genid_row['e'], 5);
      $stud_id = $str + 1;
    }

    // Section Generate ID
    $Genid = "SELECT id_section as e FROM tbl_section ORDER BY id_section DESC";
    $genid_query = mysqli_query($mysqli, $Genid);
    $genid_row = mysqli_fetch_array($genid_query);
    if($genid_row['e'] == ""){
        $fac_id = "10001";
    }else{
      $str = substr($genid_row['e'], 4);
      $id_section = $str + 1;
    }



 ?>