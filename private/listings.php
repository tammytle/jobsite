  <!-- <h2>Submit a Job Posting</h2>
  <form id="submitPosting" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
    <p>Job title: <input type="text" name="jobTitle"/></p>
    <p>Location:  <input type="text" name="jobLocation"/></p>
    <p>Department:  <input type="text" name="jobDepartment"/></p>
    <p>Posted Date:  <input type="text" name="jobPosted_date"></p>
    <p>Accepted Until Date:  <input type="text" name="jobAccepted_date" maxlength="10" /></p>
    <p>Start Date:  <input type="text" name="jobStart_date"/></p>
    <p>Description:  <input type="text" name="jobDescription"/></p>
    <input type="submit" name="submitJob" value="Submit"/> 
  </form>
  
  <h2>Submit an Employer</h2>
    <form id="submitEmployer" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
    <p>Company: <input type="text" name="employerEmployer"/></p>
    <p>Name: <input type="text" name="employerName"/></p>
    <p>Email:  <input type="text" name="employerEmail"/></p>
    <p>Title:  <input type="text" name="employerTitle"/></p>
    <p>Website:  <input type="text" name="employerWebsite"></p>
    <p>Phone #:  <input type="text" name="employerPhone" maxlength="10" /></p>
    <p>Address:  <input type="text" name="employerAddresss"/></p>
    <input type="submit" name="submitEmployer" value="Submit"/> 
  </form>
  
  <h2>Employer Contact Info</h2>
  
<?php
    // $dbcon = mysql_connect("localhost", "ixd2442", "book5h");  
    // mysql_select_db("ixd2442_jobs", $dbcon);  

    $query = mysql_query("SELECT * FROM employer_contact_info ORDER BY employer ASC", $dbcon);

    echo "<table>
    <tr>
    <th>Company</th>
    <th>Name</th>
    <th>Email</th>
    <th>Title</th>
    <th>Website</th>
    <th>Phone #</th>
    <th>Address</th>
    </tr>";

    while ($row = mysql_fetch_assoc($query)) {
      echo "<tr>";
      echo "<td>" . $row['employer'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['title'] . "</td>";
      echo "<td>" . $row['website'] . "</td>";
      echo "<td>" . $row['phone'] . "</td>";
      echo "<td>" . $row['address'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  ?> -->

<div class="row">
  <div class="large-12 columns">
  <h3 class="teal">Job Postings</h3>
  <?php

    $query = mysql_query("SELECT job_postings.ID, job_postings.title, job_postings.location, job_postings.description, job_postings.posted_date, employer_contact_info.employer
FROM job_postings
INNER JOIN employer_contact_info
ON job_postings.employer_id=employer_contact_info.ID
ORDER BY job_postings.posted_date", $dbcon);
    while ($row = mysql_fetch_assoc($query)) {
    echo "<table>
    <tr>
    <th></th>
    <th></th>
    <tr></tr>";

      echo "<td class='lighttealBg' width='60%'><h4 class='teal'>" . $row['title'] . " </h4><h5>" . $row['employer'] . "</h5>" . substr(($row['description']), 0, 330) . "...<br><br><a href='jobDetail.php?id=".$row['ID'] ."' class='darkteal'>More info <i class='fa fa-angle-right'></i></a></td>";
      
      echo "</tr>";
    }
    echo "</table>";
  ?>
  </div>
</div>
<div class="row">
<!--   <ul class="pagination" role="navigation" aria-label="Pagination">
    <div class="large-6 columns">
    <li class="disabled">Previous <span class="show-for-sr">page</span></li>
    </div>
    <div class="large-6 columns text-right">
        <li><a href="#" aria-label="Next page">Next <span class="show-for-sr">page</span></a></li>
    </div>
  </ul> -->
</div>