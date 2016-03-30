<?php 
    ob_start();
	session_start();
	require('../dbconnect.php');
	require('scripts/protectedPage.inc.php');   
	require('scripts/submitPosting.inc.php');   
	require('scripts/submitEmployer.inc.php');
	require('scripts/regUser.inc.php');
	require('scripts/jobdetail.inc.php'); ?>  
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sheridan IXD Job Board</title>
  <link rel="stylesheet" href="../css/foundation.css" />
  <link rel="stylesheet" href="../css/foundation.min.css" />
  <link rel="stylesheet" href="../css/app.css" />
  <link rel="stylesheet" href="../css/base.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>  
<body>
  <?php include('../header.php'); ?> 

  <div class="content">

    <?php 
    include('listings.php');
    ?>
  </div>

</body>
</html>
