<?php 
require('../dbconnect.php');  
// function submitEmployer() {
// $dbcon = mysql_connect("localhost", "ixd2442", "book5h");  
// mysql_select_db("ixd2442_jobs", $dbcon);  

if (!$dbcon)
  {
  die('Could not connect: ' . mysql_error());
  }
 
if (  ( isset($_POST['employerEmployer']) ) )
{
    $employerEmployer = mysql_real_escape_string($_POST['employerEmployer']);      
    $employerName = mysql_real_escape_string($_POST['employerName']);
    $employerEmail = mysql_real_escape_string($_POST['employerEmail']);
    $employerTitle = mysql_real_escape_string($_POST['employerTitle']);
    $employerWebsite = mysql_real_escape_string($_POST['employerWebsite']);
    $employerPhone = mysql_real_escape_string($_POST['employerPhone']);
    $employerAddresss = mysql_real_escape_string($_POST['employerAddresss']);
    $last_id = mysql_insert_id();  

    $sql = "INSERT INTO `employer_contact_info`(`ID`, `employer`, `name`, `email`, `title`, `website`, `phone`, `address`) 
    VALUES ('null','$employerEmployer','$employerName','$employerEmail','$employerTitle','$employerWebsite','$employerPhone','$employerAddresss');";
//mysqli_query($sql, $dbcon);
  
  if (!mysql_query($sql, $dbcon))
    {
     die('Error: ' . mysql_error());
    } else {
     // echo "1 record added";
     // printf("Last inserted record has id %d\n", mysql_insert_id());
  }
}
// }
  // header("Location: index.php");
?>

         

