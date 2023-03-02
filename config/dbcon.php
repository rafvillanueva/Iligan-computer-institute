<?php $mysqli = new mysqli('localhost','root','','iligan_computer_institute');?>

 
<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'iligan_computer_institute'; 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// Count Dbz
$get_dbz = new PDO("mysql:host = localhost;dbname=iligan_computer_institute" , "root", ""); 
// End Count

?> 