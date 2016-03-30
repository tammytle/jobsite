 <?php 
  ob_start();
  // session_start();
  require('../dbconnect.php'); 
  ?>  
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Job Site</title>
  <link rel="stylesheet" href="../css/foundation.css" />
  <link rel="stylesheet" href="../css/foundation.min.css" />
  <link rel="stylesheet" href="../css/app.css" />
  <link rel="stylesheet" href="../css/base.css" />
</head>
<?php include('../header.php'); ?>   
<body> 

<div class="row">
  <div class="large-12 columns">
 <?php
  if (!$dbcon)
    {
    die('Could not connect: ' . mysql_error());
    }
   
  if (  ( isset($_GET['id']) ) )
  {

    $sql = mysql_query("SELECT 
      job_postings.ID, 
      job_postings.title, 
      job_postings.location, 
      job_postings.description, 
      job_postings.posted_date, 
      employer_contact_info.employer, 
      employer_contact_info.name,
      employer_contact_info.email,
      employer_contact_info.website,
      employer_contact_info.address 
      FROM job_postings 
      INNER JOIN employer_contact_info
      ON job_postings.employer_id=employer_contact_info.ID
      WHERE job_postings.ID = '" . $_GET['id'] . "'", $dbcon);

    while ($row = mysql_fetch_assoc($sql)) {

    echo "<div class='row'>
            <div class='large-7 columns'>
            <h4 class='teal'>" . $row['title'] ." </h4><h5>
            " . $row['employer'] ." </h5><br>
            ". $row['location'] ." <br><br>
            ". $row['description'] ."

            </div>
            <div class='large-5 columns'>
            <h4 class='teal'>To Apply </h4>
            " . $row['name'] ." <br>
            ". $row['email'] . "<br>
            " . $row['website'] . "<br>
            " .$row['address'] ."
            </div>
          </div>";
    }
  }
  ?>    </div>
      </div>
    </div>

</body>
</html>