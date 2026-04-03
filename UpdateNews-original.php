<?php require_once('authadmin.php');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <link rel="stylesheet" type="text/css" href="majorgolfpools2023.css">
  <title></title>
  <style>
html 
{ background: url(images/control_room.jpg) no-repeat center center fixed;
    -webkit-background-size: cover; -moz-background-size: cover;
    -o-background-size: cover; background-size: cover;
}


#admintable {
border: 2px solid;
color: #0827440;
width: 100%;
text-align: left;
vertical-align: top;
background-color: #ffffff;
}  
</style>

  </head>
  <body>
   <div class="center">
    <h1 style="text-align: center;">Golf Pool Admin - Post Golf Pool News</h1>
  <table style="width:100%">
      <tr>
        <td><h3><a class="admin" href="admin.php">Team Moderation</a></h3></td>
        <td><h3><a class="admin" href="admin-form.php">Entry Form Input</a></h3></td> 
        <td><h3><a class="admin" href="UpdatePoolData.php">Pool Name and Data</h3></td>
        <td><h3>&nbsp;<b>|</b>&nbsp;&nbsp;&nbsp;&nbsp; </h3></td>
        <td><h3><a class="admin" href="News.php">Pool News Page</a></h3></td>
        <td><h3><a class="admin" href="index.php">Pool Home Page</a></h3></td>
        <td><h3 style="text-align: right;"><a class="admin" href="adminlogout.php">Logout</a></h3></td>
      </tr>
  </table>
    <h2>Post Golf Pool News</h2>
    <?php
    //set timezone to eastern
      date_default_timezone_set("America/New_York"); 
    ?>
     
  
   <form name="poolnewsform" id="poolnewsform" action="UpdateNews.php" method="post">
      <b><label for="poolnews">Compose Pool News Here:</label></b><br>
      <textarea id="poolnews" name="poolnews" maxlength="1500" rows="10" cols="140"></textarea><br>
      <input type="submit" value="Post" name="submittednews">
      <input type="submit" value="Clear" name="clearfields">
   </form>
   
   <?php 
    if($_POST['submittednews'] == "Post"){ ?>
        <?php //Function to sanitize values received from the form. Prevents SQL injection
	       function clean($str) {
		      $str = @trim($str);
		      if(get_magic_quotes_gpc()) {
			       $str = stripslashes($str);
		        }
		      return $str;
	        }
        // Variable that captures text (pool news) from form and is sanitized with clean function
        $news = clean($_POST['poolnews']);
        
        // Make connection to pool database
        //$con = mysqli_connect("localhost", "gpa", "17Nand1na&!");
        // Database connection function
        function getDbConnection(): mysqli {
          $config = require __DIR__ . '/../config/config.php';
          try {
              $link = mysqli_connect(
                  $config['db_host'] ?? 'localhost',
                  $config['db_user'] ?? 'user',
                  $config['db_pass'] ?? 'password',
                  $config['db_name'] ?? 'database'
              );

              if (!$link) {
                  throw new Exception(mysqli_connect_error());
              }

              mysqli_set_charset($link, 'utf8mb4');
              return $link;
          } catch (Exception $e) {
              error_log("Database connection failed: " . $e->getMessage());
              die("We're experiencing technical difficulties. Please try again later.");
          }
        }

        // Connect to database
        $con = getDbConnection();
        if (!$con)
        {
        die('Could not connect: ' . mysqli_error());
        }
        
        //mysqli_select_db($con,"majorgolfpool");
        
        //inserts pool news into the database - datetime columns hopefully update themselves
        $sql = "INSERT INTO news (ID, date, time, post) VALUES ('Null', NOW(), NOW(), '".mysqli_real_escape_string($con, $news)."')";
      
        //line to execute query
        //mysqli_query($con, $sql) or die (mysqli_error($con));
    
        if (mysqli_query($con, $sql)) {
            echo "News posted successfully";
        } else {
          echo "Error updating record: " . mysqli_error($con);
        }
        
             
        mysqli_close($con);
              
         ?>
         
        <h3>Your Pool News was posted as:<br></h3>
        <p><b>
        <?php
        echo date ("l") . " ";
        echo date ("Y-m-d") . " ";
        echo date ("h:i:sa"). " ";
        ?>
        </b>
        <?php
        echo "$news <br>" . " ";
        ?>
        </p><?php
    } ?>
           <br>
      </div>
  </body>
</html>
