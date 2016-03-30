
<?php 
require('../dbconnect.php');  
// function submitPosting() {
  if (!$dbcon)
    {
    die('Could not connect: ' . mysql_error());
    }
   
    if (  ( isset($_POST['jobTitle']) ) )
    {
        $title = mysql_real_escape_string($_POST['jobTitle']);      
        $location = mysql_real_escape_string($_POST['jobLocation']);
        $acceptedDate = mysql_real_escape_string($_POST['jobAccepted_date']);
        $startDate = mysql_real_escape_string($_POST['jobStart_date']);
        $description = mysql_real_escape_string($_POST['jobDescription']);
        $department = mysql_real_escape_string($_POST['jobDepartment']);
        $employer_id = ($_POST['submittedEmployerid']);

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

      // echo $last_id;

      if (  ( isset($_POST['submittedEmployerid']) ) ) {
      $sql = "INSERT INTO `job_postings`(`ID`, `title`, `location`, `department`, `posted_date`, `accepted_date`, `start_date`, `description`, `employer_id`) 
      VALUES ('null','$title','$location','$department', now(),'$acceptedDate','$startDate','$description', '$employer_id');";
    } else if (  ( isset($_POST['employerEmployer']) ) ) {

    $sql = "INSERT INTO `job_postings`(`ID`, `title`, `location`, `department`, `posted_date`, `accepted_date`, `start_date`, `description`, `employer_id`) 
      VALUES ('null','$title','$location','$department', now(),'$acceptedDate','$startDate','$description', '$last_id');";
    }

    //mysqli_query($sql, $dbcon);
      
      if (!mysql_query($sql, $dbcon))
        {
         die('Error: ' . mysql_error());
        } else {
         jobAdd();
      }
    }

    function jobAdd() {
    echo '<script language="javascript">';
    echo 'alert("Job added!");';
    echo 'window.location.href="http://phoenix.sheridanc.on.ca/~ixd2442/jobsite/private/index.php"';
    echo '</script>';
}


// }
//  header("Location: index.php");
?>

         

