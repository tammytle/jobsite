<?php 
  ob_start();
  session_start();
  require('../dbconnect.php');   
  require('scripts/protectedPage.inc.php');    
  require('scripts/submitEmployer.inc.php');  
  require('scripts/submitPosting.inc.php');    
  require('scripts/regUser.inc.php'); 

  // submitEmployer();
  // submitPosting();
  ?> 
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Sheridan IXD Job Board</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link rel="stylesheet" href="../css/foundation.min.css" />
    <link rel="stylesheet" href="../css/app.css" />
    <link rel="stylesheet" href="../css/base.css" />
    <style>
      .grey {
        border: 1px solid #eaeaea;
      }
    </style>
  </head>
  <?php include('../header.php'); ?>  
  <?php include('../footer.php'); ?>  

  <body>
  <div class="row">
  <div class="large-12 columns">
    <h3>Submit a Job Posting</h3>
    <hr class="grey">
<div class="row">
  <div class="large-7 columns">
      <h6>Step 1: Select an Employer or Create a New Employer</h6>
  </div>
  <div class="large-4 columns large-offset-1 columns">
      <h6>Step 2: Fill out job information</h6>
  </div>
</div>
    <form id="submitPosting" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
        <div class="break"></div>
        <div class="row">
          <div class="large-4 columns">
          <h5 class="teal">Employer List</h5>
            <?php 

            $query = mysql_query("SELECT * FROM employer_contact_info");

            while ($row = mysql_fetch_assoc($query)) {
                echo "<table>
                <tr>
                <th></th>
                <th></th>
                <tr></tr>";

                echo  "<td>" . 
                      '<input type="radio" name="submittedEmployerid" value="'.$row['ID'] .'"> ' 
                      . $row['employer'] . ""; 
                echo "</tr>";
              }
              echo "</table>";
              ?>
          </div>
          <div class="large-3 columns">
          <h5 class="teal">Create a New Employer </h5>
        <p>Company <input type="text" name="employerEmployer"/></p>
        <p>Name <input type="text" name="employerName"/></p>
        <p>Email  <input type="text" name="employerEmail"/></p>
        <p>Website  <input type="text" name="employerWebsite"></p>
        <p>Phone #  <input type="text" name="employerPhone" maxlength="10" /></p>
        <p>Address  <textarea name="employerAddresss"/></textarea></p>
          </div>

        <div class="large-4 columns large-offset-1 columns">
        <div class="break"></div>
          <p>Job title <input type="text" name="jobTitle"/></p>
          <p>Location  <input type="text" name="jobLocation"/></p>
          <p>Department  <input type="text" name="jobDepartment"/></p>
          <p>Accepted Until Date  <input type="text" name="jobAccepted_date" maxlength="10" /></p>
          <p>Start Date  <input type="text" name="jobStart_date"/></p>
          <p>Description  <textarea name="jobDescription"></textarea></p>
        </div>
    </div>
        <div class="row text-right">
          <input type="submit" class="btn darktealBtn white btnPad" name="submitJob" value="Submit"/> 
        </div>
        <div class="break"></div>
        </form>
        </div>
  </body>
</html>
