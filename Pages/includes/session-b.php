<?php 

        session_start();
        if($_SESSION['type']=='Administrator'){
        }else{
        header('Location:../index.php');
        destroy();
        }


 ?>