<?php  
        // //echo $today = date("F j, Y");
        // date_default_timezone_set("Asia/Manila");
        // $month = date("F"); // Get the number of the month, 1-12
        // if($month <= 6) { 
        //   $SemToNow ="2nd Semester" ." ".date("Y",strtotime("-1 year"))."-".date("Y");
        // }else{
        //   $SemToNow ="1st Semester" ." ".date("Y")."-".date("Y",strtotime("+1 year"));
        // }

$SemToNow = date("Y")."-".date("Y",strtotime("+1 year"));
?> 