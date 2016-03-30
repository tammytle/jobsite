<?php 

include_once 'dbconnect.php';

$loginError = ''; 

if (  ( isset($_POST['username']) ) && ( isset($_POST['password']) )  )
{
    $loginError = ValidateLogin($dbcon);
}    

function ValidateLogin($dbcon)
{
    $valid = false;
    // $sentUserName = mysql_real_escape_string($_POST['username']);
    // $sentPassword = mysql_real_escape_string($_POST['password']);
    
    $sentUserName = $_POST['username'];
    $sentPassword = $_POST['password'];

    $username = htmlspecialchars($sentUserName);
    $password = ($sentPassword);

    // $dbcon = mysql_connect("localhost", "ixd2442", "book5h");  
    // mysql_select_db("ixd2442_jobs", $dbcon); 
  
    // $query = mysql_query("SELECT * FROM users WHERE username = '$sentUserName'", $dbcon);
    $query = mysql_query("SELECT * FROM users WHERE username = '$sentUserName'", $dbcon);
    while ($row = mysql_fetch_assoc($query)) {
    $valid = hash('sha256', $password.$row['salt']) == $row['password'];
}
  if ( $valid ) {
    if(!(session_id() == '' || !isset($_SESSION))) {
      session_destroy(); 
    }

    session_start();
    $_SESSION["isLoggedIn"] = true;
    $_SESSION["username"] = $username;
    $_SESSION["pageCount"] = 0; 
    
    header("Location: private/index.php");
    
  } else {
    return ('That is an invalid login name or password.');
  }
}
?>

         

